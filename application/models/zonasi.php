<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class zonasi extends CI_Model {
  public function view(){
    $this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','zonasi');
		return $this->db->get()->result();
  }
}