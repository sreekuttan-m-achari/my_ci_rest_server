<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$ar = array('apple', 'orange', 'banana', 'strawberry');
		echo json_encode($ar); // ["apple","orange","banana","strawberry"]
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */