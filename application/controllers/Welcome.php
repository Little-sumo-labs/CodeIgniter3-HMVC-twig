<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $config = [
            'paths' => ['application/views', VIEWPATH],
            'cache' => 'application/cache',
        ];
        $this->load->library('twig', $config);
    }

	public function index()
	{
        $data['css'][] = css_url('bootstrap.min');
        $data['css'][] = css_url('font-awesome.min');
        $data['css'][] = css_url('welcome/index');

        $data['title'] = "Welcome to CodeIgniter !";
        $data['text'] = "<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href=\"user_guide/\">User Guide</a>.</p>";

        $this->twig->display('welcome_message', $data);
	}
}
