<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('is_ajax')){
	function is_ajax(){
		return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'));
	}
}