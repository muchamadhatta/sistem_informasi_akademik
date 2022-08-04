<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['M_mengajar', 'M_guru', 'M_siswa', 'M_nilai', 'M_extra', 'M_kepsek', 'M_berita', 'M_jurusan']);
	}

	public function index()
	{
		$data['title']  	= 'SMK Link & Match';
		$data['judul']  	= 'Selamat Datang Di SMK Link and Match';
		$data['guru']		= $this->M_guru->get()->result();
		// $data['extra']		= $this->M_extra->get()->result();
		$data['kepsek']		= $this->M_kepsek->get()->row();
		$this->db->limit(4);
		$data['mengajar']	= $this->M_mengajar->get()->result();
		$this->mylibrary->templateuser('dashboard', $data);
	}

	public function guru(){
		$data['title'] 		= 'Data Guru';
		$data['judul']		= 'Semua Data Guru';
		$data['guru']		= $this->M_guru->get()->result();
		$this->mylibrary->templateuser('guru/index', $data);
	}
	
	public function detail_guru($id){
		$data['title']		= 'Detail Guru';
		$data['judul']		= 'Halaman Detail Guru';
		$data['guru']		= $this->M_guru->get(['md5(id_guru)' => $id])->row();
		$data['mengajar']	= $this->M_mengajar->get(['md5(mengajar.id_guru)' => $id])->result();
		$this->mylibrary->templateuser('guru/detail', $data);
	}
	
	
	public function jurusan(){
		$data['title'] 		= 'Data Jurusan';
		$data['judul']		= 'Semua Data Jurusan';
		$data['jurusan']		= $this->M_jurusan->get()->result();
		$this->mylibrary->templateuser('jurusan/index', $data);
	}

	public function ekstrakurikuler(){
		$data['title'] 					= 'Data Ekstrakurikuler';
		$data['judul']					= 'Semua Data Ekstrakurikuler';
		$data['ekstrakurikuler']		= $this->M_extra->get()->result();
		$this->mylibrary->templateuser('ekstrakurikuler/index', $data);
	}
	
	public function detail_jurusan($id){
		$data['title']		= 'Detail Jurusan';
		$data['judul']		= 'Halaman Detail Jurusan';
		$data['jurusan']		= $this->M_jurusan->get(['md5(id_jurusan)' => $id])->row();
		$this->mylibrary->templateuser('jurusan/detail', $data);
	}
	
	
	public function siswa()
	{
		if ($this->input->post('nis')) {
			if ($this->M_siswa->get(['siswa.nis' => $this->input->post('nis')])->num_rows() > 0 ) {
				$data['siswa']		= $this->M_siswa->get(['siswa.nis' => $this->input->post('nis')])->row();
				$data['dataNilai']		= $this->M_nilai->get(['nilai.id_siswa' => $data['siswa']->id_siswa]);
			}else{
				$data['judul']		= 'Data siswa dengan nis <b>' .$this->input->post('nis') . '</b> tidak di temukan';
			}
		}
		$data['title']		= 'Data Siswa';
		$this->mylibrary->templateuser('siswa/index', $data);
	}


	public function berita()
	{
		if (@$this->uri->segment(3)) {
			$aya = explode('-', $this->uri->segment(3));
			$string = '';
			for ($i=0; $i < count($aya); $i++) { 
				$string .=  ' ' . $aya[$i];
			}
			$string = substr($string, 1);
			$newsBerita = $this->M_berita->get(['slogan' => $string])->row();
			if ($newsBerita) {
				$data['newsBerita'] =  $newsBerita;
			}else{
				$data['newsBerita'] = $this->M_berita->get()->row();
			}
		}else{
			$data['newsBerita'] = $this->M_berita->get()->row();
		}
		$data['title']		= 'Berita';
		$data['judul']		= 'Halaman Semua Berita';
		$data['berita']		= $this->M_berita->get();
		$this->mylibrary->templateuser('berita/index', $data);
	}
	public function cariBerita()
	{
		
		$cari = $this->input->get('search');
		if ($cari != '') {
			$berita = $this->M_berita->search($cari);
		}else{
			redirect('user/berita','refresh');
		}

		$data['title']		= 'Cari Berita';
		$data['berita']		= $berita;
		$data['allBerita']	= $this->M_berita->get()->result();
		$data['judul']		= 'Halaman cari berita';
		$this->mylibrary->templateuser('berita/search', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */