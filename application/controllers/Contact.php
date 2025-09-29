<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = array();
		
		// Handle form submission
		if ($this->input->post()) {
			$data['form_submitted'] = $this->process_contact_form();
		}
		
		$this->load->view('common/header');
		$this->load->view('contact', $data);
		$this->load->view('common/footer');
	}
	
	private function process_contact_form()
	{
		// Get form data
		$name = $this->input->post('name');
		$company = $this->input->post('company');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		
		// Basic validation
		if (empty($name) || empty($email) || empty($subject) || empty($message)) {
			return array('status' => 'error', 'message' => 'Please fill in all required fields.');
		}
		
		// Email validation
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return array('status' => 'error', 'message' => 'Please enter a valid email address.');
		}
		
		// Here you would typically:
		// 1. Save to database
		// 2. Send email notification
		// 3. Send auto-reply to customer
		
		// For now, just return success message
		return array('status' => 'success', 'message' => 'Thank you for your message! We will get back to you soon.');
	}
}
