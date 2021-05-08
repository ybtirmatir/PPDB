<?php

class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function order_by()
	{
		$this->db->order_by('jarak', 'DESC');
    $query = $this->db->get('peserta');
    return $query->result();
	}

	function daftarpeserta()
	{
		
		$this->db->order_by('jarak', 'DESC');
    $query = $this->db->get('peserta');
    return $query->result();
	}
	
	function select_by_id($id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		
		return $this->db->get('peserta')->row();
	}
	
	function up_biodata($id_peserta,$data)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->update('peserta',$data);
	}
	
	function hapus_peserta($id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->delete('peserta');
	}
	
	function tambahpeserta($data)
	{
		$this->db->insert('peserta',$data);
	}
	
	function pesertabelumdiverifikasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('status','belum diverifikasi');
		
		return $this->db->get()->result();
	}
	
	function pesertatelahverifikasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}
	
	function daftarpesan()
	{
		return $this->db->get('pesan')->result();
	}
	
	function bukapesan($id)
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('id',$id);
		
		return $this->db->get()->row();
	}
	
	function uppesan($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('pesan',$data);
	}
	
	function pengumuman()
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id','2');
		return $this->db->get()->row();

		return $this->db->get('biodata')->result();
	}
	function tampilpengumuman()
	{

		return $this->db->get('biodata')->result();
	}

	function uppengumuman($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('pengumuman',$data);
	}
	
	function cek_akun($username,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get()->row();
	}
function pesertajalurzonasi()
	{
		$this->db->order_by('jarak', 'DESC');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','zonasi');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}
	function pesertajalurprestasi()
	{
		$this->db->order_by('score', 'DESC');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','prestasi');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}
	function pesertajalurafirmasi()
	{
		$this->db->order_by('jarak', 'DESC');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','afirmasi');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}
	function pesertajalurluarkab()
	{
		$this->db->order_by('score', 'DESC');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jalur','Perpindahan Tugas
Orang tua/Wali');
		$this->db->where('status','diverifikasi');
		
		return $this->db->get()->result();
	}

	function nilaijarak()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('jarak');
		
		return $this->db->get()->result();
    
    
	}

	function pengaturan()
	{
		return $this->db->get('biodata')->result();
	}
	function select_id_pengaturan($idb)
	{
		$this->db->where('idb',$idb);
		
		return $this->db->get('biodata')->row();
	}
	
	function up_pengaturan($idb,$data)
	{
		$this->db->where('idb',$idb);
		$this->db->update('biodata',$data);
	}

function dasboard()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('idp','1');
		return $this->db->get()->row();
		return $this->db->get('peserta')->result();
		return $this->db->get()->row();
		return $this->db->get('biodata')->result();
		return $this->db->get()->row();
	}
	function tampilbiodata()
	{
		$this->db->select('*');
		$this->db->from('biodata');
		$this->db->where('idb','1');
		return $this->db->get()->row();
	}
	
	function uppendaftaran($idp,$data)
	{

		$this->db->where('idp',$idp);
		$this->db->update('pendaftaran',$data);
	}
	function jalurmin()
	{

$sql = "SELECT max(jarak) as jarak FROM peserta WHERE status= 'diverifikasi' AND jalur= 'zonasi'";
$result = $this->db->query($sql);
return $result->row()->jarak;

	}
	function scoremin()
	{
$sql = "SELECT min(score) as score FROM peserta WHERE status= 'diverifikasi' AND jalur= 'prestasi'";
$result = $this->db->query($sql);
return $result->row()->score;
	}
	function scoremin2()
	{
$sql = "SELECT min(score) as score FROM peserta WHERE status= 'diverifikasi' AND jalur= 'Perpindahan Tugas
Orang tua/Wali'";
$result = $this->db->query($sql);
return $result->row()->score;
	}

	
}