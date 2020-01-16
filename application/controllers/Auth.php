<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
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
        $level = $user['level_org'];
        $div = $user['divisi'];
        $dept = $user['departement'];

        if ($user) {
            if ($password = $user['password']) {
                if ($user['level_org'] === 'N-1') {
                    $query = "SELECT * FROM `employe` WHERE `level_org` = '$level' AND `divisi` = $div AND `nik` <> '$nik'";
                    $target = $this->db->query($query)->result_array();
                    foreach ($target as $t) {
                            $array[] = [
                                'nik_self' => $nik,
                                'nik_target' => $t['nik'],
                                'hub' => 'Peers'
                            ];
                        }
                        $queryCek = $this->db->get_where('hasil_nilai', ['nik_self' => $nik]);
                        if ($queryCek->num_rows() == 0) {
                            $this->db->insert_batch('hasil_nilai', $array);
                            if ($this->db->affected_rows() > 0) {
                            $data = [
                                'nik' => $user['nik']
                            ];
                            $this->session->set_userdata($data);
                            redirect('welcome','refresh');
                            }
                        }else {
                            $data = [
                                'nik' => $user['nik']
                            ];
                            $this->session->set_userdata($data);
                            redirect('welcome','refresh');
                        }
                    }elseif ($user['level_org'] === 'N-2') {
                        $query ="SELECT * FROM `employe` WHERE `level_org` <> '$level' AND `departement` = $dept AND `nik` <> '$nik'";
                        $target = $this->db->query($query)->result_array();
                        foreach ($target as $t) {
                            $array[] = [
                                'nik_self' => $nik,
                                'nik_target' => $t['nik'],
                                'hub' => 'Subordinate'
                            ];
                        }
                        $queryCek = $this->db->get_where('hasil_nilai', ['nik_self' => $nik]);
                        if ($queryCek->num_rows() == 0) {
                            $this->db->insert_batch('hasil_nilai', $array);
                            if ($this->db->affected_rows() > 0) {
                            $data = [
                                'nik' => $user['nik']
                            ];
                            $this->session->set_userdata($data);
                            redirect('welcome','refresh');
                            }
                        }else {
                            $data = [
                                'nik' => $user['nik']
                            ];
                            $this->session->set_userdata($data);
                            redirect('welcome','refresh');
                        }
                        $this->db->insert_batch('hasil_nilai', $array);
                        if ($this->db->affected_rows() > 0) {
                        $data = [
                            'nik' => $user['nik']
                        ];
                        $this->session->set_userdata($data);
                        redirect('welcome','refresh');
                        }
                    }
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
        $data['title'] = "Thank You";
        $this->session->unset_userdata('nik');
        $this->load->view('auth/logout');
    }

}

/* End of file Auth.php */