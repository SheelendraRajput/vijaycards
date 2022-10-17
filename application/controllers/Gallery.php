<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    
	public function add()
	{
        date_default_timezone_set("Asia/Kolkata");	
        //print_r($_POST);die;
        $this->load->view('back/header');
        if(!empty($_POST)) {
            $data = array(
                'gallery_name' => $this->input->post('gallery_name'),
                'status' => $this->input->post('status'),
                'created' => date('y-m-d H:i:s'),
                // 'updated' => date('y-m-d H:i:s'),
                );
 
           
          if(!empty($_FILES)){
               $uploadPath ='upload_images/';
                $config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                 if($this->upload->do_upload('gallery_thumnail')){
                     $error = $this->upload->display_errors();
                        if(!empty($error)){

                            echo $error;
                            die;
                            }
                        $fileData = $this->upload->data();
                            
                        $data['gallery_thumnail'] = $fileData['file_name'];
                    }
            }
         $this->db->insert('gallery', $data);
         redirect('gallery/list');
 
        }
         
		$this->load->view('back/gallery/add');
        $this->load->view('back/footer');
	}
 



    public function list()
	{
		$this->load->view('back/header');

        $this->db->select('*');
        $query = $this->db->get('gallery');
        $data['gallery'] =  $query->result();
        $this->load->view('back/gallery/list', $data);

        $this->load->view('back/footer');
        
	}

    public function delete($id)
	{
		// $id = $this->input->post('id');
        // print_r($id);die;
        $this->db->where('id',$id);
        $this->db->delete('gallery');
        redirect('gallery/list');
         
	}

     public function edit($id)
	{  
        date_default_timezone_set("Asia/Kolkata");	
       // print_r($_POST);die;
       $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('gallery');
        $data1['gallery'] =  $query->result();
        
        $this->load->view('back/header');
         if(!empty($_POST)) {
         $data = array(
                'gallery_name' => $this->input->post('gallery_name'),
                'status' => $this->input->post('status'),
                // 'created' => date('y-m-d H:i:s'),
                'updated' => date('y-m-d H:i:s'),
            
         );
          

         if($_FILES['gallery_thumnail']['size'] != 0){
            $uploadPath ='upload_images/';
            $config['encrypt_name'] = TRUE; 
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('gallery_thumnail')){
            $error = $this->upload->display_errors();
            if(!empty($error)){

                echo $error;
                die;
                }
            $fileData = $this->upload->data();
            $data['gallery_thumnail'] = $fileData['file_name'];
            }
         } else {
            $data['gallery_thumnail'] = $data1['gallery'][0]->gallery_thumnail;  
           
        }
 
       
            $this->db->where('id',$id);
            $this->db->update('gallery',$data); 
            redirect('gallery/list'); 
        }
        
       $this->load->view('back/gallery/edit', $data1);
       $this->load->view('back/footer', $data1);
        

	}


 

}