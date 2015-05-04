<div class="container-fluid">
            <div class="row section1">
                
                <div class="col-lg-12 col-md-12 col-sm-12 form-part">
                   
                   <?php                      
                        if($this->session->userdata('username'))
                        {
                   ?>
                   <h1 class="form_h1">Admin login Panel</h1>
                   <h3>Enter information for adding new member</h3>
                   <form action="<?php echo base_url();?>index.php/admin/new_member2" method="post"/>
                        
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
                          <input type="file" name="image" id="fileToUpload">
                        </div>
                   
                        <button type="submit" class="btn btn-default submit-form1">Insert</button>
                    </form>
                    <?php }?>
                </div>
            </div>
</div>

<br/><br/>
        
      