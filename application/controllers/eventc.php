<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventc extends CI_controller {

  public function index()
  {
    $data['konten']="event";
$this->load->view('template', $data);
	}
}
 ?>
