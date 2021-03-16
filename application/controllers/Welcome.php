<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
		$config['base_url'] = 'http://localhost/index/'; //site url
	}
	public function view()
	{
		//$this->session->sess_destroy();
		$this->load->view('index', $data);
	}
	//perintah untuk load file view dengan nama about.php
	public function about()
	{
		$this->load->view('about');
	}
	//perintah untuk load file view dengan nama product.php
	public function product()
	{
		$this->load->view('product');
	}
}
