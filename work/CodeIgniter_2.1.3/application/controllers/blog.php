<?php

class Blog extends CI_Controller 
{

	function __construct(){
	parent::__construct();
	$this->load->helper('url');
	}
	function index()
	{
		//read database
		$data['articles'] = $this->db->get('blog')->result_array();
		//send the data to the view
		$this->load->view('blog_view',$data);	
	}
	
	function delete($id){
		//delete item
		$this->db->delete('blog', array('id' => $id)); 
		//send remaining blog entries to view
		$data['articles'] = $this->db->get('blog')->result_array();
		//send the data to the view
		$this->load->view('delete_view',$data);
	}
	
	function show_article($id){
		$data['article'] = $this->db->get_where('blog', array('id' => $id))->row_array();
		//send the data to the view
		$this->load->view('article_view',$data);
	
	}
	
	//Create and show form 
	function add(){
		//load form helper
		$this->load->helper('form');
		//show form view
		$this->load->view('blog_form');
	}
	//form submit method
	function insert(){
		$data = array(
   			'title' => $this->input->post('title') ,
   			'text' => $this->input->post('text')
		);
		$this->db->insert('blog', $data);
		//send remaining blog entries to view
		$data['articles'] = $this->db->get('blog')->result_array();
		//send the data to the view
		$this->load->view('insert_view',$data); 
	}
	
	function edit($id)
	{
		$this->load->helper('form');
		$data['article'] = $this->db->get_where('blog', array('id' => $id))->row_array();
		$this->load->view('blog_form_edit',$data);
	}

}