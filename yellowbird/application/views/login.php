<div class="container-fluid">
            <div class="row section1">
                
                <div class="col-lg-offset-4 col-lg-4 col-md-4 col-sm-4 form-part">
                    <h1 class="form_h1">Admin login Panel</h1>
                   <?php 
                        if(isset($error_msg))
                        {
                            echo $error_msg;
                        }
                    ?>
                    <form action="<?php echo base_url();?>index.php/admin/login" method="post"/>
                        
                        <div class="form-group">
                        
                          <label for="name">Username</label>
                          <input type="text" class="form-control"  placeholder="username" name="username" required="required" value="<?php if(isset($username))echo $username; ?>">
                        </div>
                        
                        
                        <div class="form-group">
                          <label for="InputSubject">Password</label>
                          <input type="password" class="form-control" placeholder="password" name="password" required="required" value="<?php if(isset($password))echo $password; ?>">
                        </div>
                       
                        <button type="submit" class="btn btn-default submit-form1">Login</button>
                    </form>
                    
                    
                </div>
            </div>
</div>

<br/><br/>
        
      