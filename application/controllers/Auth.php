<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    

    public function index()
    {
        if ($this->session->userdata('nik')) {
            redirect('welcome','refresh');
        }
        $this->form_validation->set_rules('nik', 'Nik', 'trim|required|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login Page';
            $this->load->view('auth/index', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');
        $user = $this->db->get_where('employe', ['nik' => $nik])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'nik' => $user['nik']
                ];
                $this->session->set_userdata($data);
                redirect('welcome','refresh');
            }
            $this->session->set_flashdata('message', '<a onload="M.toast({html: "I am a toast"})" class="btn red darken-1">Password salah</a>');
            redirect('auth');
        }else {
            $this->session->set_flashdata('message', '<a onload="M.toast({html: "I am a toast"})" class="btn red darken-1">Maaf, Anda tidak terdaftar</a>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nik');

        $this->session->set_flashdata('message', '<a onload="M.toast({html: "I am a toast"})" class="btn red darken-1">Logout</a>');
        redirect('auth');
    }

}

/* End of file Auth.php */
