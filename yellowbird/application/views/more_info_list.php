<div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 form-part">
                   
                   <?php                      
                        if($this->session->userdata('username'))
                        {
                   ?>
                   <h1 class="form_h1">Admin login Panel</h1>
                   
                   <div class="col-lg-6 col-md-6">
                       <h3>Request for more information</h3>
                       <?php if(isset($error))echo $error;?>
                       
                       <?php if(isset($more_info)){?>
                          
                       <table class="table table-bordered">  
                           <tr>
                               <th style="border:1px solid #000;">Name</th>
                               <th style="border:1px solid #000;">Email</th>
                               <th style="border:1px solid #000;">Phone</th>
                               <th style="border:1px solid #000;">Request</th>
                               
                           </tr>
                            <?php   foreach($more_info as $info){
                                echo '<tr>';
                                
                                    echo '<td style="border:1px solid #000;">';
                                    echo $info->name;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $info->email;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $info->phone;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $info->subject;
                                    echo '</td>';
                                    ?>
                                
                           <?php  } ?>
                     
                        </table>     
                         <?php } ?>
                   
                   </div>
                   
                    <?php }?>
                </div>
</div>

<br/><br/>
        
      