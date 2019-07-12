<?php
class Fuel_model extends CI_Model {

  public function __construct()
  {
          $this->load->database();
  }

  public function fillup(){
    // Vehicle data array
    $vehicle_name = $_SESSION['vehicle_name'];
    $data = array(
      'this_sale' => $this->input->post('this_sale'),
      'gallons' => $this->input->post('gallons'),
      'miles' => $this->input->post('miles'),
      'vehicle_name' => $this->input->post('license')
    );
    // Insert vehicle
    return $this->db->insert('vehicle', $data);
  }
}