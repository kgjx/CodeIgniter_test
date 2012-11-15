<?php

class Another extends CI_Controller 
{
	function index()
	{
		$this->load->view('another_view');
	}
		
	function do_something($var="")
	{
		$data['text'] = $var;
    	$data['another'] = "Goodbye";
		$this->load->view('something_view',$data);
	}
}

?>