<div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 form-part">
                   
                   <?php                      
                        if($this->session->userdata('username'))
                        {
                   ?>
                   <h1 class="form_h1">Admin login Panel</h1>
                   
                   <div class="col-lg-12 col-md-12">
                       <h3>Request for more information</h3>
                       <?php if(isset($error))echo $error;?>
                       
                       <?php if(isset($click_here)){?>
                          
                       <table class="table table-bordered">  
                           <tr>
                               <th style="border:1px solid #000;">Name</th>
                               <th style="border:1px solid #000;">Email</th>
                               <th style="border:1px solid #000;">Phone</th>
                               <th style="border:1px solid #000;">Address</th>
                               <th style="border:1px solid #000;">City</th>
                               <th style="border:1px solid #000;">ZIP</th>
                               <th style="border:1px solid #000;" colspan="4">
                                   Time Frame<br/>
                                   <span style="font-size: 10px;" >as soon as </span> <span style="font-size: 10px;"> 4-6 weeks &nbsp;&nbsp;&nbsp;</span> <span style="font-size: 10px;">6-12 weeks</span>
                                   <span style="font-size: 10px;">&nbsp;&nbsp;&nbsp;more than 3</span>
                               </th>
                               <th style="border:1px solid #000;" colspan="3">How much to sell<br/></th>
                               <th style="border:1px solid #000;" colspan="16">What to sell <br/></th>
                               
                               <th style="border:1px solid #000;">Have a real estate agent?</th>
                               <th style="border:1px solid #000;">Need recommendation</th>
                               
                           </tr>
                            <?php   foreach($click_here as $click){
                                echo '<tr>';
                                
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->name;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->email;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->phone;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->address;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->city;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->zip;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->as_soon_as;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->_4_6_weeks;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->_6_12_weeks;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->more_then_3;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->full_home;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->downsizing;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->moving;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->accessories;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->art;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->china;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->clothing;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->crystal;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->firearms;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->furniture;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->garage_sales;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->gold;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->jewelery;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->kitchen;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->outdoor;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->rugs;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->sporting;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->tools;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->vehicles;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->real_estate_agent;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $click->recommendation;
                                    echo '</td>';
                                    
                                echo '</tr>';
                                    ?>
                                
                           <?php  } ?>
                     
                        </table>     
                         <?php } ?>
                   
                   </div>
                   
                    <?php }?>
                </div>
</div>

<br/><br/>
        
      