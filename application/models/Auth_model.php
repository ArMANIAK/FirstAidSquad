<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() 
    {
        $this->load->database();
    }

    public function registerCheck($userName) 
    {
        $query = $this->db->get_where('users', array('user_login' => $userName));
        if (count($query->result_array()) !== 0) return false;
        else return true;
    }

    public function register($user)
    {
        $this->db->insert('users', $user);
    }
}