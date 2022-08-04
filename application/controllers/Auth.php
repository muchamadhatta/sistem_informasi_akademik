<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login')) {
			redirect($this->session->userdata('login'),'refresh');
		}
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->db->get_where('account', ['username' => $username]);
			if ($result->num_rows() > 0 ) {
				$row = $result->row();
				if ($password == $row->password) {
					$this->session->set_userdata([
						'login' 	=> 'admin',
						'username' 	=> $row->username,
						'fullname' 	=> $row->fullname,
						'foto'		=> $row->foto,
						'id'		=> $row->id_account
					]);
					$this->session->set_flashdata('message', '<div class="alert alert-danger"><i class="fa fa-warning"></i> Login Berhasil</div>');
					redirect('admin','refresh');
					exit();
				}
			}

			$result1 = $this->db->get_where('guru', ['nip' => $username]);
			if ($result1->num_rows() > 0 ) {
				$row1 = $result1->row();
				if (password_verify($password, $row1->password)) {
					$this->session->set_userdata([
						'login' 	=> 'guru',
						'id_guru'	=> $row1->id_guru,
						'nama_guru' => $row1->nama_guru,
						'foto'		=> $row1->foto
					]);
					$this->session->set_flashdata('message', '<div class="alert alert-danger"><i class="fa fa-warning"></i> Login Berhasil</div>');
					redirect('guru','refresh');
					exit();
				}
			}

			$result2 = $this->db->get_where('siswa', ['nis' => $username]);
			if ($result2->num_rows() > 0 ) {
				$row2 = $result2->row();
				if (password_verify($password, $row2->password)) {
					$this->session->set_userdata([
						'login' 	=> 'siswa',
						'id_siswa'	=> $row2->id_siswa,
						'id_kelas'	=> $row2->id_kelas,
						'nama_siswa' => $row2->nama_siswa,
						'foto'		=> $row2->foto_siswa
					]);
					$this->session->set_flashdata('message', '<div class="alert alert-danger"><i class="fa fa-warning"></i> Login Berhasil</div>');
					redirect('siswa','refresh');
					exit();
				}
			}

			$this->session->set_flashdata('message', '<div class="alert alert-danger"><i class="fa fa-warning"></i> Cek Kembali Username Dan Password</div>');
			redirect('auth');
		}
	}
	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('fullname');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('foto');
		$this->session->unset_userdata('id_siswa');
		$this->session->unset_userdata('id_kelas');
		$this->session->unset_userdata('nama_siswa');
		$this->session->set_flashdata('message', '<div class="alert alert-info"><i class="fa fa-check-square"></i> Terimakasih.. Logout Berhasil </div>');
		redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
