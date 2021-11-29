<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{


    private $table = "product";
    private $img_tb = "image_tb";
    private $mail_tb = "mails";


    public function getProduct($product = false)
    {
        $this->db->select($this->table . '.*, image_tb.img_location as imgpath');
        $this->db->join('image_tb', 'image_tb.product = ' . $this->table . '.id');
        $this->db->where('feath_img', 1);
        if ($product == true) {
            $this->db->where($this->table . '.id', $product);
            return $this->db->get($this->table)->row_array();
        } else {
            $this->db->limit(12);
            $this->db->order_by($this->table . '.id', 'DESC');
            return $this->db->get($this->table)->result();
        }
    }

    public function getImg($product)
    {
        $this->db->select($this->img_tb . '.*');
        $this->db->where($this->img_tb . '.product', $product);
        return $this->db->get($this->img_tb)->result_object();
    }

    public function insertProd($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }

    public function getProd()
    {
        $this->db->select($this->table . '.*');
        $this->db->order_by($this->table . '.id', 'DESC');
        return $this->db->get($this->table)->result();
    }

    public function addimg($data)
    {
        $this->db->insert($this->img_tb, $data);
        return true;
    }

    public function insertmail($data)
    {
        $this->db->insert($this->mail_tb, $data);
        return true;
    }

    public function getMail($mail = false)
    {
        $this->db->select($this->mail_tb . '.*');
        if ($mail == true) {
            $this->db->where($this->mail_tb . '.mail_id', $mail);
            // $this->db->limit('12');
            return $this->db->get($this->mail_tb)->row_array();
        }
        $this->db->order_by($this->mail_tb . '.mail_id', 'DESC');
        return $this->db->get($this->mail_tb)->result();
    }

    public function edti($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        return true;
    }

    public function search($text)
    {
        $this->db->select($this->table . '.*, image_tb.img_location as imgpath');
        $this->db->join('image_tb', 'image_tb.product = ' . $this->table . '.id');
        $this->db->where('feath_img', 1);
        $this->db->like($this->table . '.proname', $text);
        return $this->db->get($this->table)->result();
    }


    public function laodmore($offset, $limit)
    {
        $this->db->select($this->table . '.*, image_tb.img_location as imgpath');
        $this->db->join('image_tb', 'image_tb.product = ' . $this->table . '.id');
        $this->db->where('feath_img', 1);
        $this->db->limit($offset, $limit);
        $this->db->order_by($this->table . '.id', 'DESC');
        return $this->db->get($this->table)->result();
    }


    public function delete_item($item){
        $this->db->where($this->table.'.id',$item);
        $this->db->delete($this->table);
        return true;
    }

}
