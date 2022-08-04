<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {


	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('login') != 'siswa' || $this->session->userdata('id_siswa') == '') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"><i class="fa fa-warning"></i> Ooppss... Silahkan Login Terlebih Dahulu! </div>');
			redirect('auth');
		}
		$this->load->model(['M_extra', 'M_biodata', 'M_siswa', 'M_guru', 'M_pelajaran', 'M_mengajar', 'M_nilai', 'M_kelas', 'M_kepsek', 'M_berita', 'M_jadwal']);
	}
	public function index()
	{
		$data['title'] 		= 'Halaman Home';
		$data['judul']		= 'Selamat Datang Di Sistem Akademis';
		$data['siswa']		= $this->M_siswa->get(['id_siswa' => $this->session->userdata('id_siswa')])->row();
		$this->mylibrary->templatesiswa('dashboard', $data);
	}
	public function biodata_siswa()
	{
		$data['title'] 		= 'Biodata Siswa';
		$data['judul']		= 'Halaman Biodata Siswa';
		$data['siswa']		= $this->M_siswa->get(['id_siswa' => $this->session->userdata('id_siswa')])->row();
		$this->mylibrary->templatesiswa('biodata_siswa/index', $data);
	}
	public function nilai($semester)
	{
		$data['title']		= 'Penilaian';
		$data['judul']		= 'Halaman Penilaian Siswa';
		$data['semester']	= $semester;
		$data['siswa']		= $this->M_siswa->get(['id_siswa' => $this->session->userdata('id_siswa')])->row();
		$data['dataNilai'] 	= $this->M_nilai->get(['nilai.id_siswa' => $this->session->userdata('id_siswa'), 'semester' => $semester]);
		$data['dataRangking'] 	= $this->M_nilai->getRangking(['id_kelas' => $data['siswa']->id_kelas,'semester' => $semester])->result_array();
		foreach ($data['dataRangking'] as $key => $value) {
			if (md5($value['id_siswa']) == md5($this->session->userdata('id_siswa'))) {
				$data['rangking'] = ++$key;
			}
		}
		$this->mylibrary->templatesiswa('nilai/index', $data);
	}
	public function print_nilai($semester)
	{
		$data['siswa'] = $this->M_siswa->get(['siswa.id_siswa' => $this->session->userdata('id_siswa')])->row();
		$data['semester']	= $semester;
		$data['dataNilai'] 	= $this->M_nilai->get(['nilai.id_siswa' => $this->session->userdata('id_siswa'), 'semester' => $data['semester']]);
		$data['biodata']	= $this->M_biodata->get()->row();
		$data['dataRangking'] 	= $this->M_nilai->getRangking(['id_kelas' => $data['siswa']->id_kelas,'semester' => $semester])->result_array();
		foreach ($data['dataRangking'] as $key => $value) {
			if (md5($value['id_siswa']) == md5($this->session->userdata('id_siswa'))) {
				$data['rangking'] = ++$key;
			}
		}
		$this->load->view('siswa/nilai/print', $data);
	}
	public function jadwal_pelajaran()
	{
		$data['title']			= 'Jadwal Pelajaran';
		$data['judul']			= 'Halaman Jadwal Pelajaran';
		$data['pelajaran']		= $this->M_jadwal->get(['jadwal_pelajaran.id_kelas' => $this->session->userdata('id_kelas')])->row();
		$this->mylibrary->templatesiswa('jadwal/index', $data);
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */
