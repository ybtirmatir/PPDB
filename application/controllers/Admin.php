<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
	}
	
	function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun = $this->admin_model->cek_akun($username,$password);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'username'=>$akun->username,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);
			$this->template->admin('admin/beranda');
		}
		else
		{
			$this->template->home('home/content');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->template->home('home/content');
	}
	

	function daftarpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->daftarpeserta();
			$peserta = $this->admin_model->order_by();
			$biodata = $this->admin_model->daftarpeserta();

			$data['jumlah'] = count($peserta);
			$data['no'] = 1;
			$data['peserta'] = $this->admin_model->daftarpeserta();
			$data['peserta'] = $this->admin_model->order_by();

			$this->template->admin('admin/daftarpeserta',$data);
		}
		else
		{
			$this->template->home('home/content');
		}		
	}
	
	function biodatapeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['biodata'] = $this->admin_model->tampilbiodata();
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->template->admin('admin/pesertaselengkapnya',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function cetak($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
				$data['format']='DATE_RFC850';
				$data['time']=time();
				$data['peserta']=$this->admin_model->select_by_id($id_peserta);		
				$html = $this->load->view('ppdb/dashboard/form_pdf',$data, true);
				// Nomor perserta (untuk nama file)
				

				// Cetak dengan html2pdf
				require(APPPATH."/third_party/html2pdf_v4.03/html2pdf.class.php");
				try {
					ob_end_clean();
					$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
					$html2pdf->WriteHTML($html);
					$html2pdf->Output('biodata.pdf');
				} catch (HTML2PDF_exception $e) {
					// echo $e;
					$this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/biodata-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
					redirect('admin/daftarpeserta');
				}
		}
		else
		{
			$this->template->home('home/content');
		}
				
	}
	
	function editpeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$data['biodata'] = $this->admin_model->tampilbiodata();
			$this->template->admin('admin/editpeserta',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function proseseditpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
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
			
			$data['nama_ayah']=$this->input->post('nama_ayah');
			$data['nama_ibu']=$this->input->post('nama_ibu');
			$data['pendidikan_ayah']=$this->input->post('pendidikan_ayah');
			$data['pendidikan_ibu']=$this->input->post('pendidikan_ibu');
			$data['pekerjaan_ayah']=$this->input->post('pekerjaan_ayah');
			$data['pekerjaan_ibu']=$this->input->post('pekerjaan_ibu');
			$data['penghasilan']=$this->input->post('penghasilan');
			
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
			
			if ((floor($tahun) <= 5))
			{
				if (floor($bulan) < 7)
				{
					$data['keterangan'] = 'Proses';
				}
				else
				{
					$data['keterangan'] = 'Proses';
				}
			}
			else
			{
				$data['keterangan'] = 'Proses';
			}
			
			$id_peserta=$this->input->post('id_peserta');
			
			$this->admin_model->up_biodata($id_peserta,$data);
			
			redirect(site_url('admin/belumdiverifikasi'));
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}
	
	function hapus_peserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->admin_model->hapus_peserta($id_peserta);
			redirect('admin/daftarpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function tambahpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->template->admin('admin/tambahpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function prosestambahpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
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
			
			$data['nama_ayah']=$this->input->post('nama_ayah');
			$data['nama_ibu']=$this->input->post('nama_ibu');
			$data['pendidikan_ayah']=$this->input->post('pendidikan_ayah');
			$data['pendidikan_ibu']=$this->input->post('pendidikan_ibu');
			$data['pekerjaan_ayah']=$this->input->post('pekerjaan_ayah');
			$data['pekerjaan_ibu']=$this->input->post('pekerjaan_ibu');
			$data['penghasilan']=$this->input->post('penghasilan');
			
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
			
			if ((floor($tahun) <= 5))
			{
				if (floor($bulan) < 7)
				{
					$data['keterangan'] = 'Proses';
				}
				else
				{
					$data['keterangan'] = 'Proses';
				}
			}
			else
			{
				$data['keterangan'] = 'Proses';
			}
			
			$this->admin_model->tambahpeserta($data);
			redirect('admin/daftarpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}
	
	function daftarverifpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{

			$this->template->admin('admin/daftarverifpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function belumdiverifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertabelumdiverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->pesertabelumdiverifikasi();
			$this->template->admin('admin/belumdiverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function telahverifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertatelahverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->pesertatelahverifikasi();
			$this->template->admin('admin/telahverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function verifikasipeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 'diverifikasi';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/belumdiverifikasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function unverifikasipeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 'belum diverifikasi';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/telahverifikasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	function luluspeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['keterangan'] = 'Lulus';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/jalurzonasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function tidakluluspeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['keterangan'] = 'Tidak Lulus';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/jalurzonasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function daftarpesan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['pesan'] = $this->admin_model->daftarpesan();
			$this->template->admin('admin/daftarpesan',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function bukapesan($id)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 2;
			$this->admin_model->uppesan($id,$data);
			
			$data2['pesan'] = $this->admin_model->bukapesan($id);
			$this->template->admin('admin/bukapesan',$data2);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function pengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['pengumuman'] = $this->admin_model->pengumuman();
			$data['biodata'] = $this->admin_model->tampilpengumuman();
			$this->template->admin('admin/pengumuman',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function hidupkanpengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$id = 2;
			$data['status'] = 'dihidupkan';
			$this->admin_model->uppengumuman($id,$data);
			redirect('admin/pengumuman');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function matikanpengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$id = 2;
			$data['status'] = 'dimatikan';
			$this->admin_model->uppengumuman($id,$data);
			redirect('admin/pengumuman');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

	function editscore($idb)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['biodata'] = $this->admin_model->select_id_pengaturan($idb);
			$this->template->admin('admin/editscore',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	function proseseditscore()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			
			
			$data['score1']=$this->input->post('score1');
			$data['score2']=$this->input->post('score2');
			$data['score3']=$this->input->post('score3');
			$data['score4']=$this->input->post('score4');
			
			$idb=$this->input->post('idb');
			
			$this->admin_model->up_pengaturan($idb,$data);
			
			redirect(site_url('admin/pengumuman'));
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}
	
	function download($nama)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$name = $nama;
			$data = file_get_contents('uploads/kk/'.$nama);
			force_download($name, $data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

	function jalurzonasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertajalurzonasi();
			$data['jumlah'] = count($peserta);
			$data['no'] = 1;
			$data['peserta'] = $this->admin_model->pesertajalurzonasi();



			$this->template->admin('admin/jalurzonasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function jalurprestasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertajalurprestasi();
			$data['jumlah'] = count($peserta);
			$data['no'] = 1;
			$data['peserta'] = $this->admin_model->pesertajalurprestasi();
			$this->template->admin('admin/jalurprestasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	function jalurafirmasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertajalurafirmasi();
			$data['jumlah'] = count($peserta);
			$data['no'] = 1;
			$data['peserta'] = $this->admin_model->pesertajalurafirmasi();
			$this->template->admin('admin/jalurafirmasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	function jalurluarkab()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{

			$peserta = $this->admin_model->order_by();
			$peserta = $this->admin_model->pesertajalurluarkab();
			$data['jumlah'] = count($peserta);
			$data['no'] = 1;
			$data['peserta'] = $this->admin_model->pesertajalurluarkab();
			$this->template->admin('admin/jalurluarkab',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	

	function pengaturan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['biodata'] = $this->admin_model->pengaturan();
			
			$this->template->admin('admin/pengaturan',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	function editpengaturan($idb)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['biodata'] = $this->admin_model->select_id_pengaturan($idb);
			$this->template->admin('admin/editpengaturan',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	function proseseditpengaturan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			
			$data['nama_sekolah']=$this->input->post('nama_sekolah');
			$data['alamat_sekolah']=$this->input->post('alamat_sekolah');
			$data['kuota1']=$this->input->post('kuota1');
			$data['kuota2']=$this->input->post('kuota2');
			$data['kuota3']=$this->input->post('kuota3');
			$data['kuota4']=$this->input->post('kuota4');
			
			$data['mp1']=$this->input->post('mp1');
			$data['mp2']=$this->input->post('mp2');
			$data['mp3']=$this->input->post('mp3');
			$data['mp4']=$this->input->post('mp4');
			$data['prosedur1']=$this->input->post('prosedur1');
			$data['jadwal']=$this->input->post('jadwal');
			
			$idb=$this->input->post('idb');
			
			$this->admin_model->up_pengaturan($idb,$data);
			
			redirect(site_url('admin/pengaturan'));
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}

	function dasboard()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->daftarpeserta();
			$data['jumlah'] = count($peserta);
			$data['pendaftaran'] = $this->admin_model->dasboard();
			$data['biodata'] = $this->admin_model->tampilbiodata();
			$data['peserta'] = $this->admin_model->daftarpeserta();

			$jalur = $this->admin_model->pesertajalurzonasi();
			$data['jumlah1'] = count($jalur);
			$data['peserta'] = $this->admin_model->pesertajalurzonasi();

			$jalur2 = $this->admin_model->pesertajalurprestasi();
			$data['jumlah2'] = count($jalur2);
			$data['peserta'] = $this->admin_model->pesertajalurprestasi();

			$jalur3 = $this->admin_model->pesertajalurafirmasi();
			$data['jumlah3'] = count($jalur3);
			$data['peserta'] = $this->admin_model->pesertajalurafirmasi();

			$jalur4 = $this->admin_model->pesertajalurluarkab();
			$data['jumlah4'] = count($jalur4);
			$data['peserta'] = $this->admin_model->pesertajalurluarkab();

			
			$jalurmin = $this->admin_model->jalurmin();
			$data['jarakmin'] = $this->admin_model->jalurmin();


			$scoremin = $this->admin_model->scoremin();
			$data['scoremin'] = $this->admin_model->scoremin();

			$scoremin2 = $this->admin_model->scoremin2();
			$data['scoremin2'] = $this->admin_model->scoremin2();

			$this->template->admin('admin/dasboard',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function hidupkanpendaftaran()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$idp = 1;
			$data['statusp'] = 'aktif';
			$this->admin_model->uppendaftaran($idp,$data);
			redirect('admin/dasboard');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function matikanpendaftaran()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$idp = 1;
			$data['statusp'] = 'nonaktif';
			$this->admin_model->uppendaftaran($idp,$data);
			redirect('admin/dasboard');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	}