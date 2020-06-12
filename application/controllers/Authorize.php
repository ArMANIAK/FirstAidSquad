<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorize extends CI_Controller 
{
    private $user_login;
    private $user_pass_hash;


        public function __construct() 
        {
			parent::__construct();
			$this->load->helper('url');
		}
		
        public function index() 
        {
			
			$data['title'] = 'Увійти/зареєструватися';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav');
			$this->load->view('pages/login');
			$this->load->view('templates/footer');
        }
        
        public function register() 
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->load->model('auth_model');
                if ($this->auth_model->registerCheck($_POST['login'])) 
                {
                    $user = array(
                        'user_login' => $_POST['login'],
                        'user_pass_hash' => md5($_POST['pass'])
                    );
                    $this->auth_model->register($user);

                    // Log in and redirect to profile

                    // Modal?
                    echo 'Registered!';
                    var_dump($_POST);
                }
                else
                {
                    $data['title'] = 'Увійти/зареєструватися';
                    $data['message'] = 'Це ім\'я вже зайняте';

                    // print message
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/banner');
                    $this->load->view('templates/nav');
                    $this->load->view('templates/error_message', $data);
                    $this->load->view('pages/login');
                    $this->load->view('templates/footer');
                }
            }
            else {
                $data['title'] = 'зареєструватися';
                
                $this->load->view('templates/header', $data);
                var_dump($_POST);
                
                die;
                $this->load->view('templates/footer');
            }
            
        }
}