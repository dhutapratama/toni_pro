<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

if ($_SERVER['HTTP_HOST'] == 'pro-toni.dhutapratama.com') {
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'dhutapra_toni';
	$db['default']['password'] = 'tonidb';
	$db['default']['database'] = 'dhutapra_toni';
} elseif ($_SERVER['HTTP_HOST'] == 'localhost') {
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'root';
	$db['default']['password'] = '';
	$db['default']['database'] = 'makanan';
} else {
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'z';
	$db['default']['password'] = 'z';
	$db['default']['database'] = 'zadmin_toni';
}

$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */