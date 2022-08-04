<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mylibrary
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        date_default_timezone_set('Asia/Jakarta');
	}

	public function templateadmin($content, $data=NULL){
        $data['biodata'] = $this->ci->db->get('biodata')->row();
		$this->ci->load->view('admin/template/header', $data);
	    $this->ci->load->view('admin/template/sidebar', $data);
	    $this->ci->load->view('admin/'.$content, $data);
	    $this->ci->load->view('admin/template/footer', $data);
	}
    public function templateuser($content, $data=NULL){
        $data['biodata']    = $this->ci->db->get('biodata')->row();
        $data['extra']      = $this->ci->db->get('extra')->result();
        $this->ci->load->view('user/template/header', $data);
        $this->ci->load->view('user/'.$content, $data);
        $this->ci->load->view('user/template/footer', $data);
    }
    public function templateguru($content, $data=NULL){
        $data['biodata'] = $this->ci->db->get('biodata')->row();
        $data['biodata_guru'] = $this->ci->db->get_where('guru', ['id_guru' => $this->ci->session->userdata('id_guru')])->row();
        $this->ci->load->view('guru/template/header', $data);
        $this->ci->load->view('guru/template/sidebar', $data);
        $this->ci->load->view('guru/'.$content, $data);
        $this->ci->load->view('guru/template/footer', $data);
    }
    public function templatesiswa($content, $data=NULL)
    {
        $data['biodata']    = $this->ci->db->get('biodata')->row();
        $this->ci->load->view('siswa/template/header', $data);
        $this->ci->load->view('siswa/template/sidebar', $data);
        $this->ci->load->view('siswa/'.$content, $data);
        $this->ci->load->view('siswa/template/footer', $data);
    }
    public function date_indo($date)
    {
        if ($date == '0000-00-00') {
            return '0000-00-00';
        }
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);

        $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
        return ($result);
    }
     public function date_time($date)
    {
        if ($date == '0000-00-00 00:00:00') {
            return '0000-00-00 00:00:00';
        }
        $time = substr($date, 10);
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");



        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);

        $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun . " " . $time;
        return ($result);
    }
    public function cekratarata($nilai)
    {
        if ($nilai == 0 ) {
            return 0;
        }else{
            return round($nilai / 5, 2);
        }
        
    }

}

/* End of file Mylibrary.php */
/* Location: ./application/libraries/Mylibrary.php */
