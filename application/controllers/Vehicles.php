<?php
	class Vehicles extends CI_Controller{
		// Register vehicle
		public function register(){
			$data['title'] = 'Sign Up';
      $this->form_validation->set_rules('make', 'Make', 'required');
      $this->form_validation->set_rules('model', 'Model', 'required');
			$this->form_validation->set_rules('vehicle_name', 'Vehicle_name', 'required');
			$this->form_validation->set_rules('license', 'License', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('vehicles/register', $data);
				$this->load->view('templates/footer');
			} else {
				$this->vehicle_model->register();
				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
				redirect('vehicles/login');
			}
    }
    // Log in vehicle
    public function login(){
      $data['title'] = 'Sign In';
      $this->form_validation->set_rules('vehicle_name', 'Vehicle_name', 'required');
      $this->form_validation->set_rules('license', 'License', 'required');
      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('vehicles/login', $data);
        $this->load->view('templates/footer');
      } else {
        
        // Get vehicle_name
        $vehicle_name = $this->input->post('vehicle_name');
        // Login vehicle
        $vehicle_id = $this->vehicle_model->login($vehicle_name,$license);
        if($vehicle_id){
          // Create session
          $vehicle_data = array(
            'vehicle_id' => $vehicle_id,
            'vehicle_name' => $vehicle_name,
            'logged_in' => true
          );
          $this->session->set_vehicledata($vehicle_data);
          // Set message
          $this->session->set_flashdata('vehicle_loggedin', 'vehicle is now logged in');
          redirect('home');
        } else {
          // Set message
          $this->session->set_flashdata('login_failed', 'Login is invalid');
          redirect('vehicles/login');
        }		
      }
    }
  }