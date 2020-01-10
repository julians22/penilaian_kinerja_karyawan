<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Home';
		$data['user'] = $this->db->get_where('employe', ['nik' => $this->session->userdata('nik')])->row_array();
		
		$this->load->view('welcome/index', $data);
	}

	public function submitNilai()
	{
		$this->form_validation->set_rules('nik_target', 'Target Nilai', 'trim|required');
		$this->form_validation->set_rules('jwb1', 'Pertanyaan 1', 'trim|required');
		$this->form_validation->set_rules('jwb2', 'Pertanyaan 2', 'trim|required');
		$this->form_validation->set_rules('jwb3', 'Pertanyaan 3', 'trim|required');
		$this->form_validation->set_rules('jwb4', 'Pertanyaan 4', 'trim|required');
		$this->form_validation->set_rules('jwb5', 'Pertanyaan 5', 'trim|required');
		$this->form_validation->set_rules('jwb6', 'Pertanyaan 6', 'trim|required');
		$this->form_validation->set_rules('jwb7', 'Pertanyaan 7', 'trim|required');
		$this->form_validation->set_rules('jwb8', 'Pertanyaan 8', 'trim|required');
		$this->form_validation->set_rules('jwb9', 'Pertanyaan 9', 'trim|required');
		$this->form_validation->set_rules('jwb10', 'Pertanyaan 10', 'trim|required');
		$this->form_validation->set_rules('jwb11', 'Pertanyaan 11', 'trim|required');
		$this->form_validation->set_rules('jwb12', 'Pertanyaan 12', 'trim|required');

		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', '<a class="error btn red darken-1">Pastikan semua form sudah terisi!</a>');
            redirect('welcome');
		} else {
			$data = [
				'jwb_1' => $this->input->post('jwb1'),
				'jwb_2' => $this->input->post('jwb2'),
				'jwb_3' => $this->input->post('jwb3'),
				'jwb_4' => $this->input->post('jwb4'),
				'jwb_5' => $this->input->post('jwb5'),
				'jwb_6' => $this->input->post('jwb6'),
				'jwb_7' => $this->input->post('jwb7'),
				'jwb_8' => $this->input->post('jwb8'),
				'jwb_9' => $this->input->post('jwb9'),
				'jwb_10' => $this->input->post('jwb10'),
				'jwb_11' => $this->input->post('jwb11'),
				'jwb_12' => $this->input->post('jwb12')
			];
			$this->db->where('id', $this->input->post('nik_target'));
			$this->db->update('hasil_nilai', $data);
			redirect('welcome','refresh');
		}
		
		
	}
}
