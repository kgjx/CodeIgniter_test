<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php

class Blog extends CI_Controller {

	function index()
	{
		$query = $this->db->get('blog') ;
		$i = 0 ;
		foreach ($query->result() as $row) /* kathe fora pou pairnw ena apotelesma to apothikeyw se ena row */
		{
			data['articles'][$i]['title'] = $row->title ; /* data: pinakas 2 diastasewn */
			data['articles'][$i]['text'] = $row->text ;
			$i++ ;
		}
		$this->load->view('blog_view', $data) ;
	}
		
	function show_article($id)
	{
		$query;
		$data['title'] = ;
		$data['text'] = ;
		$this->load->view('article_view') ;
	}
}

?>

<body>
</body>
</html>
