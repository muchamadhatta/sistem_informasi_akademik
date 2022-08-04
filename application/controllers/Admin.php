<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('login') != 'admin' || $this->session->userdata('username') == '') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"><i class="fa fa-warning"></i> Ooppss... Silahkan Login Terlebih Dahulu! </div>');
			redirect('auth');
		}
		$this->load->model(['M_extra', 'M_jurusan', 'M_biodata', 'M_siswa', 'M_guru', 'M_pelajaran', 'M_mengajar', 'M_nilai', 'M_kelas', 'M_kepsek', 'M_berita', 'M_jadwal']);
	}



	public function index()
	{
		$data['title'] 			= 'Halaman Home';
		$data['nilai'] 			= $this->M_nilai->get()->num_rows();
		$data['pelajaran'] 		= $this->M_pelajaran->get()->num_rows();
		$data['siswa'] 			= $this->M_siswa->get()->num_rows();
		$data['kelas']			= $this->M_kelas->get()->num_rows();
		$data['guru']			= $this->M_guru->get()->num_rows();
		$data['extra']			= $this->M_extra->get()->num_rows();
		$data['berita']			= $this->M_berita->get()->num_rows();
		$data['kepsek']			= $this->M_kepsek->get()->row();
		if (isset($_POST['save'])) {
			$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
			$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'trim|required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
			$this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

			if ($this->form_validation->run() == TRUE) {
				if ($this->M_kepsek->update()) {
					$this->session->set_flashdata('message', 'Data kepala sekolah berhasil di perbarui');
				}else{
					$this->session->set_flashdata('failed', 'Data kepala sekolah gagal di perbarui');
				}
				redirect('admin');
			}
		}
		$this->mylibrary->templateadmin('dashboard', $data);
	}






	// START :: BERITA
	public function berita(){
		$data['title']		= 'Berita Sekolah';
		$data['judul']		= 'Halaman Data Berita Sekolah';
		$data['berita']	= $this->M_berita->get()->result();
		$this->mylibrary->templateadmin('berita/index', $data);
	}

	public function insert_berita(){
		$this->form_validation->set_rules('content', 'Content', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('slogan', 'Slogan', 'trim|required|min_length[5]');
		if ($this->form_validation->run() === TRUE) {
			if ($this->M_berita->insert()) {
				$this->session->set_flashdata('message', 'Data berita berhasil di tambahkan');
			}else{
				$this->session->set_flashdata('failed', 'Data berita gagal di tambahkan');
			}
			redirect('admin/berita','refresh');
		}
		$data['title']		= 'Berita Sekolah';
		$data['judul']		= 'Halaman Tambah Berita Sekolah';
		$this->mylibrary->templateadmin('berita/insert', $data);
	}

	public function update_berita($id){
		$this->form_validation->set_rules('content', 'Content', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('slogan', 'Slogan', 'trim|required|min_length[5]');
		if ($this->form_validation->run() === TRUE) {
			if ($this->M_berita->update($id)) {
				$this->session->set_flashdata('message', 'Data berita berhasil di edit');
			}else{
				$htis->session->set_flashdata('failed', 'Data berita gagal di edit');
			}
			redirect('admin/berita','refresh');
		}
		$data['title']		= 'Berita Sekolah';
		$data['berita']		= $this->M_berita->get(['md5(id_berita)' => $id])->row();
		$data['judul']		= 'Halaman Edit Berita Sekolah';
		$this->mylibrary->templateadmin('berita/update', $data);
	}

	public function delete_berita($id){
		if ($this->M_berita->delete($id)) {
			$this->session->set_flashdata('message', 'Data berita berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data berita gagal di hapus');
		}
		redirect('admin/berita','refresh');
	}
	public function detail_berita($id)
	{
		$data['title']	= 'Detail Berita';
		$data['judul']	= 'Halaman Detail Berita';
		$data['berita']	= $this->M_berita->get(['md5(id_berita)' => $id])->row();
		$this->mylibrary->templateadmin('berita/detail', $data);
	}
	// END :: BERITA





	// START :: BIOADATA
	public function biodata()
	{
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('visi', 'Visi', 'trim|required');
		$this->form_validation->set_rules('misi', 'Misi', 'trim|required');
		$this->form_validation->set_rules('email_sekolah', 'Email Sekolah', 'trim|required|valid_email');
		$this->form_validation->set_rules('no_telepon_sekolah', 'No Telp Sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_biodata->setting()) {
				$this->session->set_flashdata('message', 'Data biodata berhasil di perbarui');
			}else{
				$this->session->set_flashdata('failed', 'Data biodata gagal di perbarui');
			}
			redirect('admin/biodata');
		}
		$data['title']		= 'Biodata Sekolah';
		$data['judul']		= 'Halaman Data Biodata Sekolah';
		$data['biodata']	= $this->M_biodata->get()->row();
		$this->mylibrary->templateadmin('biodata/index', $data);
	}
	// END :: BIODATA


	// START :: EXTRAKKURIKULER
	public function extrakurikuler()
	{
		$data['title']	= 'Extrakurikuler';
		$data['judul']	= 'Data Extrakurikuler';
		$data['extrakurikuler'] = $this->M_extra->get()->result();
		$this->mylibrary->templateadmin('extra/index', $data);
	}

	private function _validation_extrakurikuler()
	{
		$this->form_validation->set_rules('nama_extra', 'Nama Extrakurikuler', 'trim|required');
		$this->form_validation->set_rules('hari', 'Hari', 'trim|required');
		$this->form_validation->set_rules('jam', 'Jam', 'trim|required');
		// $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim');
		$this->form_validation->set_rules('nama_pembimbing', 'Nama Pembimbing', 'trim|required');
	}

	public function insert_extrakurikuler()
	{
		$this->_validation_extrakurikuler();
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_extra->insert()) {
				$this->session->set_flashdata('message', 'Data Extrakurikuler berhasil di tambahkan');
			}else{
				$this->session->set_flashdata('failed', 'Data Extrakurikuler gagal di tambahkan');
			}
			redirect('admin/extrakurikuler');
		}
		$data['title']	= 'Extrakurikuler';
		$data['judul']	= 'Halaman Tambah Extrakurikuler';
		$this->mylibrary->templateadmin('extra/insert', $data);
	}

	public function update_extrakurikuler($id)
	{
		$this->_validation_extrakurikuler();
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_extra->update($id)) {
				$this->session->set_flashdata('message', 'Data Extrakurikuler berhasil di edit');
			}else{
				$this->session->set_flashdata('failed', 'Data Extrakurikuler gagal di edit');
			}
			redirect('admin/extrakurikuler');
		}
		$data['title']		= 'Extrakurikuler';
		$data['judul']		= 'Halaman Edit Extrakurikuler';
		$data['extra']		= $this->M_extra->get(['md5(id_extra)' => $id])->row();
		$this->mylibrary->templateadmin('extra/update', $data);
	}

	public function delete_extrakurikuler($id)
	{
		if ($this->M_extra->delete($id)) {
			$this->session->set_flashdata('message', 'Data Extrakurikuler berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data Extrakurikuler gagal di hapus');
		}
		redirect('admin/extrakurikuler');
	}
	// END :: EXTRAKKURIKULER






	// START :: KELAS
	public function kelas()
	{
		$data['title']  		= 'Kelas';
		$data['judul']  		= 'Halaman Data kelas';
		$data['dataKelas']		= $this->M_kelas->get();
		$this->mylibrary->templateadmin('kelas/index', $data);
	}
	public function insert_kelas()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required|is_unique[kelas.nama_kelas]', ['is_unique' => 'Nama Kelas ini sudah di gunakan']);
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_kelas->insert()) {
				$this->session->set_flashdata('message', 'Data Kelas berhasil di tambahkan');
				redirect('admin/kelas','refresh');
			}
		}
		$data['title'] = 'kelas';
		$data['judul'] = 'Halaman Tambah kelas';
		$this->mylibrary->templateadmin('kelas/insert', $data);
	}
	public function update_kelas($id)
	{
		if ($this->M_kelas->get(['nama_kelas' => $this->input->post('nama_kelas')])->num_rows() > 0) {
			$this->form_validation->set_rules('nama_kelas', 'Nama Pelajaran', 'trim|required');
		}else{
			$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required');
		}
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_kelas->update($id)) {
				$this->session->set_flashdata('message', 'Data Kelas berhasil di edit');
			}
			redirect('admin/kelas','refresh');
		}
		$data['title'] 		= 'Kelas';
		$data['judul'] 		= 'Halaman Edit Kelas';
		$data['kelas'] 		= $this->M_kelas->get(['md5(id_kelas)' => $id])->row();
		$this->mylibrary->templateadmin('kelas/update', $data);
	}
	public function delete_kelas($id)
	{
		if ($this->M_kelas->delete($id)) {
			$this->session->set_flashdata('message', 'Data kelas berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data kelas gagal di hapus, dikarena kan data kelas ini masih terpakai');
		}
		redirect('admin/kelas','refresh');
	}
	// END :: KELAS



	// START :: JURUSAN
	public function jurusan()
	{
		$data['title']			= 'Program Keahlian';
		$data['judul'] 			= 'Halaman Data Program Keahlian';
		$data['dataJurusan']	= $this->M_jurusan->get()->result();
		$this->mylibrary->templateadmin('jurusan/index', $data);
	}
	function insert_jurusan()
	{
		$this->form_validation->set_rules('nama_jurusan', 'Nama Program Keahlian', 'trim|required[jurusan.nama_jurusan]');
		$this->form_validation->set_rules('keterangan_jurusan', 'Keterangan Jurusan', 'trim|required[jurusan.keterangan_jurusan]');
		if($this->form_validation->run() == TRUE){
			if ($this->M_jurusan->insert()) {
				$this->session->set_flashdata('message', 'Data Jurusan berhasil di tambahkan');
				
			}else{
				$this->session->set_flashdata('failed', 'Data Jurusan gagal di tambahkan');
			}
			redirect('admin/jurusan','refresh');
		}
		$data['title']	= ' Program Keahlian';
		$data['judul']	= 'Halaman Tambah Program Keahlian';
		$this->mylibrary->templateadmin('jurusan/insert', $data);
	}
	public function update_jurusan($id)
	{
		if ($this->M_jurusan->get(['nama_jurusan' => $this->input->post('nama_jurusan')])->num_rows() > 0) {
			$this->form_validation->set_rules('nama_jurusan', 'Nama Program Keahlian', 'trim|required');
		}else{
			$this->form_validation->set_rules('nama_jurusan', 'Nama Program Keahlian', 'trim|required|is_unique[jurusan.nama_jurusan]', ['is_unique' => 'Nama Program Keahlian ini sudah di gunakan']);
		}
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_jurusan->update($id)) {
				$this->session->set_flashdata('message', 'Data Program Keahlian berhasil di edit');
			}
			redirect('admin/jurusan','refresh');
		}
		$data['title'] 		= 'Program Keahlian';
		$data['judul'] 		= 'Halaman Edit Program Keahlian';
		$data['jurusan'] 	= $this->M_jurusan->get(['md5(id_jurusan)' => $id])->row();
		$this->mylibrary->templateadmin('jurusan/update', $data);
	}
	public function delete_jurusan($id)
	{
		if ($this->M_jurusan->delete($id)) {
			$this->session->set_flashdata('message', 'Data Program Keahlian berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data Program Keahlian gagal di hapus, dikarena kan data jurusan ini masih terpakai');
		}
		redirect('admin/jurusan','refresh');
	}
	// END :: JURUSAN



	// START :: PELAJARAN
	public function pelajaran()
	{
		$data['title']	= 'Pelajaran';
		$data['judul']  = 'Halaman Data Pelajaran';
		$data['dataPelajaran'] = $this->M_pelajaran->get();
		$this->mylibrary->templateadmin('pelajaran/index', $data);
	}
	public function insert_pelajaran()
	{
		$this->form_validation->set_rules('nama_pelajaran', 'Nama Pelajaran', 'trim|required|is_unique[pelajaran.nama_pelajaran]', ['is_unique' => 'Nama Pelajaran ini sudah di gunakan']);
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_pelajaran->insert()) {
				$this->session->set_flashdata('message', 'Data Pelajaran berhasil di tambahkan');
				redirect('admin/pelajaran','refresh');
			}
		}
		$data['title'] = 'Pelajaran';
		$data['judul'] = 'Halaman Tambah Pelajaran';
		$this->mylibrary->templateadmin('pelajaran/insert', $data);
	}
	public function update_pelajaran($id)
	{
		if ($this->M_pelajaran->get(['nama_pelajaran' => $this->input->post('nama_pelajaran')])->num_rows() > 0) {
			$this->form_validation->set_rules('nama_pelajaran', 'Nama Pelajaran', 'trim|required');
		}else{
			$this->form_validation->set_rules('nama_pelajaran', 'Nama Pelajaran', 'trim|required');
		}
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_pelajaran->update($id)) {
				$this->session->set_flashdata('message', 'Data Pelajaran berhasil di edit');
			}
			redirect('admin/pelajaran','refresh');
		}
		$data['title'] 		= 'Pelajaran';
		$data['judul'] 		= 'Halaman Edit Pelajaran';
		$data['pelajaran'] 	= $this->M_pelajaran->get(['md5(id_pelajaran)' => $id])->row();
		$this->mylibrary->templateadmin('pelajaran/update', $data);
	}
	public function delete_pelajaran($id)
	{
		if ($this->M_pelajaran->delete($id)) {
			$this->session->set_flashdata('message', 'Data pelajaran berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data pelajaran gagal di hapus, dikarena kan data pelajaran ini masih terpakai');
		}
		redirect('admin/pelajaran','refresh');
	}
	// END :: PELAJARAN




	// START :: GURU
	public function guru()
	{
		$data['title']		= 'Guru';
		$data['judul']	 	= 'Halaman Data Guru';
		$data['dataGuru']	= $this->M_guru->get()->result();
		$this->mylibrary->templateadmin('guru/index', $data);
	}
	public function insert_guru()
	{
		$this->form_validation->set_rules('nip', 'Nip', 'trim|required|is_unique[guru.nip]', ['is_unique' => 'Nip ini sudah terpakai']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('con_password', 'Confirm Password', 'matches[password]');
		$this->_validation_guru();
		if ($this->form_validation->run() == TRUE) {
			$result_result = $this->M_guru->insert();
			if ($result_result) {
				foreach ($this->M_kelas->get()->result() as $kelas) {
					foreach ($this->M_pelajaran->get()->result() as $pelajaran) {
						$check = $this->input->post('id_kelas_'.$kelas->id_kelas.'_id_pelajaran_'.$pelajaran->id_pelajaran);
						if ($check) {
							$check = explode(',', $check);
							$data_insert = [
								'id_guru'		=> $result_result,
								'id_kelas' 		=> $check[0],
								'id_pelajaran'	=> $check[1]
							];
							$this->M_mengajar->insert($data_insert);
						}
					}
				}
				$this->session->set_flashdata('message', 'Data guru berhasil di tambahkan');
			}else{
				$this->session->set_flashdata('failed', 'Data guru gagal di tambahkan');
			}
			redirect('admin/guru','refresh');
		}
		$data['title']			= 'Guru';
		$data['judul']			= 'Halaman Tambah Guru';
		$data['dataPelajaran']	= $this->M_pelajaran->get()->result();
		$data['dataKelas']		= $this->M_kelas->get()->result();
		$this->mylibrary->templateadmin('guru/insert', $data);
	}


	public function delete_guru($id){
		if ($this->M_guru->delete($id)) {
			$this->session->set_flashdata('message', 'Data guru berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data guru gagal di hapus');
		}
		redirect('admin/guru');
	}

	public function update_guru($id){
		$nip = $this->input->post('nip');
		$guru = $this->M_guru->get(['md5(id_guru)' => $id])->row();
		if ($nip != $guru->nip) {
			$this->form_validation->set_rules('nip', 'NIP', 'trim|required|is_unique[guru.nip]', ['is_unique' => 'Nip Sudah Digunakan']);
		}
		$this->_validation_guru();
		$this->form_validation->set_rules('password', 'Password', 'trim');
		$this->form_validation->set_rules('con_password', 'COnfrim Password', 'matches[password]');
		if ($this->form_validation->run() == TRUE) {
			$result_result = $this->M_guru->update($id);
			$this->db->delete('mengajar', ['md5(id_guru)' => $id]);
			if ($result_result) {
				foreach ($this->M_kelas->get()->result() as $kelas) {
					foreach ($this->M_pelajaran->get()->result() as $pelajaran) {
						$check = $this->input->post('id_kelas_'.$kelas->id_kelas.'_id_pelajaran_'.$pelajaran->id_pelajaran);
						if ($check) {
							$check = explode(',', $check);
							$data_insert = [
								'id_guru'		=> $result_result,
								'id_kelas' 		=> $check[0],
								'id_pelajaran'	=> $check[1]
							];
							$this->M_mengajar->insert($data_insert);
						}
					}
				}
				$this->session->set_flashdata('message', 'Data guru berhasil di edit');
			}else{
				$this->session->set_flashdata('failed', 'Data guru gagal di edit');
			}
			redirect('admin/guru','refresh');
		}
		$data['title']			= 'Guru';
		$data['judul']			= 'Halaman Edit Guru';
		$data['dataPelajaran']	= $this->M_pelajaran->get()->result();
		$data['dataKelas']		= $this->M_kelas->get()->result();
		$data['guru']			= $this->M_guru->get(['md5(id_guru)' => $id])->row();
		$data['mengajar']		= $this->M_mengajar->get(['md5(id_guru)' => $id])->result();
		$this->mylibrary->templateadmin('guru/edit', $data);
	}

	private function _validation_guru(){
		$this->form_validation->set_rules('nama_guru', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
	}
	public function detail_guru($id){
		$data['title']		= 'Guru';
		$data['judul']		= 'Halaman Detail Guru';
		$data['guru']		= $this->M_guru->get(['md5(id_guru)' => $id])->row();
		$data['mengajar']	= $this->M_mengajar->get(['md5(id_guru)' => $id])->result();
		$this->mylibrary->templateadmin('guru/detail', $data);
	}
	// END :: GURU




	// START :: WALIK KELAS
	public function wali_kelas()
	{
		$data['title']		= 'Wali Kelas';
		$data['judul']	 	= 'Halaman Data Wali Kelas';
		$data['waliKelas']	= $this->M_wali_kelas->get()->result();
		$this->mylibrary->templateadmin('wali_kelas/index', $data);
	}
	public function insert_wali_kelas()
	{
		$this->form_validation->set_rules('id_guru', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('id_jurusan', 'Jurusan', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_wali_kelas->insert()) {
				$this->session->set_flashdata('message', 'Data wali kelas berhasli di tambahkan');
			}else{
				$this->session->set_flashdata('failed', 'Data wali kelas gagal di tambahkan');
			}
			redirect('admin/wali_kelas');
		}
		$data['title']		= 'Wali Kelas';
		$data['judul']		= 'Halaman Tambah Wali Kelas';
		$data['guru']		= $this->M_guru->get()->result();
		$data['kelas']		= $this->M_kelas->get()->result();
		$this->mylibrary->templateadmin('wali_kelas/insert', $data);
	}
	public function update_wali_kelas($id)
	{
		$this->form_validation->set_rules('id_guru', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('id_jurusan', 'Jurusan', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			if ($this->M_wali_kelas->update($id)) {
				$this->session->set_flashdata('message', 'Data wali kelas berhasli di edit');
			}else{
				$this->session->set_flashdata('failed', 'Data wali kelas gagal di edit');
			}
			redirect('admin/wali_kelas');
		}
		$data['title']		= 'Wali Kelas';
		$data['judul']		= 'Halaman Edit Wali Kelas';
		$data['waliKelas']	= $this->M_wali_kelas->get(['md5(id_wali_kelas)'])->row();
		$data['guru']		= $this->M_guru->get()->result();
		$data['kelas']		= $this->M_kelas->get()->result();
		$this->mylibrary->templateadmin('wali_kelas/update', $data);
	}
	public function delete_wali_kelas($id)
	{
		if ($this->M_wali_kelas->delete($id)) {
			$this->session->set_flashdata('message', 'Data wali kelas berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data wali kelas gagal di hapus');
		}
		redirect('admin/wali_kelas');
	}
	// END :: WALI KELAS




	// START :: SISWA
	public function siswa(){
		$data['title'] 	= 'Siswa';
		$data['judul']	= 'Halaman Data Siswa';
		$data['dataSiswa'] = $this->M_siswa->get();
		$this->mylibrary->templateadmin('siswa/index', $data);
	}

	

	public function insert_siswa(){
		$this->form_validation->set_rules('nis', 'Nis', 'trim|required|is_unique[siswa.nis]', ['is_unique' => 'Nis ini sudah di gunakan']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->_validation_siswa();

		if ($this->form_validation->run() === TRUE) {
			if ($this->M_siswa->insert()) {
				$this->session->set_flashdata('message', 'Data siswa berhasil di tambahkan');
			}else{
				$this->session->set_flashdata('failed', 'Data siswa gagal di tambahkan');
			}
			redirect('admin/siswa','refresh');
		}

		// if ($this->form_validation->run() == TRUE) {
		// 	$id_siswa = $this->M_siswa->insert();
		// 	if ($id_siswa) {
		// 		foreach ($this->M_pelajaran->get()->result() as $pelajaran) {
		// 			$this->M_nilai->insert([
		// 				'id_siswa' 		=> $id_siswa,
		// 				'id_pelajaran' 	=> $pelajaran->id_pelajaran,
		// 				'semester'		=> 1
		// 			]);
		// 			$this->M_nilai->insert([
		// 				'id_siswa' 		=> $id_siswa,
		// 				'id_pelajaran' 	=> $pelajaran->id_pelajaran,
		// 				'semester'		=> 2
		// 			]);
		// 			$this->M_nilai->insert([
		// 				'id_siswa' 		=> $id_siswa,
		// 				'id_pelajaran' 	=> $pelajaran->id_pelajaran,
		// 				'semester'		=> 3
		// 			]);
		// 			$this->M_nilai->insert([
		// 				'id_siswa' 		=> $id_siswa,
		// 				'id_pelajaran' 	=> $pelajaran->id_pelajaran,
		// 				'semester'		=> 4
		// 			]);
		// 			$this->M_nilai->insert([
		// 				'id_siswa' 		=> $id_siswa,
		// 				'id_pelajaran' 	=> $pelajaran->id_pelajaran,
		// 				'semester'		=> 5
		// 			]);
		// 			$this->M_nilai->insert([
		// 				'id_siswa' 		=> $id_siswa,
		// 				'id_pelajaran' 	=> $pelajaran->id_pelajaran,
		// 				'semester'		=> 6
		// 			]);
		// 		}
		// 		$this->session->set_flashdata('message', 'Data siswa berhasi di tambahkan');
		// 	}else{
		// 		$this->session->set_flashdata('failed', 'Data siswa gagal di tambahkan');
		// 	}
		// 	redirect('admin/siswa');
		// }
		$data['title'] 		= 'Tambah Siswa';
		$data['judul']		= 'Halaman Tambah Siswa';
		$data['kelas']		= $this->M_kelas->get()->result();
		$data['jurusan']	= $this->M_jurusan->get()->result();
		$this->mylibrary->templateadmin('siswa/insert', $data);
	}

	
	public function delete_siswa($id){
		if ($this->M_siswa->delete($id)) {
			$this->session->set_flashdata('message', 'Siswa Berhasil Di Hapus');
			$this->db->delete('nilai', ['md5(id_siswa)' => $id]);
			redirect('admin/siswa');
		}else{
			$this->session->set_flashdata('message', 'Siswa Gagal Di Hapus');
			redirect('admin/siswa');
		}
	}
	public function detail_siswa($id){
		$data['title']		= 'Detail Siswa';
		$data['judul']		= 'Halaman Detail Siswa';
		$data['siswa']		= $this->M_siswa->get(['md5(id_siswa)' => $id])->row();
		$this->mylibrary->templateadmin('siswa/detail', $data);
	}
	public function edit_siswa($id){
		$nis = $this->input->post('nis');
		$siswa = $this->M_siswa->get(['md5(id_siswa)' => $id])->row();
		if ($nis != $siswa->nis) {
			$this->form_validation->set_rules('nis', 'Nis', 'trim|required|is_unique[siswa.nis]', ['is_unique' => 'Nis Sudah Digunakan']);
		}
		$this->_validation_siswa();
		$this->form_validation->set_rules('password', 'password', 'trim');
		if ($this->form_validation->run() == FALSE) {
			$data['title']		= 'Edit Siswa';
			$data['judul']		= 'Halaman Edit Siswa';
			$data['jurusan']	= $this->M_jurusan->get()->result();
			$data['kelas']		= $this->M_kelas->get()->result();
			$data['siswa']		= $siswa;
			$this->mylibrary->templateadmin('siswa/edit', $data);
		} else {
			if ($this->M_siswa->update($id)) {
				$this->session->set_flashdata('message', 'Data siswa berhasil di update');
			}else{
				$this->session->set_flashdata('failed', 'Data siswa gagal di update');
			}
			redirect('admin/siswa');
		}

	}

	public function print_siswa($id){
		$data['siswa']		= $this->M_siswa->get(['md5(id_siswa)' => $id])->row();
		$data['sekolah']	= $this->M_biodata->get()->row();
		$data['dataNilai'] 	= $this->M_nilai->get(['md5(nilai.id_siswa)' => $id]);
		$data['kepsek']		= $this->M_kepsek->get()->row();
		$this->load->view('admin/siswa/print', $data);
	}
	private function _validation_siswa(){
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('id_jurusan', 'Jurusan', 'trim|required');
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
		$this->form_validation->set_rules('no_telepon', 'No telepon', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('warga_negara', 'Warga Negara', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('alamat_siswa', 'Alamat SIswa', 'trim|required');
		$this->form_validation->set_rules('password2', 'Confrim Password', 'trim|matches[password]');
	}
	// END :: SISWA


	// START :: NILAI
	public function nilai()
	{
		$data['title'] 	= 'Nilai Siswa';
		$data['judul']	= 'Halaman Data Nilai Siswa';
		$data['dataSiswa'] = $this->M_siswa->get();
		$this->mylibrary->templateadmin('nilai/index', $data);
	}
	public function update_nilai($id, $semester)
	{
		$data['siswa']		= $this->M_siswa->get(['md5(id_siswa)' => $id])->row();
		if (isset($_POST['simpan'])) {
			$i =1;
			foreach ($this->M_nilai->get(['md5(nilai.id_siswa)' => $id]) as $n) {
				$tugas_1 	= $this->input->post('tugas_1_'.$i);
				$tugas_2 	= $this->input->post('tugas_2_'.$i);
				$tugas_3 	= $this->input->post('tugas_3_'.$i);
				$uts 		= $this->input->post('uts_'.$i);
				$uas 		= $this->input->post('uas_'.$i);
				$kkm 		= $this->input->post('kkm_'.$i);

				$this->M_nilai->update([
					'tugas_1' => $tugas_1,
					'tugas_2' => $tugas_2,
					'tugas_3' => $tugas_3,
					'uts' => $uts,
					'uas' => $uas,
					'kkm' => $kkm,
					'nilai_rata2' => (($tugas_1 + $tugas_2 + $tugas_3) + $uts + $uas) / 5
				], ['id_nilai' => $this->input->post('id_nilai_'.$i), 'semester' => $semester]);
				$i++;
			}
			$rows = [
				'sakit_'.$semester	=> $this->input->post('sakit_'.$semester),
				'ijin_'.$semester	=> $this->input->post('ijin_'.$semester),
				'alpa_'.$semester	=> $this->input->post('alpa_'.$semester),
				'catatan_'.$semester	=> $this->input->post('catatan_'.$semester),
				'keputusan_'.$semester	=> $this->input->post('keputusan_'.$semester),
			];
			if ($this->M_siswa->update_absen($rows, ['md5(id_siswa)' => $id])) {
				$this->session->set_flashdata('message', 'Data nilai & absen berhasil di edit atas Nama  : '.$data['siswa']->nama_siswa);
				redirect('admin/update_nilai/'.$id .'/' .$semester ,'refresh');
			}
		}
		$data['title']			= 'Nilai Siswa';
		$data['judul']			= 'Halaman Edit Nilai Siswa';
		$data['dataNilai'] 		= $this->M_nilai->get(['md5(nilai.id_siswa)' => $id, 'semester' => $semester]);
		$data['dataRangking'] 	= $this->M_nilai->getRangking(['id_kelas' => $data['siswa']->id_kelas,'semester' => $semester])->result_array();
	
		foreach ($data['dataRangking'] as $key => $value) {
			if (md5($value['id_siswa']) == $id) {
				$data['rangking'] = ++$key;
			}
		}
		$data['semester']	= $semester;
		$this->mylibrary->templateadmin('nilai/update', $data);
	}




	public function delete_nilai($id, $id_siswa, $semester)
	{
		if ($this->M_nilai->delete(['md5(id_nilai)' => $id])) {
			$this->session->set_flashdata('message', 'Data nilai pelajaran berhasil di hapus');
		}else{
			$this->session->set_flashdata('failed', 'Data nilai pelajaran gagal di hapus !');
		}
		redirect('admin/update_nilai/'.$id_siswa.'/'.$semester,'refresh');
	}
	public function insert_nilai($id_siswa)
	{
		if ($this->M_nilai->insert([
			'id_pelajaran' => $this->input->post('id_pelajaran'),
			'semester' => $this->input->post('semester'),
			'id_siswa' => $id_siswa])) {
			$this->session->set_flashdata('message', 'Data mata pelajaran berhasil di tambahkan ke dalam penilaian siswa');
		}else{
			$this->session->set_flashdata('message', 'Data mata pelajaran gagal di tambahkan ke dalam penilaian siswa');
		}
		redirect('admin/update_nilai/'.md5($id_siswa).'/'.$this->input->post('semester'),'refresh');
	}


	public function print_nilai($id, $semester){
		$data['semester'] = $semester;
		$data['siswa'] = $this->M_siswa->get(['md5(siswa.id_siswa)' => $id])->row();
		$data['dataNilai'] 	= $this->M_nilai->get(['md5(nilai.id_siswa)' => $id, 'semester' => $semester]);
		$data['biodata']	= $this->M_biodata->get()->row();
		$this->load->view('admin/nilai/print', $data);

	}
	// END :: NILAI


	// SETTING PROFIL
	public function edit_profil(){
		$this->form_validation->set_rules('fullname', 'Full Name', 'trim');
		$this->form_validation->set_rules('username', 'Username', 'trim');
		$this->form_validation->set_rules('password', 'Password', 'trim');

		if ($this->form_validation->run() == TRUE) {
			$password = $this->input->post('password');
			$result = $this->db->get_where('account', ['id_account' => $this->session->userdata('id')])->row();
			if (password_verify($password, $result->password)) {
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '5000';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('foto')){
					$check =  $this->db->update('account', [
						'fullname' => $this->input->post('fullname'),
						'username' => $this->input->post('username')
					], ['id_account' => $this->session->userdata('id')]);
				}
				else{
					$foto = $this->upload->data();
					unlink('./assets/img/'.$result->foto);
					$check =  $this->db->update('account', [
						'fullname'		=> $this->input->post('fullname'),
						'username'		=> $this->input->post('username'),
						'foto'			=> $foto['file_name']
					], ['id_account' => $this->session->userdata('id')]);
				}
				if ($check) {
					$this->session->unset_userdata('id');
					$this->session->unset_userdata('login');
					$this->session->unset_userdata('fullname');
					$this->session->unset_userdata('password');
					$this->session->unset_userdata('username');
					$this->session->unset_userdata('foto');
					$this->session->set_flashdata('message', '<div class="alert alert-info"><i class="fa fa-check-square"></i> Edit Profil Berhasil Anda Akan Kembali Kehalaman login, Silahkan login kembali! </div>');
					redirect('auth');

				}else{
					$this->session->set_flashdata('failed', 'Edit Profil Gagal');
					redirect('admin');
				}
			}else{
				$this->session->set_flashdata('failed', 'Confirm Password Salah');
				redirect('admin');
			}
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
				$result = $this->db->get_where('account', ['id_account' => $this->session->userdata('id')])->row();
				if (password_verify($password_lama, $result->password)) {
					if ($this->db->update('account', ['password' => password_hash($pw1, PASSWORD_DEFAULT)], ['id_account' => $this->session->userdata('id')])) {
						$this->session->unset_userdata('id');
						$this->session->unset_userdata('login');
						$this->session->unset_userdata('fullname');
						$this->session->unset_userdata('password');
						$this->session->unset_userdata('username');
						$this->session->unset_userdata('foto');
						$this->session->set_flashdata('message', '<div class="alert alert-info"><i class="fa fa-check-square"></i> Edit Password Berhasil Anda Akan Kembali Kehalaman login, Silahkan login kembali! </div>');
						redirect('auth');
					}else{
						$this->session->set_flashdata('failed', 'Edit Password Gagal');
						redirect('admin');
					}
				}else{
					$this->session->set_flashdata('failed', 'Cofirm Password Lama Tidak Sesuai');
					redirect('admin');
				}
			}else{
				$this->session->set_flashdata('failed', 'Cofirm Password Tidak Sesuai');
				redirect('admin');
			}
		}
	}





	// START :: KENAIKAN
	function kenaikan(){
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$kelas = $this->M_kelas->get(['id_kelas' => $this->input->post('id_kelas')])->row();
			if ($this->M_siswa->get(['siswa.id_kelas' => $kelas->id_kelas])->num_rows() <= 0) {
				$data['message'] = $kelas->nama_kelas.' ';
			}
			$data['dataSiswa']	= $this->M_siswa->get(['siswa.id_kelas' => $kelas->id_kelas])->result();

		}
		$data['title']			= 'Kenaikan Kelas';
		$data['judul']			= 'Proses Kenaikan';
		$data['dataKelas']		= $this->M_kelas->get()->result();
		$this->mylibrary->templateadmin('kenaikan/index', $data);
	}
	// END :: KENAIKAN
	public function update_kenaikan($id_kelas){
		$kelas = $this->input->post('kelas');
		foreach ($this->M_siswa->get(['md5(siswa.id_kelas)' => $id_kelas])->result() as $key) {
			$check = $this->input->post($key->id_siswa);
			if ($check) {
				$this->db->update('siswa', ['id_kelas' => $kelas], ['id_siswa' => $key->id_siswa]);
			}
		}
		$kelas = $this->M_kelas->get(['md5(id_kelas)' => $id_kelas])->row();
		//$jurusan = $this->M_jurusan->get(['md5(id_jurusan)' => $id_jurusan])->row();
		$this->session->set_flashdata('message', 'Data siswa <br>Kelas &nbsp;&nbsp;&nbsp; : '.$kelas->nama_kelas.'<br><br>  berhasil diperbarui');
		redirect('admin/kenaikan');
	}





	// START :: CETAK DATA
	public function cetak_data(){
		$data['title']			= 'Cetak data';
		$data['judul']			= 'Halaman cetak data';
		$data['dataKelas']		= $this->M_kelas->get()->result();
		$data['dataNilai']		= $this->M_nilai->get()->result();
		$data['sekolah']		= $this->M_biodata->get()->row();
		$data['kepsek']			= $this->M_kepsek->get()->row();

		$id_kelas  			= $this->input->post('id_kelas');
		$semester			= $this->input->post('semester');
		$data['dataSiswa']	= $this->M_siswa->get(['siswa.id_kelas' => $id_kelas  ])->result();
		if (isset($_POST['cari'])) {
			if ($semester == 'all') {
				$data['nilai1']	= $this->M_nilai->get(['siswa.id_kelas' => $id_kelas])->result();
				$data['nilai2']	= $this->M_nilai->get(['siswa.id_kelas' => $id_kelas])->result();
			}else{
				$data['nilai1']	= $this->M_nilai->get(['siswa.id_kelas' => $id_kelas, 'nilai.semester' => $semester  ])->result();
				$data['nilai2']	= $this->M_nilai->get(['siswa.id_kelas' => $id_kelas, 'nilai.semester' => $semester  ])->result();
			}

			if (!@$data['nilai1'] && !@$data['nilai2']) {
				$data['message'] = "Data Tidak di temukan";
				$this->mylibrary->templateadmin('cetak_data/index', $data);
			}else{
				$this->load->view('admin/cetak_data/print', $data);

			}
		}else{
			$this->mylibrary->templateadmin('cetak_data/index', $data);

		}
	}
	// END :: CETAK DATA


	// START :: JADWAL PELAJARAN
	public function jadwal_pelajaran()
	{
		$data['title']				= 'Jadwal Pelajaran';
		$data['judul']				= 'Halaman Jadwal Pelajaran';
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
			redirect('admin/jadwal_pelajaran','refresh');
		}
		$this->mylibrary->templateadmin('jadwal/index', $data);
	}
	// END :: JADWAL PELAJARAN


	// START :: RANGKING PER KELAS
	public function rangking()
	{
		if ($this->input->post('id_kelas')) {
			redirect(base_url('admin/rangking_details/'.$this->input->post('id_kelas').'/'.$this->input->post('semester')));
		}
		$data['title']     = 'Peringkat Perkelas';
		$data['judul']     = 'Halaman Peringkat Perkelas';
		$data['message']   = $this->session->flashdata('failed');
		$data['dataKelas'] = $this->M_kelas->get()->result();
		$this->mylibrary->templateadmin('rangking/index', $data);
	}

	public function rangking_details($id_kelas = null, $semester = null)
	{
		if ($id_kelas == 'all') {
			$data['kelas']				= "All";
		}else{
			$data['kelas']				= namaKelas($id_kelas);
			if (isset($data['kelas'])) {
			$data['kelas']				= namaKelas($id_kelas);
			}else{
			$this->session->set_flashdata('failed', 'Pilih kelas terlebih dahulu');
			redirect(base_url('admin/rangking'));
			}
		}

		$data['semester']			= $semester;
		$data['title']				= 'Rangking Kelas '.$data['kelas'];
		$data['judul']				= 'Semester '.$data['semester'];

		if ($id_kelas == 'all') {
			if($semester == 1 || $semester == 2 || $semester == 3 || $semester == 4 || $semester == 5 || $semester == 6) {
				$data['dataNilai'] 	= $this->M_nilai->getRangking(['semester' => $semester])->result_array();
			}elseif($semester == 'all'){
				$data['dataNilai'] 	= $this->M_nilai->getRangking()->result_array();
			}else{
				$this->session->set_flashdata('failed', 'Pilih semester terlebih dahulu');
				redirect(base_url('admin/rangking'));
			}
		}else{
			if($semester == 1 || $semester == 2 || $semester == 3 || $semester == 4 || $semester == 5 || $semester == 6) {
				$data['dataNilai'] 	= $this->M_nilai->getRangking(['semester' => $semester, 'id_kelas' => $id_kelas])->result_array();
			}elseif($semester == 'all'){
				$data['dataNilai'] 	= $this->M_nilai->getRangking(['id_kelas' => $id_kelas])->result_array();
			}else{
				$this->session->set_flashdata('failed', 'Pilih semester terlebih dahulu');
				redirect(base_url('admin/rangking'));
			}
		}

		$this->mylibrary->templateadmin('rangking/view', $data);
	}
	// END :: RANGKING PER KELAS

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
