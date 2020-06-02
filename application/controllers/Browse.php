<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
		}
		
		public function index() {
			
			$data['title'] = 'Загін Першої Допомоги онлайн гра';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/banner');
			$this->load->view('templates/nav');
			$this->load->view('pages/main');
			$this->load->view('templates/footer');
		}
    }