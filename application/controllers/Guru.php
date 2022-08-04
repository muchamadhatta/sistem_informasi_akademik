<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {


	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('login') != 'guru' || $this->session->userdata('id_guru') == '') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"><i class="fa fa-warning"></i> Ooppss... Silahkan Login Terlebih Dahulu! </div>');
			redirect('auth');
		}
		$this->load->model(['M_extra','M_wali_kelas', 'M_biodata', 'M_siswa', 'M_guru', 'M_pelajaran', 'M_mengajar', 'M_nilai', 'M_kelas', 'M_kepsek','M_jadwal']);
	}

	public function index()
	{

		$data['title'] 			= 'Halaman Home';
		$data['mengajar']		= $this->M_mengajar->get(['mengajar.id_guru' => $this->session->userdata('id_guru')])->num_rows();
		$this->mylibrary->templateguru('dashboard', $data);
	}

	public function jadwal()
	{
		$data['title']			= 'Jadwal';
		$data['judul']			= 'Halaman Jadwal';
		$data['dataJadwal']			= $this->M_pelajaran->get()->result();
		$data['dataGuru']			= $this->M_guru->get()->result();
		$data['pelajaran_x_mm1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 1 ])->row();
		$data['pelajaran_x_mm2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 2 ])->row();
		$data['pelajaran_x_ap1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 3 ])->row();
		$data['pelajaran_x_ap2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 4 ])->row();
		$data['pelajaran_x_ak1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 5 ])->row();
		$data['pelajaran_x_ak2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 6 ])->row();
		$data['pelajaran_x_ph1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 7 ])->row();
		$data['pelajaran_x_ph2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 8 ])->row();
		$data['pelajaran_x_otf1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 9 ])->row();
		$data['pelajaran_x_otf2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 10 ])->row();
		$data['pelajaran_xi_mm1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 11 ])->row();
		$data['pelajaran_xi_mm2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 12 ])->row();
		$data['pelajaran_xi_ap1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 13 ])->row();
		$data['pelajaran_xi_ap2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 14 ])->row();
		$data['pelajaran_xi_ak1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 15 ])->row();
		$data['pelajaran_xi_ak2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 16 ])->row();
		$data['pelajaran_xi_ph1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 17 ])->row();
		$data['pelajaran_xi_ph2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 18 ])->row();
		$data['pelajaran_xi_otf1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 19 ])->row();
		$data['pelajaran_xi_otf2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 20 ])->row();
		$data['pelajaran_xii_mm1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 21 ])->row();
		$data['pelajaran_xii_mm2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 22 ])->row();
		$data['pelajaran_xii_ap1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 23 ])->row();
		$data['pelajaran_xii_ap2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 24 ])->row();
		$data['pelajaran_xii_ak1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 25 ])->row();
		$data['pelajaran_xii_ak2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 26 ])->row();
		$data['pelajaran_xii_ph1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 27 ])->row();
		$data['pelajaran_xii_ph2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 28 ])->row();
		$data['pelajaran_xii_otf1']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 29 ])->row();
		$data['pelajaran_xii_otf2']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => 30 ])->row();
		if (isset($_POST['simpan'])) {
			if ($this->M_jadwal->update()) {
				$this->session->set_flashdata('message', 'Jadwal Pelajaran Berhasil Di Update');
			}else{
				$this->session->set_flashdata('failed', 'Jadwal Pelajaran Gagal Di Update');
			}
			redirect('guru/jadwal_pelajaran','refresh');
		}
		$this->mylibrary->templateguru('jadwal/index', $data);
	}


	public function mengajar($id)
	{
		$data['title']		= "Data Nilai";
		$data['judul']		= "Input Nilai";
		$data['mengajar']	= $this->M_mengajar->get(['md5(mengajar.id_guru)' => $id])->result();
		$this->mylibrary->templateguru('mengajar/index', $data);
	}

	public function nilai($id_kelas, $id_pelajaran)
	{
		$semester = $this->input->post('semester');
		$i=1;
		foreach ($this->M_nilai->get(['siswa.id_kelas' => $id_kelas]) as $n) {
				$tugas_1 	= $this->input->post('tugas_1_'.$i);
				$tugas_2 	= $this->input->post('tugas_2_'.$i);
				$tugas_3 	= $this->input->post('tugas_3_'.$i);
				$uts 		= $this->input->post('uts_'.$i);
				$uas 		= $this->input->post('uas_'.$i);
				$kkm = $this->input->post('kkm'.$i);

				$masuk = $this->M_nilai->update([
					'tugas_1' => $tugas_1,
					'tugas_2' => $tugas_2,
					'tugas_3' => $tugas_3,
					'uts' => $uts,
					'uas' => $uas,
					'kkm' => $kkm,
					'nilai_rata2' => (($tugas_1 + $tugas_2 + $tugas_3) + $uts + $uas) / 5,
				], ['id_nilai' => $this->input->post('id_nilai_'.$i), 'semester' => $semester]);
			$i++;
		}
		if ($masuk) {
			$this->session->set_flashdata('message', 'Update Nilai Berhasil');
		}else{
			$this->session->set_flashdata('failed', 'Update Nilai Gagal');
			}
		redirect('guru/mengajar/'. md5($this->session->userdata('id_guru')), 'refresh');
	}



	public function wali_kelas($id)
	{
		$result = $this->M_wali_kelas->get(['md5(wali_kelas.id_guru)' => $id])->row();
		$data['title']		= "Siswa";
		$data['judul']		= "Data Siswa ".$result->nama_kelas." ".$result->nama_jurusan;
		$data['dataSiswa']	= $this->M_siswa->get(['siswa.id_kelas' => $result->id_kelas, 'siswa.id_jurusan' => $result->id_jurusan]);
		$this->mylibrary->templateguru('wali_kelas/index', $data);

	}

	public function detail_siswa($id){
		$data['title']		= 'Detail Siswa';
		$data['judul']		= 'Halaman Detail Siswa';
		$data['dataNilai'] 	= $this->M_nilai->get(['md5(nilai.id_siswa)' => $id]);
		$data['siswa']		= $this->M_siswa->get(['md5(id_siswa)' => $id])->row();
		$this->mylibrary->templateguru('wali_kelas/detail', $data);
	}

	public function absen_siswa($id){
		$data['title']		= 'Absen Siswa';
		$data['judul']		= 'Halaman Absen Siswa';
		$data['nilai']		= $this->M_siswa->get(['md5(id_siswa)' => $id])->row();
		if (isset($_POST['simpan'])) {
			$data = [
					's_1'		=> $this->input->post('s_1'),
					's_2'		=> $this->input->post('s_2'),
					's_3'		=> $this->input->post('s_3'),
					's_4'		=> $this->input->post('s_4'),
					's_5'		=> $this->input->post('s_5'),
					's_6'		=> $this->input->post('s_6'),
					'i_1'		=> $this->input->post('i_1'),
					'i_2'		=> $this->input->post('i_2'),
					'i_3'		=> $this->input->post('i_3'),
					'i_4'		=> $this->input->post('i_4'),
					'i_5'		=> $this->input->post('i_5'),
					'i_6'		=> $this->input->post('i_6'),
					'a_1'		=> $this->input->post('a_1'),
					'a_2'		=> $this->input->post('a_2'),
					'a_3'		=> $this->input->post('a_3'),
					'a_4'		=> $this->input->post('a_4'),
					'a_5'		=> $this->input->post('a_5'),
					'a_6'		=> $this->input->post('a_6'),
					'catatan' 	=> $this->input->post('catatan')
				];
			if ($this->db->update('siswa', $data, ['md5(id_siswa)' => $id])) {
				$this->session->set_flashdata('message', 'Absen Berhasil');
				redirect('guru/absen_siswa/'.$id, 'refresh');
			}
		}
		$this->mylibrary->templateguru('wali_kelas/absen', $data);
	}

	public function print_siswa($id){
		$data['siswa']		= $this->M_siswa->get(['md5(id_siswa)' => $id])->row();
		$data['sekolah']	= $this->M_biodata->get()->row();
		$data['dataNilai'] 	= $this->M_nilai->get(['md5(nilai.id_siswa)' => $id]);
		$data['kepsek']		= $this->M_kepsek->get()->row();
		$this->load->view('guru/wali_kelas/print_siswa', $data);
	}

	public function edit_profil(){
			$password = $this->input->post('password');
			$result = $this->db->get_where('guru', ['id_guru' => $this->session->userdata('id_guru')])->row();
			if (password_verify($password, $result->password)) {
				$config['upload_path'] = './assets/guru/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '5000';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('foto')){
					$check = $this->db->update('guru', [
						'nama_guru' 	=> $this->input->post('nama_guru'),
						'alamat' 		=> $this->input->post('alamat'),
						'tempat_lahir'	=> $this->input->post('tempat_lahir'),
						'tanggal_lahir' => $this->input->post('tanggal_lahir'),
						'agama'			=> $this->input->post('agama'),
						'jenis_kelamin'	=> $this->input->post('jenis_kelamin')
					], ['id_guru' => $this->session->userdata('id_guru')]);
				}
				else{
					$foto = $this->upload->data();
					unlink('./assets/guru/'.$result->foto);
					$check = $this->db->update('guru', [
						'nama_guru' 	=> $this->input->post('nama_guru'),
						'alamat' 		=> $this->input->post('alamat'),
						'tempat_lahir'	=> $this->input->post('tempat_lahir'),
						'tanggal_lahir' => $this->input->post('tanggal_lahir'),
						'agama'			=> $this->input->post('agama'),
						'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
						'foto'			=> $foto['file_name']
					], ['id_guru' => $this->session->userdata('id_guru')]);
				}
					if ($check) {
						$this->session->unset_userdata('login');
						$this->session->unset_userdata('id_guru');
						$this->session->unset_userdata('nama_guru');
						$this->session->unset_userdata('foto');
						$this->session->set_flashdata('message', '<div class="alert alert-info"><i class="fa fa-check-square"></i> Edit Profil Berhasil Anda Akan Kembali Kehalaman login, Silahkan login kembali! </div>');
						redirect('auth');
					}else{
						$this->session->set_flashdata('failed', 'Edit Profil Gagal');
						redirect('guru');
					}
			}else{
				$this->session->set_flashdata('failed', 'Confirm Password Gagal');
				redirect('guru');
			}

	}

	public function setting_password(){
		$this->form_validation->set_rules('pw1', 'Password', 'trim');
		$this->form_validation->set_rules('pw2', 'Password', 'trim');
		if ($this->form_validation->run() == TRUE) {
			$pw1 = $this->input->post('pw1');
			$pw2 = $this->input->post('pw2');
			$password_lama = $this->input->post('password_lama');
			if ($pw1 == $pw2) {
				$result = $this->db->get_where('guru', ['id_guru' => $this->session->userdata('id_guru')])->row();
				if (password_verify($password_lama, $result->password)) {
					if ($this->db->update('guru', ['password' => password_hash($pw1, PASSWORD_DEFAULT)], ['id_guru' => $this->session->userdata('id_guru')])) {
						$this->session->unset_userdata('login');
						$this->session->unset_userdata('id_guru');
						$this->session->unset_userdata('nama_guru');
						$this->session->unset_userdata('foto');
						$this->session->set_flashdata('message', '<div class="alert alert-info"><i class="fa fa-check-square"></i> Edit Password Berhasil Anda Akan Kembali Kehalaman login, Silahkan login kembali! </div>');
						redirect('auth');
					}else{
						$this->session->set_flashdata('failed', 'Edit Password Gagal');
						redirect('guru');
					}
				}else{
					$this->session->set_flashdata('failed', 'Cofirm Password Lama Tidak Sesuai');
					redirect('guru');
				}
			}else{
				$this->session->set_flashdata('failed', 'Cofirm Password Tidak Sesuai');
				redirect('guru');
			}
		}
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */
