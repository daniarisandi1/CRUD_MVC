<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	/**
	* 
	*/
	class Index extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array('berat_model'));
		}

		public function index(){
			$data = ['index'	=> $this->berat_model->all()];
			$this->load->view('index', $data);		 
		}

		public function add(){
			$rules = [
						['field'=> 'berat_max',
						 'label'=> 'Berat MAX',
						 'rules'=> 'required'],
					  	['field'=> 'berat_min',
					  	 'label'=> 'Berat MIN',
					  	 'rules'=> 'required'],
					  	['field'=> 'berat_min',
					  	 'label'=> 'Berat MIN',
					  	 'rules'=> 'required'],
					  	['field'=> 'tanggal',
						'label' => 'Tanggal',
						'rules' => 'required']];
			$this->form_validation->set_rules($rules);
				if ($this->form_validation->run()==FALSE) {
					$this->load->view('add_category');
				}
				else{
					$data = ['berat_max'	=> set_value('berat_max'),
							 'berat_min'	=> set_value('berat_min'),
							 'hasil'		=> set_value('berat_max') - set_value('berat_min'),
							 'tanggal'		=> set_value('tanggal')];
					
					$this->berat_model->create($data);
					$this->session->set_flashdata('message','Data sukses ditambahkan');
					redirect('index');
				}
		}

		public function show($id_berat){
			$data = ['data' => $this->berat_model->show($id_berat)->row()];
			$this->load->view('show', $data);
		}

		public function edit($id_berat){
			$rules = [
						['field'=> 'berat_max',
						 'label'=> 'Berat MAX',
						 'rules'=> 'required'],
					  	['field'=> 'berat_min',
					  	 'label'=> 'Berat MIN',
					  	 'rules'=> 'required'],
					  	['field'=> 'berat_min',
					  	 'label'=> 'Berat MIN',
					  	 'rules'=> 'required'],
					  	['field'=> 'tanggal',
						'label' => 'Tanggal',
						'rules' => 'required']];
			$this->form_validation->set_rules($rules);
			$data =['data' => $this->berat_model->find($id_berat)->row()];
				if ($this->form_validation->run()==FALSE) {
					$this->load->view('edit_category',$data);
				}
				else{
					$d['tanggal']   = set_value('tanggal');
					$d['berat_max'] = set_value('berat_max');
					$d['berat_min'] = set_value('berat_min');
					$d['hasil']		= set_value('berat_max') - set_value('berat_min');
					$this->berat_model->update($id_berat,$d);
					$this->session->set_flashdata('message', 'Data sukses diubah..');
						redirect('index');
				}
		}

		public function delete($id_berat){
			$this->berat_model->delete($id_berat);
			$this->session->set_flashdata('message','Data sukses dihapus...');
				redirect('index');
		}

}
?>