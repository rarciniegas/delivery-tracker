<?php
	class Vehicle_model extends CI_Model{
    public function __construct(){
			$this->load->database();
		}
		public function register(){
			// Vehicle data array
			$photo = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$data = array(
				'make' => $this->input->post('make'),
				'model' => $this->input->post('model'),
        'vehicle_name' => $this->input->post('vehicle_name'),
				'license' => $this->input->post('license'),
				'photo' => $photo
 			);
			// Insert vehicle
			return $this->db->insert('vehicle', $data);
		}
		
				// Log vehicle in
				public function login($vehicle_name, $license){
					// Validate
					$this->db->where('vehicle_name', $vehicle_name);
					$this->db->where('license', $licence);
					$result = $this->db->get('vehicle');
					if($result->num_rows() == 1){
						return $result->row(0)->id;
					} else {
						return false;
					}
				}
  }