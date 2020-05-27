<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

        public $questions;

		public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('get_cards_model','',TRUE);
            $this->questions = $this->get_cards_model->getQuestions();
        }
        
        public function soloMode() {
            $data['title'] = 'Одиночна гра';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('pages/sound_toggle');
            $this->load->view('pages/solo', $data);
			$this->load->view('templates/footer');
        }

        public function multiplayer($room_id = 404) {

        }

        public function getCardsAPI() {
            $data['questions'] = $this->questions;
            $this->load->view('pages/get_cards_api', $data);
        }

        public function showResults($maxScore, $playerScore) {
            $data['maxScore'] = $maxScore;
            $data['playerScore'] = $playerScore;
            $data['title'] = 'Результати гри';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('pages/greetings', $data);
			$this->load->view('templates/footer');
        }
    }