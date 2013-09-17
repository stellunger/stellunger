<?php
class SendMail extends CI_Controller {

	function index()
	{
		// собираем данные в массив

		$data = array(
			'name' => $this->input->post('inputName'),
			'email' => $this->input->post('inputEmail'),
			'phone' => $this->input->post('inputPhone'),
			'company' => $this->input->post('inputCompany'),
			'message' => $this->input->post('inputMessage')
			);

		// составляем письмо

		$email_subject = "Новая заявка! Компания: ".$data['company']."."; // тема письма

		$email_content = "Привет!\nНам пришла новая заявка.\n";
		$email_content .= "Имя: ".$data['name'];
		$email_content .= "\nEmail: ".$data['email'];
		$email_content .= "\nТелефон: ".$data['phone'];
		$email_content .= "\nКомпания: ".$data['company'];
		$email_content .= "\nСообщение: \n".$data['message'];

		$this->load->library('email');

		$this->email->from('robot@stellunger.ru', 'Робот Штеллунгера');
		$this->email->to('imstellunger@gmail.com'); 		

		$this->email->subject($email_subject);
		$this->email->message($email_content);	

		$this->email->send();

		//echo $this->email->print_debugger();

		$this->load->view('header');
		$this->load->view('thanks');
		$this->load->view('footer');
	}	
}
?>