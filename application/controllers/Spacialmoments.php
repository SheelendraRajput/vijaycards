<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spacialmoments extends CI_Controller {

    									 
	public function add()
	{ 
        date_default_timezone_set("Asia/Kolkata");	
        // print_r($_POST[]);die;
        $this->load->view('back/header');
        if(!empty($_POST)) {
            $data = array(
                'moment' => $this->input->post('moment'),
                'moment_title' => $this->input->post('moment_title'),
                // 'status' => $this->input->post('status'),
                // 'created' => date('y-m-d H:i:s'),
                // 'updated' => date('y-m-d H:i:s'),
                
                );
 
           
          if(!empty($_FILES)){
               $uploadPath ='upload_images/';
                $config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                 if($this->upload->do_upload('theme_selection')){
                     $error = $this->upload->display_errors();
                        if(!empty($error)){

                            echo $error;
                            die;
                            }
                        $fileData = $this->upload->data();
                            
                        $data['theme_selection'] = $fileData['file_name'];
                    }
            }
         $this->db->insert('spacial_moments', $data);
         redirect('spacialmoments/list');
 
        }
         
		$this->load->view('back/spacialmoments/add');
        $this->load->view('back/footer');
	}
 



    public function list()
	{
		$this->load->view('back/header');

        $this->db->select('*');
        $query = $this->db->get('spacial_moments');
        $data['spacialmoments'] =  $query->result();
        $this->load->view('back/spacialmoments/list', $data);

        $this->load->view('back/footer');
        
	}

    public function delete($id)
	{
		// $id = $this->input->post('id');
        // print_r($id);die;
        $this->db->where('id',$id);
        $this->db->delete('spacial_moments');
        redirect('spacialmoments/list');
         
	}

     public function edit($id)
	{  
        // print_r($_POST);die;
       $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('spacial_moments');
        $data1['spacialmoments'] =  $query->result();
        date_default_timezone_set("Asia/Kolkata");
        
        $this->load->view('back/header');

         if(!empty($_POST)) {
         $data = array(
                'moment' => $this->input->post('moment'),
                'moment_title' => $this->input->post('moment_title'),
                // 'status' => $this->input->post('status'),
                // 'updated' => date('y-m-d H:i:s'),
            
         );
          

         if($_FILES['gr_image']['size'] != 0){
            $uploadPath ='upload_images/';
            $config['encrypt_name'] = TRUE; 
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('theme_selection')){
            $error = $this->upload->display_errors();
            if(!empty($error)){

                echo $error;
                die;
                }
            $fileData = $this->upload->data();
            $data['theme_selection'] = $fileData['file_name'];
            }
         } else {
            $data['theme_selection'] = $data1['spacialmoments'][0]->theme_selection;  
           
        }
 
       
            $this->db->where('id',$id);
            $this->db->update('spacial_moments',$data); 
            redirect('spacialmoments/list'); 
        }
        
       $this->load->view('back/spacialmoments/edit', $data1);
       $this->load->view('back/footer', $data1);
        

	}


 

}
