<?php

class Home extends MX_Controller {
    public function __construct() {
        parent::__construct();

        $config = [
            'paths' => ['application/modules/home/views', VIEWPATH],
            'cache' => 'application/cache',
        ];
        $this->load->library('twig', $config);
    }

    public function index() {
        $data['title'] = "Welcome to index Home";
        $data['text'] = "Controller File from Home modules HMVC CodeIgniter 3";

        $this->twig->display('index', $data);
    }

    public function vhome(){
        $data['title'] = "Welcome to Home vhome";
        $data['text'] = "View File from Home modules HMVC CodeIgniter 3";

        $this->twig->display('vhome', $data);
    }
}