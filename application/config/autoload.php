<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages']  = array();
$autoload['libraries'] = array('database', 'session');
$autoload['helper']    = array('url');
$autoload['config']    = array();
$autoload['language']  = array();
$autoload['model']     = array(
							'm_administrator',
							'm_divisi',
							'm_kalori',
							'm_makanan_buah',
							'm_makanan_lauk_pauk',
							'm_makanan_minuman',
							'm_makanan_pokok',
							'm_makanan_sayur',
							'm_menu_makanan',
							'm_notifikasi',
							'm_pegawai',
							'render'
							);


/* End of file autoload.php */
/* Location: ./application/config/autoload.php */