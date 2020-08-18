<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
Class RiwayatHidup extends CI_Controller{
	function __construct () {
	parent:: __construct ();
}
public function index(){
	echo"<CENTER><H2>INI ADALAH RIWAYAT HIDUP SAYA <HR></H2></CENTER>
	<u>DATA PRIBADI</u><br><br>
Nama:Raden Yoga Triatmaja S<br>
Tempat,tgl lahir:Bandung 02 November 2002<br>
Jenis kelamin: Laki-laki<br>
Agama : Islam<br>
Tinggi Badan : -<br>
Berat Badan : -<br>
Alamat : Jln.Haruman Sari Rt 05/Rw 07 , Kel.cigending kec.UjungBerung Bandung.<br>
No HP : 08814511646<br>
Status : Pelajar<br>
E_mail : radenyogats@gmail.com<br>
DATA PENDIDIKAN<br>
Sekolah Dasar : SDN 036 UjungBerung (2008-2014)<br>
SMP : SMPN 8 Bandung (2015-2017)<br>
SMA/SMK : (2018-2021)<br>
";
	}
public function Pengalaman_Prestasi () {
	$this->load->view('view_Pengalaman&Prestasi');
	}
}