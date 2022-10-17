<?php
ini_set('display_errors', 0); 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class Groomrelative  extends CI_Controller {
    											 
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

 
                
         $this->db->insert('groom_relative', $data);
         redirect('groomrelative/list');
 
        }
         
		$this->load->view('back/groomrelative/add');
        $this->load->view('back/footer');
	}
 



    public function list()
	{
		$this->load->view('back/header');

        $this->db->select('*');
        $query = $this->db->get('groom_relative');
        $data['groomrelative'] =  $query->result();
        $this->load->view('back/groomrelative/list', $data);

        $this->load->view('back/footer');
        
	}

    public function delete($id)
	{
		// $id = $this->input->post('id');
        // print_r($id);die;
        $this->db->where('id',$id);
        $this->db->delete('groom_relative');
        redirect('groomrelative/list');
         
	}

     public function edit($id)
	{  
        //print_r($_FILES);die;
       $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('groom_relative');
        $data1['groomrelative'] =  $query->result();
        
        $previous_img = json_decode($data1['groomrelative'][0]->r_image);
        $this->load->view('back/header');

         if(!empty($_POST)) {
     

         if(!empty($_FILES)){
            $data = [];

            $count = count($_FILES['r_image']['name']);
         // print_r($count); die;
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
            // print_r($previous_img); 
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // print_r($data['totalFiles']); 
            
            
          //  die;

           $uplod_image = $data['totalFiles'];
          // print_r($previous_img);
          if(!empty($uplod_image)){
            
           $mergearray = array_merge($previous_img, $uplod_image); 
           
           } else {
             
            $mergearray = $previous_img;
            }
           //print_r(array_merge($a1,$a2));

            $b= json_encode($mergearray);
        }
   //    print_r($previous_img);
      print_r($b);
      //die;
        $data=array(
            'r_image'=>$b,
           // 'city_id'=> $this->input->post('city_id'),
            'r_name'=> json_encode($this->input->post('r_name')),          
            'status'=> $this->input->post('status'),    
            'created'=> date("Y-m-d H:i:s"),
                     
             
        ); 
       
            $this->db->where('id',$id);
            $this->db->update('groom_relative',$data); 
            redirect('groomrelative/list'); 
        }
        
       $this->load->view('back/groomrelative/edit', $data1);
       $this->load->view('back/footer', $data1);
        

	}


 

}