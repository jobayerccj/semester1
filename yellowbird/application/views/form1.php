<div class="container-fluid">
            <div class="row section1">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <img src="<?php echo base_url();?>images/Sale-Mark2.jpg" alt="registration-left"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 form-part">
                    <h1 class="form_h1">Want More Info?</h1>
                    <p>Interested in more information about a specific sale on our website</p>
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url();?>index.php/home/form1" method="post"/>
                        
                        <div class="form-group">
                        
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="InputName" placeholder="" name="name" value="<?php echo $name;?>">
                        </div>
                        
                        <div class="form-group">
                          <label for="InputEmail1">Email </label>
                          <input type="email" class="form-control" id="InputEmail1" placeholder="" name="email" required="required" value="<?php echo $email;?>">
                        </div>
                        
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" id="InputPhone" placeholder="" name="phone" value="<?php echo $phone;?>">
                        </div>
                        
                        <div class="form-group">
                          <label for="InputSubject">Subject</label>
                          <input type="text" class="form-control" id="InputSubject" placeholder="" name="subject" required="required" value="<?php echo $subject;?>">
                        </div>
                        
                        <button type="submit" class="btn btn-default submit-form1">Request More Information Now</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row section2">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="text-center">Estate Sales</h2>
                    <img src="<?php echo base_url();?>images/Estate-Sale-Tag.jpg" alt="estate sales"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="text-center">Real Estate Services</h2>
                    <img src="<?php echo base_url();?>images/For-Sale.jpg" alt="estate sales"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="text-center">Estate Preservation</h2>
                    <img src="<?php echo base_url();?>images/Lawn.jpg" alt="estate sales"/>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row section3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1>Proven Results</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 text-center button_part">
                    <a href="#">
                        <span class="button_part1">
                            <span class="button_part1_1">JOIN</span><span class="button_part1_2"> our</span></span>
                        <span class="button_part1_3">list</span></a>
                    <p class="button1_note">get newsletters by email</p>
                </div>
            </div>
        </div>