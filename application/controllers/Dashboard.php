<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index()
    {
        $this->load->view('templates/header_back');
        $this->load->view('backoffice/dashboard');
        $this->load->view('templates/footer_back');
    }

    public function anonce()
    {
        $products = $this->product_model->getProd();
        // var_dump($products);
        // die;
        $data['products'] = $products;
        $this->load->view('templates/header_back');
        $this->load->view('backoffice/anonce', $data);
        $this->load->view('templates/footer_back');
    }

    public function add_anonce()
    {
        $this->load->view('templates/header_back');
        $this->load->view('backoffice/add_anonce');
        $this->load->view('templates/footer_back');
    }

    public function comment()
    {
        $mail = $this->product_model->getMail();
        // var_dump($mail); die;
        $data['mails'] = $mail;
        $this->load->view('templates/header_back');
        $this->load->view('backoffice/comment', $data);
        $this->load->view('templates/footer_back');
    }

    public function addproduct()
    {
        // var_dump($_REQUEST);
        $title = $_REQUEST['title'];
        $price = $_REQUEST['price'];
        $description = $_REQUEST['description'];

        $proData = array(
            'proname' => $title,
            'amount' => $price,
            'description' => $description
        );
        $insert = $this->product_model->insertProd($proData);
        echo $insert;
        // var_dump($insert);
        // exit;
    }

    public function addimg()
    {
        // var_dump($_FILES);
        if (isset($_FILES)) {
            $type = explode('.', $_FILES['image']['name']);
            $type = $type[count($type) - 1];
            $test = date('YmdHms');
            $file_name = $test . "." . strtolower($type);
            $file_tmp = $_FILES['image']['tmp_name'];
            $target = './upload/';
            $url = './upload/' . uniqid(rand()) . '.' . $type;
            if (in_array($type, array('jpg', 'jpeg', 'png', 'gif'))) {
                if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $url)) {
                        $imgpath = $url;
                        $item = $_REQUEST['itemid'];
                        $feature = $_REQUEST['featured'];
                        $imgdata = array(
                            'img_location' => $imgpath,
                            'feath_img' => $feature,
                            'product' => $item
                        );
                        $addimg = $this->product_model->addimg($imgdata);

                        echo $addimg;
                    }
                }
            }
            return '';
        }
    }

    public function sendmail()
    {
        // var_dump($_REQUEST);
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];

        $data = array(
            'name' => $name,
            'email' => $email,
            'message' => $message
        );
        $insert_mail = $this->product_model->insertmail($data);
        // var_dump($insert_mail); die;
        if ($insert_mail == true) {
            $this->load->library('email');
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'agroindustriel.site';
            $config['smtp_user'] = 'agrodfem';
            $config['smtp_pass'] = '9WDUdfgP6xpS';
            $config['smtp_port'] = 587;
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not 

            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($email, $name);
            $this->email->to("contact@agroindustriel.site");
            $this->email->subject("Achat De Machine");
            $this->email->message($message);
            $this->email->send();
            // var_dump($this->email->print_debugger());
            // die;
            // if ($this->email->send()) {
            //     echo "true";
            // } else {
            //     echo "false";
            // }
            echo true;
        }
    }


    public function getmail()
    {
        // var_dump($_REQUEST);
        $mail_id = $_REQUEST['mail'];
        $mail = $this->product_model->getMail($mail_id);
        // var_dump($mail);
        // $message = "";
        $message = $mail['message'];
        echo $message;
    }


    public function edit($item)
    {

        $items = $this->product_model->getProduct($item);
        $title = $items['proname'];
        $amount = $items['amount'];
        $description = $items['description'];
        $itemid = $items['id'];
        // var_dump($description);
        // die;
        // $data['$item'] = $items;
        $data['title'] = $title;;
        $data['itemid'] = $itemid;
        $data['amount'] = $amount;
        $data['description'] = $description;
        $this->load->view('templates/header_back');
        $this->load->view('backoffice/edit', $data);
        $this->load->view('templates/footer_back');
    }

    public function delete($item){
        $delet_item = $this->product_model->delete_item($item);
        // var_dump($delet_item);die;
        if($delet_item){
            redirect(base_url('announcement'));
        }
    }

    public function editproduct()
    {
        // var_dump($_REQUEST);
        // $imgpath = $url;
        $itemid = $_REQUEST['itemid'];
        $title = $_REQUEST['title'];
        $price = $_REQUEST['price'];
        $description = $_REQUEST['description'];
        $proData = array(
            'proname' => $title,
            'amount' => $price,
            'description' => $description
        );
        // $update = $this->product_model->insertProd($proData);
        $updata = $this->product_model->edti($proData, $itemid);
        // var_dump($updata);
        echo 'ok';
    }


    public function search()
    {
        // var_dump($this->input->post('field'));
        $text = $this->input->post('field');
        $searResult = $this->product_model->search($text);
        // var_dump($searResult);
        // searchpage
        $data['items'] = $searResult;
        $this->load->view('templates/header');
        $this->load->view('pages/searchpage', $data);
        $this->load->view('templates/footer');
    }


    public function loadmore()
    {
        $offset = $_REQUEST['offset'];
        $limit = $_REQUEST['limit'];
        $result = $this->product_model->laodmore($offset, $limit);
        // var_dump($result);
        $output = "";
        foreach ($result as $data) {
            $output = $output . '<li rel="" class="wrap tleft rel fleft ad_idfeUIp galcontent" data-adnumber="2" data-id="225199649">
            <div class="mheight tcenter">
                <a title="' . $data->proname . '" href="' . base_url('single') .'/'. $data->id . '" class="thumb tdnone scale1 rel detailsLinkPromoted linkWithHash ">
                    <img alt="Spațiu comercial" src="' . base_url() . $data->imgpath . '"></a>
            </div>
            <div class="inner">

                <h4 class="normal">
                    <a href="' . base_url('single') .'/'. $data->id . '" title="' . $data->proname . '" class="link linkWithHash detailsLinkPromoted">
                        <strong>' . $data->proname . '</strong>
                    </a>
                </h4>
                <p class="lheight14 color-1 margintop2 brkword">
                </p>
            </div>
            <ul class="date-location">
            </ul>
            <div class="price price-arranged">
                ' . $data->amount . ' € <span class="x-small block lheight14 color-2 arranged-label">Negociabil</span>
            </div>
            <div class="favtab abs zi3 observelinkgallery">
                <a class="inlblk lheight16 tdnone observe-link  {id:225199649}" href="#" data-statkey="ad.observed.list">
                    <span class="icon inlblk observe2 vtop observed-225199649" data-icon="star"></span>
                </a>
                <div class="suggesttitle small top abs br4 hidden">
                    <p>Salveaza ca favorit</p>
                </div>
            </div>
            </li>';
        }

        echo $output;
    }
}
