<div class="container">
            <div class="row section1">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url();?>images/People-lined-up.jpg" alt="registration-left"/>
                </div>
               
            </div>
        </div>
        
        
        
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <img src="<?php echo base_url();?>images/estate-sales1.jpg" alt="" class="sales-img1"/>
                    <img src="<?php echo base_url();?>images/estate-sales2.jpg" alt="" class="sales-img2"/>
                </div>
                
               <div class="col-lg-9">
                   <h1>Estate Sales and Liquidation Services</h1>
                   <p>We Provide Many Resources to Those Looking to Sell Their Estate Including:</p>
                   <ul>
                       <li><b><em>Free Consultation</em></b> to help you determine the best course of action for Estate needs. </li>
                       <li>We can help you with the entire Estate: Personal Property, Automobiles, Campers, Jewelry, Firearms, Real Estate ... and much more.</li>
                       <li>Pre-Sale Clean-outs & Trash Removal as needed.</li>
                       <li>Sort, Display and Price all items to enhance the value of each item.</li>
                       <li><b>Massive Exposure</b> in Estatesales.net, EstateSales.org, Local Craigslist, and More...PLUS we send notification to our own LARGE Customer E-mail list.</li>
                       <li>Yard and Directional Signs based on local codes and laws.</li>
                       <li>Depending on your wishes we can offer complete clean-outs upon sales completion.</li>
                       <li>Donations to local charities for tax credits back to you of any items that do not sell (Goodwill, Salvation Army, Veterans Associations, ReStore and others).</li>
                       <li>We also offer you a wide range of Real Estate Services (We do it all, everything from buying your house in "As Is" condition, to helping you bring your home up to date and ready for sale, to listing your Home for Sale.</li>
                       <li>We follow Uniform Standards of Professional Appraisal Practice guidelines.</li>
                   </ul>
                </div>
            </div>
        </div>
        
        
        
        <div class="container">
            <div class="row">
                
               <?php 
                    //print_r ($this->session->userdata('new_data'));
                    $newdata = $this->session->userdata('new_data');
                    
                    $first_form = $this->session->userdata('first_form');
                    
                    if($newdata['pop_error']){
                        echo '<center><b>'.$newdata['pop_error'].'</b></center>';
                    }
                  ?>
                
                
                <div class="col-lg-12 text-center more-info">
                    <!-- Button trigger modal -->
                    <button type="button"  data-toggle="modal" data-target="#myModal" style="border:none; background: transparent;">
                      <div class="more-info-btn">
                        <div class="click-here">Click Here</div> For More Information
                      </div>
                    </button>
                   
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Do you need to have an Estate Sale? Tell Us About It Here.</h4>
              </div>
              <div class="modal-body">
                  
                  <form action="<?php echo base_url();?>index.php/home/form2" method="post"/>
                        
                  
                        <div class="form-group">                        
                          
                            <input type="text" class="form-control" id="InputName" placeholder="*Name:" name="name" required="required" value="<?php if(isset($first_form)){echo $first_form['name'] ;} else echo $newdata['name'];?>">
                        </div>
                        
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="Phone:" name="phone" value="<?php if(isset($first_form)){echo $first_form['phone'] ;} else echo $newdata['phone'];?>">
                        </div>
                  
                        <div class="form-group">
                          
                          <input type="email" class="form-control" id="InputEmail1" placeholder="*Email Address:" name="email" required="required" value="<?php if(isset($first_form)){echo $first_form['email'] ;} else echo $newdata['email'];?>">
                        </div>
                        
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="Address:" name="address" value="<?php echo $newdata['address'];?>">
                        </div>
                  
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="City:" name="city" value="<?php echo $newdata['city'];?>">
                        </div>
                  
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="Zip:" name="zip" value="<?php echo $newdata['zip'];?>">
                        </div>
                  
                        <div class="form-group">                        
                          <label class="label-popup">What is your time frame?</label>
                          
                        </div>
                        <div class="checkbox">
                            
                            <label class="label-popup">
                                <input type="checkbox" name="as_soon_as"> <span style="padding-right: 22px;">As soon as possible</span>
                                <input type="checkbox" name="4_6_weeks"> <span style="padding-right: 22px;">4-6 Weeks</span>
                                <input type="checkbox" name="6_12_weeks"> <span style="padding-right: 22px;">6-12 Weeks</span>
                                <input type="checkbox" name="more_then_3"> More than 3 months
                            </label>
                        </div>
                      <br/>
                        <div class="form-group">                        
                            <label class="label-popup">How much do you have to sell?</label>     
                        </div>
                  
                        <div class="checkbox">
                            
                            <label class="label-popup">
                                <input type="checkbox" name="full_home"> Full Home (We will be taking very little)
                                <br/>
                                <input type="checkbox" name="downsizing"> Downsizing (Leaving 1/2 of the contents)
                                <br/>
                                <input type="checkbox" name="moving"> Moving (1-2 rooms of items to sell)
                                <br/>
                                 <br/>
                            </label>
                        </div>
                      
                      
                        <div class="form-group">                        
                          <label class="label-popup">What do you have to sell?</label>
                          
                        </div>
                        <div class="checkbox">
                            
                            <label class="label-popup">
                                <input type="checkbox" name="accessories"> <span style="padding-right: 22px;">Accessories</span>
                                <input type="checkbox" name="art"> <span style="padding-right: 22px;">Art</span>
                                <input type="checkbox" name="china"> <span style="padding-right: 22px;">China</span>
                                <input type="checkbox" name="clothing"> <span style="padding-right: 22px;">Clothing</span>
                                <input type="checkbox" name="crystal"> <span style="padding-right: 22px;">Crystal</span>
                                <input type="checkbox" name="firearms"> <span style="padding-right: 22px;">Firearms</span>
                                
                                <input type="checkbox" name="furniture"> <span style="padding-right: 22px;">Furniture</span>
                                <br/>
                                <input type="checkbox" name="garage_sales"> <span style="padding-right: 22px;">Garage Sales Items</span>
                                <input type="checkbox" name="gold"> <span style="padding-right: 22px;">Gold/ Silver</span>
                                <input type="checkbox" name="jewelery"> <span style="padding-right: 22px;">Jewelery</span>
                                
                                <input type="checkbox" name="kitchen"> <span style="padding-right: 22px;">Kitchen Items</span>
                                <br/>
                                <input type="checkbox" name="outdoor"> <span style="padding-right: 22px;">Outdoor Items</span>
                                <input type="checkbox" name="rugs"> <span style="padding-right: 22px;">Rugs</span>
                                <input type="checkbox" name="sporting"> <span style="padding-right: 22px;">Sporting Goods</span>
                                <input type="checkbox" name="tools"> <span style="padding-right: 22px;">Tools</span>
                                <input type="checkbox" name="vehicles"> <span style="padding-right: 22px;">Vehicles</span>
                               <br/><br/>
                            </label>
                        </div>                      
                      
                        <div class="form-group">                        
                          <label class="label-popup">Do you have a real estate agent?</label>
                          
                        </div>
                      
                        <div class="radio">
                            <label class="label-popup">
                              <input type="radio" name="agent" id="optionsRadios1" value="yes" >
                              Yes
                            </label>
                        </div>
                          <br/>
                          <div class="radio">
                            <label class="label-popup">
                              <input type="radio" name="agent" id="optionsRadios2" value="no" checked>
                              No
                            </label>
                        </div>
                      
                      
                        <div class="form-group">                        
                          <label class="label-popup">Do you need a recommendation of a realtor of your area?</label>
                          
                        </div>
                      
                        <div class="radio">
                            <label class="label-popup">
                              <input type="radio" name="realtor" id="optionsRadios1" value="yes" >
                              Yes
                            </label>
                        </div>
                          <br/>
                          <div class="radio">
                            <label class="label-popup">
                              <input type="radio" name="realtor" id="optionsRadios2" value="no" checked>
                              No
                            </label>
                        </div>
                        
                        <div class="form-group">                        
                          <label class="label-popup">&nbsp;</label>
                          
                        </div>  
                        <div class="form-group">                             
                          <label class="label-popup"><?php echo $cap['image'];?></label>
                          <input type="hidden" name="captcha1" value="<?php echo $cap['word'];?>">                          
                        </div>  
                          
                       <input type="text" class="form-control" id="InputPhone" placeholder="Type the text" name="captcha2">
                        <div class="form-group">                        
                          <label class="label-popup">&nbsp;</label>
                          <input type="hidden" name="page" value="<?php echo $page;?>">  
                        </div>
                          
                       
                        <button type="submit" class="btn btn-default submit-form1">Submit</button>
                    </form>
                                   

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>