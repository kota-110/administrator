<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('admin/wisata');
	}

	public function tampil_wisata()
	{
		$url="https://tugas-akhir-kota110.herokuapp.com/attractions";
		$get_url = file_get_contents($url);
		$data = json_decode($get_url, true);

		$this->load->view('admin/wisata', array('listwisata' => $data));
		$this->load->view('admin/head');
	}


	public function tampil_transportasi()
	{
		$url="";
		$get_url = file_get_contents($url);
		$data = json_decode($get_url, true);

		$this->load->view('admin/transportasi');
		$this->load->view('admin/head');
	}
}
