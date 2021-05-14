<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('ppdb_model');
		$this->load->helper('date');
	}
	
	public function index()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$this->template->dashboard_user('ppdb/dashboard/home');
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function daftar()
	{
		$data['pendaftaran'] = $this->ppdb_model->tampilpendaftaran();
		{
		$this->template->ppdb('ppdb/daftar',$data);
		
	}
}

function home()
{
	$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$this->template->dashboard_user('ppdb/dashboard/home');
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}

function pendaftaran()
	{
		$data['pendaftaran'] = $this->ppdb_model->tampilpendaftaran();
		{
		$this->template->ppdb('ppdb/pendaftaran',$data);
		
	}
}
	
	
	function proses_daftar()
	{
		
		$data['nik'] = $this->input->post('nik',true);
		$data['username'] = $this->input->post('username',true);
		$data['password'] = $this->input->post('password',true);
		$data['nama_lengkap'] = $this->input->post('nama_lengkap',true);
		$data['nama_panggilan'] = $this->input->post('nama_panggilan',true);
		
		$username = $this->input->post('username',true);
		$cek_username = $this->ppdb_model->cek_username($username);
		$num_account = count($cek_username);
		
		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		$this->form_validation->set_rules('nama_panggilan','Nama Panggilan','required');
		
		if ($this->form_validation->run()==FALSE)
		{
			$this->template->ppdb('ppdb/pendaftaran');
		}
		else
		{
			if ($num_account > 0)
			{
				$this->session->set_flashdata('error','<div class="alert alert-warning" role="alert">Maaf username sudah ada yang menggunakan</div>');
				$this->template->ppdb('ppdb/pendaftaran');
			}
			else
			{
				$this->ppdb_model->daftar_peserta($data);
				$this->session->set_flashdata('error','<div class="alert alert-success" role="alert">Pendaftaran berhasil. Silahkan Login dengan menggunakan Akun yang sudah didaftarkan</div>');
				$this->template->ppdb('ppdb/pendaftaran');
			}
		}
	}
	
	function prosedur()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$biodata = $this->ppdb_model->prosedur();
			$data['biodata'] = $this->ppdb_model->prosedur();
			$data['biodata'] = $this->ppdb_model->tampilprosedur();
		if (!empty($logged_in) && $level == 'peserta')
		{
			$biodata = $this->ppdb_model->prosedur();
			$data['biodata'] = $this->ppdb_model->prosedur();
			$data['biodata'] = $this->ppdb_model->tampilprosedur();
			$this->template->dashboard_user('ppdb/prosedur',$data);

		}
		else
		{
			$this->template->ppdb('ppdb/prosedur',$data);
		}
	}
	function jadwal()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$biodata = $this->ppdb_model->jadwal();
			$data['biodata'] = $this->ppdb_model->jadwal();
			$data['biodata'] = $this->ppdb_model->tampiljadwal();
		if (!empty($logged_in) && $level == 'peserta')
		{
			$biodata = $this->ppdb_model->prosedur();
			$data['biodata'] = $this->ppdb_model->jadwal();
			$data['biodata'] = $this->ppdb_model->tampiljadwal();
			$this->template->dashboard_user('ppdb/jadwal',$data);

		}
		else
		{
			$this->template->ppdb('ppdb/jadwal',$data);
		}
	}
	
	function proses_login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun2 = $this->ppdb_model->cek_akun($username,$password);
		$akun = count($akun2);
		
		if ($akun > 0)
		{
			$data_session = array(
									'level'=>$akun2->level,
									'nama_panggilan'=>$akun2->nama_panggilan,
									'id_peserta'=>$akun2->id_peserta,
									'status'=>$akun2->status,
									'id_peserta'=>$akun2->id_peserta,
									'logged_in'=>true
			);
			
			$this->session->set_userdata($data_session);
			$this->template->dashboard_user('ppdb/dashboard/home');
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->template->ppdb('ppdb/content');
	}
	
	function update_biodata($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$data['biodata'] = $this->ppdb_model->prosedur();
			
		
			$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function up_biodata()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$config['upload_path'] = './uploads/kk/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 12000;
			$config['max_width'] = 12000;
			$config['max_height'] = 12000;
			
			$this->load->library('upload',$config);
			
			if (!$this->upload->do_upload())
			{
				$id_peserta = $this->session->userdata('id_peserta');
				$this->session->set_flashdata('info','Upload Dokumen KK Gagal');
				redirect('ppdb/update_biodata/'.$id_peserta);
			}
			else
			{
				$gambar = $this->upload->data();
				
				$data['nik']=$this->input->post('nik');
				$data['nama_lengkap']=$this->input->post('nama_lengkap');
				$data['nama_panggilan']=$this->input->post('nama_panggilan');
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir');
				$data['bulan_lahir']=$this->input->post('bulan_lahir');
				$data['tahun_lahir']=$this->input->post('tahun_lahir');
				$data['tempat_lahir']=$this->input->post('tempat_lahir');
				$data['agama']=$this->input->post('agama');
				$data['kewarganegaraan']=$this->input->post('kewarganegaraan');
				$data['anak_ke']=$this->input->post('anak_ke');
				$data['jumlah_saudara']=$this->input->post('jumlah_saudara');
				$data['bahasa_seharihari']=$this->input->post('bahasa_seharihari');
				$data['berat_badan']=$this->input->post('berat_badan');
				$data['tinggi_badan']=$this->input->post('tinggi_badan');
				$data['golongan_darah']=$this->input->post('golongan_darah');
				$data['penyakit']=$this->input->post('penyakit');
				$data['alamat']=$this->input->post('alamat');
				$data['tinggal_pada']=$this->input->post('tinggal_pada');
				$data['no_handphone']=$this->input->post('no_handphone');
				$data['status_anak']=$this->input->post('status_anak');
				$data['hobi']=$this->input->post('hobi');
				$data['jalur']=$this->input->post('jalur');
				$data['jarak']=$this->input->post('jarak');
				$data['mapel1']=$this->input->post('mapel1');
				$data['mapel2']=$this->input->post('mapel2');
				$data['mapel3']=$this->input->post('mapel3');
				$data['mapel4']=$this->input->post('mapel4');
				$data['score']=$data['mapel1']+$data['mapel2']+$data['mapel3']+$data['mapel4'];
				

        
				
				$data['nama_ayah']=$this->input->post('nama_ayah');
				$data['nama_ibu']=$this->input->post('nama_ibu');
				$data['pendidikan_ayah']=$this->input->post('pendidikan_ayah');
				$data['pendidikan_ibu']=$this->input->post('pendidikan_ibu');
				$data['pekerjaan_ayah']=$this->input->post('pekerjaan_ayah');
				$data['pekerjaan_ibu']=$this->input->post('pekerjaan_ibu');
				$data['penghasilan']=$this->input->post('penghasilan');
				
				$data['dokumen'] = $gambar['file_name'];
				
				$tanggal_lahir=$this->input->post('tanggal_lahir');
				$bulan_lahir=$this->input->post('bulan_sekolah');
				$tahun_lahir=$this->input->post('tahun_sekolah');
				
				$tanggal_today=date('d');
				$bulan_today=date('m');
				$tahun_today=date('Y');
				
				$harilahir=gregoriantojd($data['bulan_lahir'],$data['tanggal_lahir'],$data['tahun_lahir']);
				$hariini=gregoriantojd($bulan_today,$tanggal_today,$tahun_today);
				
				$umur=$hariini-$harilahir; //menghitung selisih hari
				$tahun=$umur/365; //menghitung usia tahun
				$sisa=$umur%365; //sisa pembagian dari tahun untuk menghitung bulan
				$bulan=$sisa/30; //menghitung usia bulan
				$hari=$sisa%30; //menghitung sisa hari
				
				$data['usia']=floor($tahun)." tahun ".floor($bulan)." bulan ".floor($hari)." hari";
				
				if (($tahun > 5) && ($bulan >= 6))
				{
					$data['keterangan'] = 'Proses';
				}
				
				$id_peserta=$this->input->post('id_peserta');
				
				$this->ppdb_model->update_biodata($data,$id_peserta);
				
				$data2['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
				$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
				$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data2);
			}
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function daftarpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['peserta'] = $this->ppdb_model->semua_peserta();
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/daftar_peserta',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/daftar_peserta',$data);
		}
	}
	
	function form_biodata()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$data['format']='DATE_RFC850';
			$data['time']=time();
			
			$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function form_preview()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$data['format']='DATE_RFC850';
			$data['time']=time();
			$this->template->dashboard_user('ppdb/dashboard/form_preview',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function cetak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['format']='DATE_RFC850';
			$data['time']=time();
			$data['peserta']=$this->ppdb_model->select_by_id($id_peserta);		
			$html = $this->load->view('ppdb/dashboard/form_pdf',$data, true);
			// Nomor perserta (untuk nama file)
			

			// Cetak dengan html2pdf
			require(APPPATH."/third_party/html2pdf_v4.03/html2pdf.class.php");
			try {
					ob_end_clean();
					$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
					$html2pdf->WriteHTML($html);
					$html2pdf->Output('biodata.pdf');
				} 
			catch (HTML2PDF_exception $e) 
				{
					// echo $e;
					$this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/biodata-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
					redirect('ppdb/form_preview');
				}
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function status()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$this->template->dashboard_user('ppdb/dashboard/status',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function pengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$peserta = $this->ppdb_model->pengumuman();
		$data['pengumuman'] = $this->ppdb_model->tampilpengumuman();
		$data['peserta'] = $this->ppdb_model->pengumuman();
		$data['jumlah'] = count($peserta);
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/pengumuman',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/pengumuman',$data);
		}
	}

	
	function kontak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/kontak');
		}
		else
		{
			$this->template->ppdb('ppdb/kontak');
		}
	}
	
	function proses_kontak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		
		$data['nama'] = $this->input->post('nama',true);
		$data['nope'] = $this->input->post('nope',true);
		$data['isi'] = $this->input->post('isi',true);
		$data['judul'] = $this->input->post('judul',true);
		
		if (!empty($logged_in) && $level == 'peserta')
		{	
			$this->ppdb_model->kirim_pesan($data);
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim</div>');
			$this->template->dashboard_user('ppdb/kontak');
		}
		else
		{
			$this->ppdb_model->kirim_pesan($data);
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim</div>');
			$this->template->ppdb('ppdb/kontak');
		}
	}

	function verifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['peserta'] = $this->ppdb_model->tampilpengumuman();
		$data['peserta'] = $this->ppdb_model->pengumuman();
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/form_biodata',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/form_biodata',$data);
		}
	}
	function jalurzonasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$peserta = $this->ppdb_model->pesertajalurzonasi();
			$data['jumlah'] = count($peserta);
			$no = 1;
			$data['peserta'] = $this->ppdb_model->pesertajalurzonasi();
			$this->template->dashboard_user('ppdb/jalurzonasi',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/jalurzonasi',$data);
		}
		
	}
	
	function jalurprestasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$peserta = $this->ppdb_model->pesertajalurprestasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->ppdb_model->pesertajalurprestasi();
			$this->template->dashboard_user('ppdb/jalurprestasi',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/jalurzonasi',$data);
		}
		
	}
	function jalurafirmasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$peserta = $this->ppdb_model->pesertajalurafirmasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->ppdb_model->pesertajalurafirmasi();
			$this->template->dashboard_user('ppdb/jalurafirmasi',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/jalurzonasi',$data);
		}
		
	}
	function jalurluarkab()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$peserta = $this->ppdb_model->pesertajalurluarkab();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->ppdb_model->pesertajalurluarkab();
			$this->template->dashboard_user('ppdb/jalurluarkab',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/jalurluarkab',$data);
		}
		
	}
	function content()
	{
		$data['pendaftaran'] = $this->ppdb_model->tampilpendaftaran();
		{
		$this->template->ppdb('ppdb/content',$data);

		}
	}
}