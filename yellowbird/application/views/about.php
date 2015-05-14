<div class="container">
            <div class="row section1">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url();?>images/emotionheader7146245.jpg" alt="registration-left"/>
                </div>
               
            </div>
        </div>
      
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-justify">
                    <h1>About Us</h1>
                    <p>
                        Yellow Bird Estate Sales is owned by Michael Adamson. Michael was born in Jonesboro, Georgia in the Warren House. 
                        The home was used as a hospital after the Civil War. 
                        Michael has been helping families with Estate Sales since before they were called Estate Sales. 
                        You’ll find that Michael has an extensive background in all facets of the Estate Sale business. 
                        Michael left the corporate world (Banking, Real Estate and Home Building) to follow his love ... Estate Sales and Antiques. With Michael’s knowledge, you will find him experienced, professional and fully capable of handling all aspects of your estate sale needs. Michael attends sales and auctions on a regular basis to keep current on trends and values of what is selling and what is not. Michael is a Member of the Association of Online Appraisers and a Member of the American Society of Estate Liquidators, a licensed Georgia Home Builder (Contractor) and a Member of the North Georgia Home Builders Association.
                    </p>
                    
                    <p>
                        Mark Adamson is a lifelong Atlanta native.  
                        Mark has always had a love of collecting and a love of meeting and working with new people.  
                        He is an Associate Broker with Virtual Properties.net and heads up the property listing and estate preservation services for Yellowbird.  
                        Mark's involvement in Real Estate goes back almost a quarter century in the Atlanta market.  
                        With a keen eye for what is selling, he will use his  extensive marketing tools to help you market your property to receives offers quickly, and his negotiating skills will allow you to quickly decided if this the right offer for you.  
                        Call me today to set up an appointment.
                    </p>
                    
                    <p>
                        Our staff is happy to answer questions give us a call at 770 402-5185 or via our contact form. Please feel free to give any of us a call.  
                        We love to meet new people and look forward to the opportunity to help you deal with your estate, liquidation, or home sale needs. 
                    </p>
                    
                    <p>
                        We're looking forward to meeting you soon.
                    </p>
                </div>
                
               
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <br/>
                <div class="col-lg-offset-1 col-lg-8 text-justify">
                    <h3>Our Team</h3>
                </div>
                <?php if(isset($members)) foreach($members as $member){ ?>
                    <div class="col-lg-8 text-justify">
                        <div class="col-lg-4">
                            <img src="<?php echo base_url();?>uploads/<?php echo $member->image;?>" alt="team1" class="team_img"/>
                        </div>
                        <div class="col-lg-8 team_detals">
                           <p><?php echo $member->name; ?></p> 
                           <p>Telephone: <?php echo $member->phone; ?></p> 
                           <p>Email: <?php echo $member->email; ?></p> 
                        </div>

                    </div>
                <?php } ?>
               
            </div>
        </div>
        
        
        <div class="container">
            <div class="row">
                
               <?php 
                    //print_r ($this->session->userdata('new_data'));
                    $newdata = $this->session->userdata('new_data');
                    if($newdata['pop_error']){
                        echo '<center><b>'.$newdata['pop_error'].'</b></center>';
                    }
                    
                    
                  ?>
                
                <?php echo validation_errors();  ?>
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
                          
                            <input type="text" class="form-control" id="InputName" placeholder="*Name:" name="name" required="required" value="<?php echo $newdata['name'];?>">
                        </div>
                        
                        <div class="form-group">                          
                          <input type="text" class="form-control" id="InputPhone" placeholder="Phone:" name="phone" value="<?php echo $newdata['phone'];?>">
                        </div>
                  
                        <div class="form-group">
                          
                          <input type="email" class="form-control" id="InputEmail1" placeholder="*Email Address:" name="email" required="required" value="<?php echo $newdata['email'];?>">
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
                          
                        </div>
                          
                       
                        <button type="submit" class="btn btn-default submit-form1">Submit</button>
                    </form>
                                   
