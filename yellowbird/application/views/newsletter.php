<div class="container">
            <div class="row section1">
                
                <div class="col-lg-offset-2 col-lg-6 col-md-6 col-sm-6">
                    <h2 >YellowBird Estate Sales Email Friends</h2>
                    <p>Keep in touch with all the goings on YellowBird. Sign on here to start receiving our email updates</p>
                    <p></p>
                   
                    <form action="<?php echo base_url();?>index.php/home/newsletter2" method="post"/>
                        
                        <div class="form-group">                        
                            <label for="email" class="label-news">Email Address</label>
                            <input type="email" class="form-control-news"  placeholder="email address" name="email" required="required" value="<?php if(isset($email))echo $email; ?>">
                            
                        </div>
                        
                        
                        <div class="form-group">                        
                          <label for="name" class="label-news">First Name</label>
                          <input type="text" class="form-control-news"  placeholder="first name" name="first_name"  value="<?php if(isset($first_name))echo $first_name; ?>">
                        </div>
                    
                        <div class="form-group">                        
                          <label for="name" class="label-news">Last Name</label>
                          <input type="text" class="form-control-news"  placeholder="last name" name="last_name"  value="<?php if(isset($last_name))echo $first_name; ?>">
                        </div>
                    
                       <div class="form-group">  
                           
                        <button type="submit" class="btn btn-default submit-form2">Subscribe to list</button>
                       </div>
                    </form>
                    
                    
                </div>
            </div>
</div>

<br/><br/>
        
      