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
                                   <span style="font-size: 10px;" >(as soon as) </span> <span style="font-size: 10px;"> (4-6 weeks) &nbsp;&nbsp;&nbsp;</span> <span style="font-size: 10px;">(6-12 weeks)</span>
                                   <span style="font-size: 10px;">&nbsp;&nbsp;&nbsp;(more than 3)</span>
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
                                        if($click->as_soon_as == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->as_soon_as;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->_4_6_weeks == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->_4_6_weeks;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->_6_12_weeks == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->_6_12_weeks;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->more_then_3 == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->more_then_3;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->full_home == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->full_home;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->downsizing == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->downsizing;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->moving == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->moving;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->accessories == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->accessories;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->art == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->art;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->china == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->china;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->clothing == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->clothing;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->crystal == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->crystal;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->firearms == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->firearms;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->furniture == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->furniture;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->garage_sales == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->garage_sales;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->gold == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->gold;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->jewelery == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->jewelery;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->kitchen == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->kitchen;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->outdoor == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->outdoor;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->rugs == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->rugs;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->sporting == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->sporting;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->tools == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->tools;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    if($click->vehicles == 'on'){ echo "yes";}else{ echo "no";}
                                    //echo $click->vehicles;
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
        
      