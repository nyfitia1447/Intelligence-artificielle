<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Controller extends CI_Controller 
    {
        public function index()
        {
            $this->load->helper('url_helper');
            
            $data['contenu']='ListeArticle';
            $data['articles']=$this->Fonction->getAllArticle();
            $this->load->view('Template',$data);
        }

        public function ficheArticle($id)
        {
            $this->load->helper('url_helper');
            
            $data['contenu']='ficheArticle';
            $data['article']=$this->Fonction->getArticleById($id);
            $this->load->view('Template',$data);
        }
    } 
?>
