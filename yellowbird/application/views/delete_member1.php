<div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 form-part">
                   
                   <?php                      
                        if($this->session->userdata('username'))
                        {
                   ?>
                   <h1 class="form_h1">Admin login Panel</h1>
                   
                   <div class="col-lg-6 col-md-6">
                       <h3>Delete member</h3>
                       <?php if(isset($error))echo $error;?>
                       
                       
                        <form action="<?php echo base_url();?>index.php/admin/delete_member2" method="post" enctype="multipart/form-data"/>

                             <div class="form-group">

                               <label for="name">Name</label>
                               <input type="text" class="form-control" id="InputName" placeholder="" name="name" value="<?php if(isset($username))echo $username; ?>">
                             </div>

                             <div class="form-group">
                               <label for="InputEmail1">Email </label>
                               <input type="email" class="form-control" id="InputEmail1" placeholder="" name="email" required="required" value="<?php if(isset($email))echo $email; ?>">
                             </div>

                             <div class="form-group">
                               <label for="phone">Phone</label>
                               <input type="text" class="form-control" id="InputPhone" placeholder="" name="phone" value="<?php if(isset($email))echo $email; ?>">
                             </div>

                             <div class="form-group">
                               <label for="phone">Select image</label>
                               <input type="file" name="userfile" id="fileToUpload">
                             </div>

                             <button type="submit" class="btn btn-default submit-form1">Insert</button>
                         </form>
                   </div>
                   
                    <?php }?>
                </div>
</div>

<br/><br/>
        
      