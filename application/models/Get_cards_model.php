<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_cards_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getQuestions() {
        $query = $this->db->get('questions');
        return $query->result_array();
    }
}