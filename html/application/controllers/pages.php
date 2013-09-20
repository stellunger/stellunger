<?php
class Pages extends CI_Controller {

	function index()
	{
		
		$data['page_title'] = 'Бюро интернет-маркетинга "Штеллунгер" |
		Лидогенерация, продвижение в интернете с оплатой за звонки';

		$this->load->view('header',$data);
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	function show_page($page_name)
	{
		// составляем заголовок

		switch ($page_name)
		{
			case 'calls':
				$data['page_title'] = 'Продвижение с оплатой за звонки';
				break;

			case 'contacts':
				$data['page_title'] = 'Свяжитесь с нами';
				break;

			case 'faq':
				$data['page_title'] = 'База знаний, частые вопросы';
				break;

			case 'leads':
				$data['page_title'] = 'Лидогенерация';
				break;

			case 'sites':
				$data['page_title'] = 'Делаем сайты бесплатно';
				break;

			case 'thanks':
				$data['page_title'] = 'Спасибо за обращение';
				break;

			case 'traffic':
				$data['page_title'] = 'Продвижение с оплатой за трафик';
				break;

			case 'why':
				$data['page_title'] = 'Наши преимущества';
				break;
			
			default:
				$data['page_title'] = '';
				break;
		}

		$data['page_title'] .= ' | Бюро интернет-маркетинга "Штеллунгер"'; 

		//грузим дополнительные вьюхи

		$data['steps'] = $this->load->view('steps','', true); // подгружаем этапы
		$data['contact_form'] = $this->load->view('contact_form','', true); // подгружаем форму связи

		$this->load->helper('form'); 

		// рендерим страницу

		$this->load->view('header',$data);
		$this->load->view($page_name,$data);
		$this->load->view('footer');
	}
}
?>