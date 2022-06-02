<?php
class Avesacademy_m extends CI_Model
{
	function articleinsert($table,$data)	
	{
		 $this->db->trans_start();
		$this->db->insert($table,$data);
		$this->db->trans_complete();
    	return $this->db->insert_id();
	}
	function getarticlecontent($table)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.student_name");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "desc");
	 	$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	function getarticlecontentpage($table,$row,$row1)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "asc");
		$this->db->limit($row,$row1);
	 	$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	function getarticlecount($table)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.student_name");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "desc");
	 	$result=$this->db->get($table);
	 	$rowcount = $result->num_rows();
     	return $rowcount;
	
	
	}
	function getsinglearticlecontent($table,$articleid)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		$this->db->where('article_id',$articleid);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
	 	$result=$this->db->get($table);
     	return $result->result();
	
	
	}
	function getarticlecountstudent($table,$studentid)
	{
		$status=1;
		$this->db->where('article_status',$status);
		$this->db->where('article_studentid',$studentid);
	 	$result=$this->db->get($table);
	 	$rowcount = $result->num_rows();
     	return $rowcount;
	}
}
?>