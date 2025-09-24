<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Check if user is logged in
    private function check_login() {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    // Admin login page
    public function login() {
        // If already logged in, redirect to dashboard
        if ($this->session->userdata('admin_logged_in')) {
            redirect('admin/dashboard');
        }

        $data['title'] = 'Admin Login - Maa Laxmi';
        
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                // Check credentials
                $this->db->where('username', $username);
                $user = $this->db->get('admin_users')->row();

                if ($user && password_verify($password, $user->password)) {
                    // Set session data
                    $this->session->set_userdata(array(
                        'admin_logged_in' => TRUE,
                        'admin_id' => $user->id,
                        'admin_username' => $user->username
                    ));
                    
                    redirect('admin/dashboard');
                } else {
                    $data['error'] = 'Invalid username or password';
                }
            }
        }

        $this->load->view('admin/login', $data);
    }

    // Admin dashboard
    public function dashboard() {
        $this->check_login();
        
        $data['title'] = 'Admin Dashboard - Maa Laxmi';
        
        // Get current settings
        $settings = $this->db->get('admin_settings')->result();
        $data['settings'] = array();
        foreach ($settings as $setting) {
            $data['settings'][$setting->setting_key] = $setting->setting_value;
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('app_link', 'App Link', 'required|valid_url');
            $this->form_validation->set_rules('whatsapp_number', 'WhatsApp Number', 'required');
            $this->form_validation->set_rules('telegram_number', 'Telegram Number', 'required');

            if ($this->form_validation->run() == TRUE) {
                $app_link = $this->input->post('app_link');
                $whatsapp_number = $this->input->post('whatsapp_number');
                $telegram_number = $this->input->post('telegram_number');

                // Update settings
                $this->update_setting('app_link', $app_link);
                $this->update_setting('whatsapp_number', $whatsapp_number);
                $this->update_setting('telegram_number', $telegram_number);

                $data['success'] = 'Settings updated successfully!';
                
                // Refresh settings data
                $settings = $this->db->get('admin_settings')->result();
                $data['settings'] = array();
                foreach ($settings as $setting) {
                    $data['settings'][$setting->setting_key] = $setting->setting_value;
                }
            }
        }

        $this->load->view('admin/dashboard', $data);
    }

    // Helper function to update settings
    private function update_setting($key, $value) {
        $this->db->where('setting_key', $key);
        $existing = $this->db->get('admin_settings')->row();
        
        if ($existing) {
            $this->db->where('setting_key', $key);
            $this->db->update('admin_settings', array('setting_value' => $value));
        } else {
            $this->db->insert('admin_settings', array(
                'setting_key' => $key,
                'setting_value' => $value
            ));
        }
    }

    // Logout function
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    // API endpoint to get settings (for frontend)
    public function get_settings() {
        $settings = $this->db->get('admin_settings')->result();
        $data = array();
        foreach ($settings as $setting) {
            $data[$setting->setting_key] = $setting->setting_value;
        }
        
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
