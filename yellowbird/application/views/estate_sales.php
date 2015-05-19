<div class="container">
            <div class="row section1">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url();?>images/emotionheader7146237.jpg" alt="registration-left"/>
                </div>
               
            </div>
        </div>
        
        
        <div class="container">
            <div class="row">
                
                
               <div class="col-lg-12 text-justify">
                   <h3>Real Estates</h3>
                   <p>In addition to our Estate Sales & Liquidation Services we also offer a full line of real estate services.  We have licensed Real Estate Brokers & Agents on our staff to take care of all of your real estate needs.  We have over one 
hundred years of experience in the Atlanta Real Estate market and have sold several thousand homes.  We are proud to offer these services:<br/>
                    </p>
                    
                    <p class="text-center"> 
                      <img src="<?php echo base_url();?>images/virtual-properties-realty.gif" alt="virtual-properties-realty">
                   </p>
                   
                   <p>
                       Yellow Bird Estate Sales Considers it an honor and a privilege to be a part of the solution to our clients problems of how to dispose of their loved ones 
property while at the same time protecting the property, as well as, the value of the property.  This is the reason we offer a unique service whereby 
we can offer both Estate Preservation Services, and through our staff of Real Estate Professionals, offer full service Real Estate Services to help you 
dispose of your estate owned property. This marketing strategy has proven highly effective!
                   </p>
                   
                   <p class="text-center"><b>We are able to offer MASSIVE Exposure when selling your home!</b></p>
                   
                   <p>
                       We provide you with a Team that works in concert with you during every stage of the estate liquidation process.  We offer an all-inclusive service to help you with 
your estate needs!  We can do everything from mowing the grass, having the estate sale to helping you sell your home in a fast professional manner.
                   </p>
                   
                   <p>
                       We have a massive marketing approach for our Realtor to be on site each day of the Estate Sale to work with potential buyers.  Mark Adamson (Associate Broker with 
Virtual Properties Realty.net) & Corey Brown (Agent with Virtual Properties Realty.com) are members of the Virtual Properties Real Estate group.  Virtual Properties has over 1,500 agents as part of our Realtor family.  We are full services 
Real Estate Professionals.
                   </p>
                   
                   <ul>
                       <li>Here are just a few of the benefits of listing your property with us. </li>
                       <li>Website for your property</li>
                       <li>Seen on Hundreds of websites (Realtor.com, Zillow.com, Trulia.com, Walmart.com, Homesnap.com just to name a few)</li>
                       <li>Responsive Mobile Website</li>
                       <li>Realtor.com Virtual Tour</li>
                       <li>Text Message from listing sign that will capture all calls</li>
                       <li>Youtube Video of your home created and uploaded</li>
                       <li>Realtor accessible Lock box that reports on all entries to the home</li>
                       <li>And many more features.</li>
                       
                   </ul>
                   
                   <p>
                       We have an amazing Team including a Logistics Specialist, Premier Realtor, and a Fabulous Estate Team.  When we are done with the Estate Sale we will 
make sure the house is empty and broom cleaned, and ready for a fast closing.
                   </p>
                   
                   <p>
                       We realize there are virtually hundreds of choices out there when deciding who to list your home with and which firm will conduct your estate sale.  However, Yellow 
Bird and Our Real Estate team brings you an extreme advantage of a tremendous marketing blitz to advertise both the contents and the home at the same time.
                   </p>
                   
                   <p>
                       Ask any realtor you interview, "How many people will actually look at your advertising on our home within two weeks?  How many showings do you expect in 
the first 2 weeks? How many potential buyers will attend your average open house?"
                   </p>
                   
                   <p>Then ask us:</p>
                   
                   <p>How many people will actually look at the advertisement with photographs & description in the first two weeks?  1000 to 3000 plus.</p>
                   
                   <p>
                       How many showings in the first two weeks?  We want to sell your home with fewer than 10 private showings; usually the home sells at the Estate Sale.
How many potential buyers will attend your average open house? Minimum of 100's as our open house is your Estate Sale as well as the first showing of the home. We 
also invite hundreds of Realtors to come through specifically to look at the property.
                   </p>
                   
                   <p>
                       There is currently no better method to liquidate a house and the personal property than combining both with Yellow Bird Estate Sales and The Adamson Team!
Call Mark Adamson Today!  Cell:  404-372-2944 or Office: 770-495-5050
                   </p>
                   
                   <p class="text-center"><b>Purchase Your Home "As Is" with a Fast and Easy Closing</b></p>
                    
                   <p>
                       As another option we can purchase your home in "As Is" Condition – This is a great opportunity for you to sell your home without any hassles of fixing up the 
property, interviewing agents, and everything that goes with selling a house. We will assess your home and then make you a cash offer with a quick 
closing.  We take the house in "As Is" condition, so all you do is walk away with your money and have no worries about the house. For more information 
on our home purchase options please call or email Michael Adamson at (770) 
402-5185 or mgayellowbird@hotmail.com.
                   </p>
              
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
                          <input type="hidden" name="page" value="estate_sales">  
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