<!--                 <form action="<?php echo base_url();?>index.php/home/form2" method="post"/>
                        
                        <div class="form-group">                        
                          <label for="name" class="label-popup">Name</label>
                          <input type="text" class="form-control" id="InputName" placeholder="" name="name">
                        </div>
                        
                        <div class="form-group">
                          <label for="InputEmail1" class="label-popup">Email </label>
                          <input type="email" class="form-control" id="InputEmail1" placeholder="" name="email" required="required">
                        </div>
                        
                        <div class="form-group">
                          <label for="InputPhone" class="label-popup">Phone</label>
                          <input type="text" class="form-control" id="InputPhone" placeholder="" name="phone">
                        </div>
                        
                        <div class="form-group">
                          <label for="street_address" class="label-popup">Address of Property</label>
                          <input type="text" class="form-control" id="street_address" placeholder="Street Address" name="street_address" required="required">
                          
                          <label for="street_address2" class="label-popup">&nbsp;</label>
                          <input type="text" class="form-control" id="street_address2" placeholder="Street Address Line 2" name="street_address2" >
                          
                          <label for="city" class="label-popup">&nbsp;</label>
                          <input type="text" class="form-control" id="city" placeholder="City" name="city" required="required">
                          
                          <label for="state" class="label-popup">&nbsp;</label>
                          <input type="text" class="form-control" id="state" placeholder="State / Province / Region" name="state" required="required">
                          
                          <label for="postal" class="label-popup">&nbsp;</label>
                          <input type="text" class="form-control" id="postal" placeholder="Postal / Zip Code" name="postal" required="required">
                          
                          <label for="country" class="label-popup">&nbsp;</label>
                          <select class="form-control" name="country">
                            <option value="">Select Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombi">Colombi</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor (Timor Timur)">East Timor (Timor Timur)</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia, The">Gambia, The</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, North">Korea, North</option>
                            <option value="Korea, South">Korea, South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepa">Nepa</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent">Saint Vincent</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City">Vatican City</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div>
                        
                        <div class="form-group">
                          <label for="living_address" class="label-popup">Do You Live at This Address As Well?</label>
                          <input type="text" class="form-control" id="living_address" placeholder="" name="living_address">
                        </div>
                        
                        <div class="form-group" >
                          <label for="hear_atlanta" class="label-popup">How Did You Hear About Atlanta Investor?</label>
                          <input type="text" class="form-control" id="hear_atlanta" placeholder="" name="hear_atlanta">
                        </div>
                 
                        <div class="form-group">
                          <label for="text" class="label-popup">Text:</label>
                          <input type="text" class="form-control" id="text" placeholder="" name="text">
                        </div>
                 
                        <div class="form-group">
                          <label for="appraisal_value" class="label-popup">What Is The Approx. Appraisal Value Of Your Property?</label>
                          <input type="text" class="form-control" id="appraisal_value" placeholder="" name="appraisal_value">
                        </div>
                 
                        <div class="form-group">
                          <label for="how_long" class="label-popup">How Long Have You Owned This Property?</label>
                          <input type="text" class="form-control" id="how_long" placeholder="" name="how_long">
                        </div>
                 
                        <div class="form-group">
                          <label for="how_much" class="label-popup">How Much Did You Purchase This Property For?</label>
                          <input type="text" class="form-control" id="how_much" placeholder="" name="how_much">
                        </div>
                 
                        <div class="form-group">
                          <label for="improvements" class="label-popup">What Type Of Improvements Have You Made If Any?</label>
                          <input type="text" class="form-control" id="improvements" placeholder="" name="improvements">
                        </div>
                 
                        <div class="form-group">
                          <label for="type_of_repairs" class="label-popup">What Type Of Repairs Are Needed If Any?</label>
                          <input type="text" class="form-control" id="type_of_repairs" placeholder="" name="type_of_repairs">
                        </div>
                 
                        <div class="form-group">
                          <label for="first_mortgage" class="label-popup">Do You Have A First Mortgage?</label>
                          <input type="text" class="form-control" id="first_mortgage" placeholder="" name="first_mortgage">
                        </div>
                 
                        <div class="form-group">
                          <label for="what_is_first_mortgage" class="label-popup">What Is The First Mortgage Payment?</label>
                          <input type="text" class="form-control" id="what_is_first_mortgage" placeholder="" name="what_is_first_mortgage">
                        </div>
                 
                        <div class="form-group">
                          <label for="taxes_included" class="label-popup">Are The Taxes Included In The House Payment? </label>
                          <input type="text" class="form-control" id="taxes_included" placeholder="" name="taxes_included">
                        </div>
                 
                        <div class="form-group">
                          <label for="payments_behind" class="label-popup">How Many Payments Are You Behind If Any? </label>
                          <input type="text" class="form-control" id="payments_behind" placeholder="" name="payments_behind">
                        </div>
                 
                        <div class="form-group">
                          <label for="reason_for_selling" class="label-popup">What Is Your Reason for Selling? </label>
                          <input type="text" class="form-control" id="reason_for_selling" placeholder="" name="reason_for_selling">
                        </div>
                 
                        <div class="form-group">
                          <label for="lowest_asking_price" class="label-popup">What Is Your Lowest Asking Price? </label>
                          <input type="text" class="form-control" id="lowest_asking_price" placeholder="" name="lowest_asking_price">
                        </div>
                 
                        <div class="form-group">
                          <label for="best_lowest_asking_price" class="label-popup">Is That Your BEST Lowest Asking Price? </label>
                          <input type="text" class="form-control" id="best_lowest_asking_price" placeholder="" name="best_lowest_asking_price">
                        </div>
                 
                        <div class="form-group">
                          <label for="bedrooms" class="label-popup">How Many Bedrooms? </label>
                          <input type="text" class="form-control" id="bedrooms" placeholder="" name="bedrooms">
                        </div>
                 
                        <div class="form-group">
                          <label for="square_footage" class="label-popup">What Is The Square Footage? </label>
                          <input type="text" class="form-control" id="square_footage" placeholder="" name="square_footage">
                        </div>
                        
                        <div class="form-group">
                          <label for="home_was_built" class="label-popup">What Is The Year The Home Was Built? </label>
                          <input type="text" class="form-control" id="home_was_built" placeholder="" name="home_was_built">
                        </div>
                 
                        <div class="form-group">
                          <label for="have_a_garage" class="label-popup">Does It Have A Garage? </label>
                          <input type="text" class="form-control" id="have_a_garage" placeholder="" name="have_a_garage">
                        </div>
                 
                        <div class="form-group">
                          <label for="comments" class="label-popup">Comments: </label>
                          <textarea class="form-control" rows="3" name="comments" id="comments">
                              
                          </textarea>
                        </div>
                        <button type="submit" class="btn btn-default submit-form1">Request More Information Now</button>
                    </form>-->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>