<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
		}
		
		public function index($page = 'main') {
			
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					echo APPPATH.'/views/pages/'.$page.'.php';
			}

			$data['title'] = 'Загін Першої Допомоги онлайн гра';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/banner');
			$this->load->view('templates/nav');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
		
		public function soloMode() {
			
			echo APPPATH.'/views/pages/';

            $data['title'] = 'Одиночна гра';
			$this->load->model('getCards_model','',TRUE);
            $data['questions'] = $this->getCards_model->getQuestions();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav');
            $this->load->view('pages/solo');
        }
    }