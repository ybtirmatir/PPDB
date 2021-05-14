<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SiswaModel extends CI_Model {
  public function view(){
    return $this->db->get('peserta')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
}

class zonasi extends CI_Model {
  public function view(){
    $this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','zonasi');
		return $this->db->get()->result();
  }
}
class Siswaprestasi extends CI_Model {
  public function view(){
    $this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','prestasi');
		return $this->db->get()->result();
  }
}
class Siswaafirmasi extends CI_Model {
  public function view(){
    $this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','afirmasi');
		return $this->db->get()->result();
  }
}
class Siswaluarkab extends CI_Model {
  public function view(){
    $this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','luar kota/kabupaten');
		return $this->db->get()->result();
  }
}