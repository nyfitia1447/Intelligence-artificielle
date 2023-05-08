<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Fonction extends CI_Model
    {
        public function getAllArticle()
        {
            $sql="select*from v_article";
            $query=$this->db->query($sql);
            $data = array();

            foreach($query->result_array() as $row)
            {
                $data[]=$row;
            }
            return $data;
        }
        
        public function getArticleById($id)
        {
            $sql="select*from v_article where md5(id::text)='$id'";
            $query=$this->db->query($sql);
            $data=$query->row();
            return $data;
        }
    }
?>