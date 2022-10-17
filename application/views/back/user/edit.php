<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Forms/</span> User Edit
    </h4>

    <div class="card mb-4">
        <h5 class="card-header">User</h5>
        <form class="card-body" action="<?php echo base_url();?>user/edit/<?php echo $user[0]->id;?>" method="post" enctype="multipart/form-data">
            <hr class="my-4 mx-n4" />
            <div class="row g-3 ">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-user-name">User Name</label>
                    <input type="text" id="multicol-user-name" class="form-control"  
                        name="user_name"  value="<?php echo $user[0]->user_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">First Name</label>
                    <input type="text" id="multicol-first-name" class="form-control"  
                        name="first_name"  value="<?php echo $user[0]->first_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">Last Name</label>
                    <input type="text" id="multicol-last-name" class="form-control"  
                        name="last_name"  value="<?php echo $user[0]->last_name?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-email-address">Email Address</label>
                    <input type="email" id="multicol-email-address" class="form-control"  
                        name="email"  value="<?php echo $user[0]->email?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-phone-number">Phone Number</label>
                    <input type="text" id="multicol-phone-number" class="form-control"  
                        name="phone"  value="<?php echo $user[0]->phone?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-email-address">Verify Email</label>
                    <input type="email" id="multicol-email-address" class="form-control"  
                    name="id_verified"  value="<?php echo $user[0]->id_verified?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-slug-name">Slug</label>
                    <input type="text" id="multicol-slug-name" class="form-control"  
                        name="slug"  value="<?php echo $user[0]->slug?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-text-name">Social Link</label>
                    <input type="text" id="multicol-text-name" class="form-control"  
                    name="site_link"  value="<?php echo $user[0]->site_link?>"/>
                </div> 
                <div class="col-md-6">
                    <label class="form-label" for="multicol-venue-address">Venue Location</label>
                    <textarea class="form-control" name="venue_location" id="multicol-venue-address" 
                     rows="1" value="<?php echo $user[0]->venue_location?>" placeholder="Venue Location"></textarea>
                 </div> 
                     
                    
                 <div class="col-md-6">
                    <label class="form-label" for="multicol-birthdate">Select Theme</label>
                    <input type="file" id="multicol-birthdate" class="form-control dob-picker" name="theme_selection"  value="<?php echo $user[0]->theme_selection?>" />
                    <img src="<?php echo base_url()?>upload_images/<?php echo $user[0]->theme_selection?>" alt="" width="50">
                </div>
                   
                 
                <div class="col-md-6">
                    <label class="form-label" for="text">status:</label>
                    <select class="form-control form-select" name="status" >
                    <option value="<?php echo $user[0]->status;?>">
                    <?php 
                    
                    if ($user[0]->status==1)
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