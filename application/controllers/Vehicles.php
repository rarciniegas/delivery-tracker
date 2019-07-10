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
        
        // Get username
        $username = $this->input->post('vehicle_');
        // Get and encrypt the password
        $password = md5($this->input->post('password'));
        // Login user
        $user_id = $this->user_model->login($vehicle_name, $license);
        if($vehicle_id){
          // Create session
          $user_data = array(
            'vehicle_id' => $vehicle_id,
            'vehicle_name' => $vehicle_name,
            'logged_in' => true
          );
          $this->session->set_userdata($user_data);
          // Set message
          $this->session->set_flashdata('user_loggedin', 'You are now logged in');
          redirect('posts');
        } else {
          // Set message
          $this->session->set_flashdata('login_failed', 'Login is invalid');
          redirect('users/login');
        }		
      }
    }
  }