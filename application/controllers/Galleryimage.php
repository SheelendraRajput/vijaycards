<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galleryimage extends CI_Controller {

    
	public function add()
	{
        date_default_timezone_set("Asia/Kolkata");	
        //print_r($_POST);die;
        $this->load->view('back/header');
        if(!empty($_POST)) {
            $data = array(
                 
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
                 if($this->upload->do_upload('g_image')){
                     $error = $this->upload->display_errors();
                        if(!empty($error)){

                            echo $error;
                            die;
                            }
                        $fileData = $this->upload->data();
                            
                        $data['g_image'] = $fileData['file_name'];
                    }
            }
         $this->db->insert('gallery_image', $data);
         redirect('galleryimage/list');
 
        }
         
		$this->load->view('back/gallery_image/add');
        $this->load->view('back/footer');
	}
 



    public function list()
	{
		$this->load->view('back/header');

        $this->db->select('*');
        $query = $this->db->get('gallery_image');
        $data['galleryimage'] =  $query->result();
        $this->load->view('back/gallery_image/list', $data);

        $this->load->view('back/footer');
        
	}

    public function delete($id)
	{
		// $id = $this->input->post('id');
        // print_r($id);die;
        $this->db->where('id',$id);
        $this->db->delete('gallery_image');
        redirect('galleryimage/list');
         
	}

     public function edit($id)
	{  
        date_default_timezone_set("Asia/Kolkata");	
       // print_r($_POST);die;
       $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('gallery_image');
        $data1['galleryimage'] =  $query->result();
        
        $this->load->view('back/header');
         if(!empty($_POST)) {
         $data = array(
                 'status' => $this->input->post('status'),
                // 'created' => date('y-m-d H:i:s'),
                'updated' => date('y-m-d H:i:s'),
            
         );
          

         if($_FILES['g_image']['size'] != 0){
            $uploadPath ='upload_images/';
            $config['encrypt_name'] = TRUE; 
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('g_image')){
            $error = $this->upload->display_errors();
            if(!empty($error)){

                echo $error;
                die;
                }
            $fileData = $this->upload->data();
            $data['g_image'] = $fileData['file_name'];
            }
         } else {
            $data['g_image'] = $data1['galleryimage'][0]->g_image ;  
           
        }
 
       
            $this->db->where('id',$id);
            $this->db->update('gallery_image',$data); 
            redirect('galleryimage/list'); 
        }
        
       $this->load->view('back/gallery_image/edit', $data1);
       $this->load->view('back/footer', $data1);
        

	}


 

}