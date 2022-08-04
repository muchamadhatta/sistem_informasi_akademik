<?php 

function namaKelas($id_kelas){
	$CI =& get_instance();
	return $CI->db->get_where('kelas', array('id_kelas' => $id_kelas))->row()->nama_kelas;
}
?>