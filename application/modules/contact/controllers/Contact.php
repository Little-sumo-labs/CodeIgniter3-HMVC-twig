<?php

class Contact extends MX_Controller {
    public function __construct() {
        parent::__construct();

        $config = [
            'paths' => ['application/modules/contact/views', VIEWPATH],
            'cache' => 'application/cache',
        ];
        $this->load->library('twig', $config);
    }

    public function index() {
        $data['title'] = "Welcome to Contact page";
        $data['text'] = "Index Controller to the contact page";

        $this->twig->display('contact', $data);
    }
}