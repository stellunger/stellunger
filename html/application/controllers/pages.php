<?php
class Pages extends CI_Controller {

	function index()
	{
		$this->load->view('header');
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	function show_page($page_name)
	{
		//echo $page_name;

		$data['steps'] = $this->load->view('steps','', true); // подгружаем этапы
		$data['contact_form'] = $this->load->view('contact_form','', true); // подгружаем форму связи

		$this->load->helper('form');

		$this->load->view('header');
		$this->load->view($page_name,$data);
		$this->load->view('footer');
	}
}
?>