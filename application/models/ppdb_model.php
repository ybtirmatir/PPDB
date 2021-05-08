<?php

class Ppdb_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function semua_peserta()
	{
		return $this->db->get('peserta')->result();
	}
	
	function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('username',$username);
		
		return $this->db->get()->row();
	}
	
	function daftar_peserta($data)
	{
		$this->db->insert('peserta',$data);
		$data['pendaftaran'] = $this->ppdb_model->tampilpendaftaran();
	}
	
	function cek_akun($username,$password)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get()->row();
	}
	
	function select_by_id($id_peserta)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('id_peserta',$id_peserta);
		
		return $this->db->get()->row();
	}
	
	function update_biodata($data,$id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->update('peserta',$data);
		
	}
	
	function pengumuman()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}
	
	function kirim_pesan($data)
	{
		$this->db->insert('pesan',$data);
	}
	
	function tampilpengumuman()
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id','2');
		
		return $this->db->get()->row();
	}

	function verifikasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}

	function tampilverifikasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('id_peserta');

		
		return $this->db->get()->row();
	}

	function daftar()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('statusp','aktif');
		
		return $this->db->get()->result();
	}

	function proses_daftar()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('statusp','aktif');
		
		return $this->db->get()->result();
	}
	
	
	function tampilpendaftaran()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('idp','1');
		
		return $this->db->get()->row();
	}
	function pendaftaran()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('statusp','aktif');
		
		return $this->db->get()->result();
	}
	
	
	

	function pesertajalurzonasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','zonasi');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}
	function pesertajalurprestasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','prestasi');
		
		return $this->db->get()->result();
	}
	function pesertajalurafirmasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','afirmasi');
		
		return $this->db->get()->result();
	}
	function pesertajalurluarkab()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','luar kota/kabupaten');
		
		return $this->db->get()->result();
	}
	function prosedur()
	{
		$this->db->select('*');
		$this->db->from('biodata');
		$this->db->where('idb','1');
		return $this->db->get()->row();
		return $this->db->get('peserta')->result();
		return $this->db->get()->row();
		

	}
	function tampilprosedur()
	{
		$this->db->select('*');
		$this->db->from('biodata');
		$this->db->where('idb','1');
		return $this->db->get()->row();
	}
	function jadwal()
	{
		$this->db->select('*');
		$this->db->from('biodata');
		$this->db->where('idb','1');
		return $this->db->get()->row();
		return $this->db->get('peserta')->result();
		return $this->db->get()->row();
		

	}
	function tampiljadwal()
	{
		$this->db->select('*');
		$this->db->from('biodata');
		$this->db->where('idb','1');
		return $this->db->get()->row();
	}
}