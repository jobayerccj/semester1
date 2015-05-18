<div >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Do you need to have an Estate Sale? Tell Us About It Here.</h4>
              </div>
              <div class="modal-body">
                  
                  <form action="<?php echo base_url();?>index.php/home/form2" method="post"/>
                        
                  
                        <div class="form-group">                        
                          
                            <input type="text" class="form-control" id="InputName" placeholder="*Name:" name="name" required="required" value="<?php if(isset($name)) echo $name; else echo $newdata['name'];?>">
                        </div>
                        
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="Phone:" name="phone" value="<?php if(isset($phone)) echo $phone;?>">
                        </div>
                  
                        <div class="form-group">
                          
                          <input type="email" class="form-control" id="InputEmail1" placeholder="*Email Address:" name="email" required="required" value="<?php if(isset($email)) { echo $email;} else { echo $newdata['email'];} ?>">
                        </div>
                        
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="Address:" name="address" value="">
                        </div>
                  
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="City:" name="city" value="">
                        </div>
                  
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="Zip:" name="zip" value="">
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
                          <input type="hidden" name="page" value="form1">  
                        </div>
                          
                       
                        <button type="submit" class="btn btn-default submit-form1">Submit</button>
                    </form>
                                   

              </div>
              <div class="modal-footer">
                
                
              </div>
            </div>
          </div>
        </div>