<?php
	class Vehicle_model extends CI_Model{
    public function __construct(){
			$this->load->database();
		}
		public function register(){
			// Vehicle data array
			$data = array(
				'make' => $this->input->post('make'),
				'model' => $this->input->post('model'),
        'vehicle_name' => $this->input->post('vehicle_name'),
        'license' => $this->input->post('license')
			);
			// Insert vehicle
			return $this->db->insert('vehicle', $data);
    }
  }