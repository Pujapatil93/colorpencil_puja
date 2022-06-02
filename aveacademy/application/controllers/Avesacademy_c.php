<?php
Class Avesacademy_c extends CI_Controller
{
		public function __construct()
       	{
            parent::__construct();
            $this->load->model('Avesacademy_m');
			$this->load->helper('url');
			$this->load->helper('form');
			
	
       	}
       	public function articlesubmission()
       	{
       		$this->load->view('views/articlesubmission');
       	}
       	public function articlesubmissioninsert()
       	{
       		if(!empty($_POST['public']))
       		{
       			$privacy=$_POST['public'];
       			if(!empty($_FILES['image-input']['name']))
	      		{
					if(!empty($_FILES['image-input']['name']))
			      	{
			      	 	if (!is_dir('upload/articleimage/')) 
						 {
					    	mkdir('./upload/articleimage/', 0777, TRUE);
						 }

						$filename=$_FILES['image-input']['name'];
						if (!empty($_FILES['image-input']['name']))
						{
								$ext = pathinfo($filename, PATHINFO_EXTENSION);
						
								$this->load->helper("url");	
						        $basepath ="./upload/articleimage/" ;
								$randomnumber = rand(123456,654321);
								$newfilename = $randomnumber . "." . $ext ;        
								$target_path = $basepath . $newfilename ; 		             
							   if (move_uploaded_file($_FILES['image-input']['tmp_name'],$target_path))
								{
								}
						}
					}
					$type=$_FILES['image-input']['type'];
					$data=array('article_file'=>$newfilename,'article_filetype'=>$type,'article_studentid'=>"1",'article_studentclass'=>"4",
						'article_visibility'=>$privacy);
					$id=$this->Avesacademy_m->articleinsert('article_db',$data);
					if(!empty($id))
					{
						$data['msg']="success";
					}
					else
					{
						$data['msg']="false";
					}
					$this->load->view('views/articlesubmission',$data);
				}
				if(!empty($_FILES['video-input']['name']))
	      		{
					if(!empty($_FILES['video-input']['name']))
			      	{
			      	 	if (!is_dir('upload/articlevideo/')) 
						 {
					    	mkdir('./upload/articlevideo/', 0777, TRUE);
						 }

						$filename=$_FILES['video-input']['name'];
						if (!empty($_FILES['video-input']['name']))
						{
								$ext = pathinfo($filename, PATHINFO_EXTENSION);
						
								$this->load->helper("url");	
						        $basepath ="./upload/articlevideo/" ;
								$randomnumber = rand(123456,654321);
								$newfilename = $randomnumber . "." . $ext ;        
								$target_path = $basepath . $newfilename ; 		             
							   if (move_uploaded_file($_FILES['video-input']['tmp_name'],$target_path))
								{
								}
						}
					}
					$type=$_FILES['video-input']['type'];
					$data=array('article_file'=>$newfilename,'article_filetype'=>$type,'article_studentid'=>"1",'article_studentclass'=>"4",
						'article_visibility'=>$privacy);
					$id=$this->Avesacademy_m->articleinsert('article_db',$data);
					if(!empty($id))
					{
						$data['msg']="success";
					}
					else
					{
						$data['msg']="false";
					}
					$this->load->view('views/articlesubmission',$data);
				}
				if(!empty($_FILES['pdf-input']['name']))
	      		{
					if(!empty($_FILES['pdf-input']['name']))
			      	{
			      	 	if (!is_dir('upload/articlepdf/')) 
						 {
					    	mkdir('./upload/articlepdf/', 0777, TRUE);
						 }

						$filename=$_FILES['pdf-input']['name'];
						if (!empty($_FILES['pdf-input']['name']))
						{
								$ext = pathinfo($filename, PATHINFO_EXTENSION);
						
								$this->load->helper("url");	
						        $basepath ="./upload/articlepdf/" ;
								$randomnumber = rand(123456,654321);
								$newfilename = $randomnumber . "." . $ext ;        
								$target_path = $basepath . $newfilename ; 		             
							   if (move_uploaded_file($_FILES['pdf-input']['tmp_name'],$target_path))
								{
								}
						}
					}
					$type=$_FILES['pdf-input']['type'];
					$data=array('article_file'=>$newfilename,'article_filetype'=>$type,'article_studentid'=>"1",'article_studentclass'=>"4",
						'article_visibility'=>$privacy);
					$id=$this->Avesacademy_m->articleinsert('article_db',$data);
					if(!empty($id))
					{
						$data['msg']="success";
					}
					else
					{
						$data['msg']="false";
					}
					$this->load->view('views/articlesubmission',$data);
				}


       		}
       	}
       	public function aves()
       	{
       		$data['post']=$this->Avesacademy_m->getarticlecontent('article_db');
       		$this->load->view('views/aves',$data);
       	}
       	public function articles($pageno)
       	{

       		$page=$pageno;
       		$row=NULL;
       		if($row==NULL || $row==0)
				{ $row=16;}
			if($page==1 || $page==0){
				$row1=0;
			}
			else{
				$row1=($page-1)*$row;
			}
			$data['count']=$this->Avesacademy_m->getarticlecount('article_db');
       		$data['post']=$this->Avesacademy_m->getarticlecontentpage('article_db',$row,$row1);
       		$data['pageno']=$page;
       		$this->load->view('views/articles',$data);
       	}

       	public function articledetail($id)
       	{
       		$articleid=$id;
       		$data['val']=$this->Avesacademy_m->getsinglearticlecontent('article_db',$articleid);
       		$data['post']=$this->Avesacademy_m->getarticlecontent('article_db');
       		$this->load->view('views/singlearticle',$data);
       	}
         
        
}
?>
