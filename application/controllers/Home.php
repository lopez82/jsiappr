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
		
		
	}


	public function get_approvList($date_debut=NUll,$date_fin=NULL){

		if($this->input->post()){
			$date_debut = $this->input->post('date_debut');
			$date_fin = $this->input->post('date_fin');

		}
		
		$data['approv'] =$this->appr_model->get_approvList($date_debut,$date_fin);
		$data['total'] =$this->appr_model->get_approvTotal($date_debut,$date_fin);


		$data['title'] = 'List des Patients approvisionnée ';
		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');


	}

	public function addapprov(){

		$data['title'] = 'Nouveau aprovisionnement';
		$data['patients'] = $this->appr_model->get_patient(NULL);

		$this->load->view('templates/header');
		$this->load->view('approvpage',$data);
		$this->load->view('templates/footer');

	}

	public function saveApprov(){

		$data = $this->input->post();
		$this->appr_model->saveApprov($data);

		redirect('home/get_approvList');
	}
}
