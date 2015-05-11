<div class="container">
            <div class="row section1">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <img src="<?php echo base_url();?>images/Sale-Mark2.jpg" alt="registration-left"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 form-part">
                    <h1 class="form_h1">Want More Info?</h1>
                    <?php                        
                            echo $this->session->userdata('success_msg');  
                            
                            $this->session->unset_userdata('success_msg');
                        
                    ?>                       
                    <p class="form_p">Interested in more information about a specific sale on our website</p>
                    
                    <form action="<?php echo base_url();?>index.php/home/form1" method="post"/>
                        
                        <div class="form-group">
                        
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="InputName" placeholder="" name="name">
                        </div>
                        
                        <div class="form-group">
                          <label for="InputEmail1">Email </label>
                          <input type="email" class="form-control" id="InputEmail1" placeholder="" name="email" required="required">
                        </div>
                        
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" id="InputPhone" placeholder="" name="phone">
                        </div>
                        
                        <div class="form-group">
                          <label for="InputSubject">Subject</label>
                          <input type="text" class="form-control" id="InputSubject" placeholder="" name="subject" required="required">
                        </div>
                        
                        <button type="submit" class="btn btn-default submit-form1">Request More Information Now</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row section2">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="text-center">Estate Sales</h2>
                    <img src="<?php echo base_url();?>images/Estate-Sale-Tag4.jpg" alt="estate sales"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="text-center">Real Estate Services</h2>
                    <img src="<?php echo base_url();?>images/For-Sale2.jpg" alt="estate sales"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="text-center">Estate Preservation</h2>
                    <img src="<?php echo base_url();?>images/Lawn2.jpg" alt="estate sales"/>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row section3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1>Proven Results</h1>
                    <p>Since 2012 Yellow Bird Estate Sales has taken the stress out of liquidating a household.  
                        If you are in need of liquidating personal property because of a death in the family, downsizing, relocating or for legal matters, call the professionals.  
                        Confidential services are provided by our personal, knowledgeable staff, who are honest, fast and full service.  
                        We will work with you and tailor our services to meet your needs.  
                        We provide experience, knowledge of the market place and have a large list of great customers, just waiting on our next sale.  Best of all, there are no upfront fees. 
                        We proudly serve North Georgia with an emphisis on Fulton, Dekalb, Gwinnett, Hall, Dawson, Forsyth, Cherokee and Pickens Counties.</p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 text-center button_part">
                    <?php if($this->session->userdata('success_email_msg')) { echo $this->session->userdata('success_email_msg');  } else{?>
                    <a href="<?php echo base_url();?>index.php/home/newsletter">
                        <span class="button_part1">
                            <span class="button_part1_1">JOIN</span><span class="button_part1_2"> our</span></span>
                        <span class="button_part1_3">list</span></a>
                    <p class="button1_note">get newsletters by email</p>
                    <?php }?>
                </div>
                
              
            </div>
        </div>