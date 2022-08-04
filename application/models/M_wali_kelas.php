<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wali_kelas extends CI_Model {

	function get($where=null)
	{
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get('kelas');
    }
}

/* End of file M_wali_kelas.php */
/* Location: ./application/models/M_wali_kelas.php */