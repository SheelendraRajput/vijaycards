<?php
ini_set('display_errors', 0); 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridalrelative  extends CI_Controller {

    											 
	public function add()
	{ 
       // date_default_timezone_set("Asia/Kolkata");	
        // print_r($_POST[]);die;
        $this->load->view('back/header');
        if(!empty($_POST)) {
 
                  //  print_r($_FILES); 
                  if(!empty($_FILES)){
                    $data = [];
       
                    $count = count($_FILES['r_image']['name']);
                  
                    for($i=0;$i<$count;$i++){
                  
                      if(!empty($_FILES['r_image']['name'][$i])){
                  
                        $_FILES['file']['name'] = $_FILES['r_image']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['r_image']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['r_image']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['r_image']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['r_image']['size'][$i];
                
                        $config['upload_path'] = 'upload_images/'; 
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['max_size'] = '5000';
                        $config['file_name'] = $_FILES['r_image']['name'][$i];
                 
                        $this->load->library('upload',$config); 
                  
                        if($this->upload->do_upload('file')){
                          $uploadData = $this->upload->data();
                          $filename = $uploadData['file_name'];
                 
                          $data['totalFiles'][] = $filename;
                        }
                      }
                 
                    }
                    //print_r( $data['totalFiles']);die;
                    $b= json_encode($data['totalFiles']);
                }
                $data=array(
                    'r_image'=>$b,
                   // 'city_id'=> $this->input->post('city_id'),
                    'r_name'=> json_encode($this->input->post('r_name')),          
                    'status'=> $this->input->post('status'),    
                    'created'=> date("Y-m-d H:i:s"),
                             
                     
                ); 

 
                
         $this->db->insert('bridal_relative', $data);
         redirect('bridalrelative/list');
 
        }
         
		$this->load->view('back/bridalrelative/add');
        $this->load->view('back/footer');
	}
 



    public function list()
	{
		$this->load->view('back/header');

        $this->db->select('*');
        $query = $this->db->get('bridal_relative');
        $data['bridalrelative'] =  $query->result();
        $this->load->view('back/bridalrelative/list', $data);

        $this->load->view('back/footer');
        
	}

    public function delete($id)
	{
		// $id = $this->input->post('id');
        // print_r($id);die;
        $this->db->where('id',$id);
        $this->db->delete('bridal_relative');
        redirect('bridalrelative/list');
         
	}

     public function edit($id)
	{  
        // print_r($_POST);die;
       $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('bridal_relative');
        $data1['bridalrelative'] =  $query->result();
        date_default_timezone_set("Asia/Kolkata");
        
        $this->load->view('back/header');

         if(!empty($_POST)) {
         $data = array(
            'r_name' => $this->input->post('r_name'),
            'status' => $this->input->post('status'),
            // 'created' => date('d-m-y H:i:s'),
            'updated' => date('y-m-d H:i:s'),
            
         );
          

         if($_FILES['gr_image']['size'] != 0){
            $uploadPath ='upload_images/';
            $config['encrypt_name'] = TRUE; 
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('r_image')){
            $error = $this->upload->display_errors();
            if(!empty($error)){

                echo $error;
                die;
                }
            $fileData = $this->upload->data();
            $data['r_image'] = $fileData['file_name'];
            }
         } else {
            $data['r_image'] = $data1['bridalrelative'][0]->r_image;  
           
        }
 
       
            $this->db->where('id',$id);
            $this->db->update('bridal_relative',$data); 
            redirect('bridalrelative/list'); 
        }
        
       $this->load->view('back/bridalrelative/edit', $data1);
       $this->load->view('back/footer', $data1);
        

	}


 

}