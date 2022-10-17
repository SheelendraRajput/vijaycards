<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Forms/</span> Bride Edit
    </h4>

    <div class="card mb-4">
        <h5 class="card-header">Bride</h5>
        <form class="card-body" action="<?php echo base_url();?>bride/edit/<?php echo $bride[0]->id;?>" method="post" enctype="multipart/form-data">
            <hr class="my-4 mx-n4" />
            <div class="row g-3 ">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Bride Name</label>
                    <input type="text" id="multicol-first-name" class="form-control"  
                        name="br_name"  value="<?php echo $bride[0]->br_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Nick Name</label>
                    <input type="text" id="multicol-first-name" class="form-control"  
                        name="nickname"  value="<?php echo $bride[0]->nickname?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Bride DOB</label>
                    <input type="date" id="multicol-first-name" class="form-control"  
                        name="age"  value="<?php echo $bride[0]->age?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Father Name</label>
                    <input type="text" id="multicol-first-name" class="form-control"  
                        name="father_name"  value="<?php echo $bride[0]->father_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Mother Name</label>
                    <input type="text" id="multicol-first-name" class="form-control"  
                        name="mother_name"  value="<?php echo $bride[0]->mother_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Grand Father Name</label>
                    <input type="text" id="multicol-first-name" class="form-control"  
                        name="g_f_name"  value="<?php echo $bride[0]->g_f_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Grand Mother Name</label>
                    <input type="text" id="multicol-first-name" class="form-control"  
                        name="g_m_name"  value="<?php echo $bride[0]->g_m_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">Address</label>
                    <textarea class="form-control" name="address" id="multicol-first-name" 
                     rows="1" value="" placeholder="Address"><?php echo $bride[0]->address?></textarea>
                 </div> 
                 <div class="col-md-6">
                     <label class="form-label" for="multicol-first-name">Education</label>
                     <input type="text" id="multicol-first-name" class="form-control"  
                     name="education"  value="<?php echo $bride[0]->education?>"/>
                    </div> 
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-first-name">Social Link</label>
                        <input type="text" id="multicol-first-name" class="form-control"  
                        name="social_link"  value="<?php echo $bride[0]->social_link?>"/>
                    </div> 
                    
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-birthdate">Bride Image</label>
                        <input type="file" id="multicol-birthdate" class="form-control dob-picker" name="br_image"  value="<?php echo $bride[0]->br_image?>" />
                        <img src="<?php echo base_url()?>upload_images/<?php echo $bride[0]->br_image?>" alt="" width="50">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-first-name">Discription</label>
                        <textarea class="form-control" name="content" id="" value="" rows="1" placeholder="Content"><?php echo $bride[0]->content?></textarea>
                         </div> 
                 
                <div class="col-md-6">
                    <label class="form-label" for="text">status:</label>
                    <select class="form-control form-select" name="status" >
                    <option value="<?php echo $bride[0]->status;?>">
                    <?php 
                    
                    if ($bride[0]->status==1)
                    { 
                      echo "Active";

                    }
                    else
                    
                    { 
                      echo "Inactive";
                    }
                    ?>
                    </option>    
                    <option value="1">Enable </option>
                        <option value="0">Disable </option>
                    </select>
                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>