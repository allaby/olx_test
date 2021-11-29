<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }

    public function shop_page()
    {
        $products = $this->Product_model->getProduct();
        // var_dump($products);
        // exit;
        $data['items'] = $products;
        $this->load->view('templates/header');
        $this->load->view('pages/shop', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $data['contactemail'] = "contact@agroindustriel.site";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/condition', $data);
        $this->load->view('templates/footer');
    }

    public function avis()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/avis');
        $this->load->view('templates/footer');
    }

    public function signle_item($product_id)
    {
        $item = $this->Product_model->getProduct($product_id);

        // $this->load->view('templates/header');
        $img = $this->Product_model->getImg($item['id']);
        // var_dump($img);
        // exit();
        $data['item'] = $item;
        $data['images'] = $img;
        $this->load->view('pages/single2', $data);
        // $this->load->view('templates/footer');
    }

    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/contact');
        $this->load->view('templates/footer');
    }

    public function aboutus()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/aboutus');
        $this->load->view('templates/footer');
    }

    public function juridic(){
        $this->load->view('templates/header');
        $this->load->view('pages/juridic');
        $this->load->view('templates/footer');
    }
}
