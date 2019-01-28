<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadiri extends CI_controller {

  public function index()
  {
    $data['konten']="data_diri";
$this->load->view('template', $data);
	}
}
 ?>
