<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slider_model', 'slider');

	}

	public function index()
	{
		$this->set_page_title('Home');
		$data['slider'] =$this->slider->get_slider();
		$data['banners'] =$this->slider->get_home_banners();

		$this->template->load('index', 'content', 'home',$data);

		//$this->load('index', 'categories/get_main_categories');

	}

}
