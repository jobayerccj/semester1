<div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 form-part">
                   
                   <?php                      
                        if($this->session->userdata('username'))
                        {
                   ?>
                   <h1 class="form_h1">Admin login Panel</h1>
                   
                   <div class="col-lg-6 col-md-6">
                       <h3>Email Subscription list</h3>
                       <?php if(isset($error))echo $error;?>
                       
                       <?php if(isset($email_list)){
                           
                        // Create a stream opening it with read / write mode
                         $stream = fopen('file.csv', 'w+');                                                       
                        ?>
                          
                       
                       
                       <table class="table table-bordered">  
                           <tr>
                               <th style="border:1px solid #000;">Email</th>
                               <th style="border:1px solid #000;">Name</th>
                            
                           </tr>
                            <?php   foreach($email_list as $email){
                                        
                                        $email2 = get_object_vars($email);
                                        // Iterate over the data, writting each line to the text stream
                                        fputcsv($stream, $email2);
                                        
                                echo '<tr>';
                                
                                    echo '<td style="border:1px solid #000;">';
                                    echo $email->email;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $email->first_name." ".$email->last_name;
                                    echo '</td>';
                                echo '</tr>';    
                                    ?>
                                
                           <?php  } ?>
                            <tr>
                                <td colspan="2"  style="border:1px solid #000;text-align: center;font-weight: bold;"><a href="<?php echo base_url();?>file.csv">Download list</th>
                            
                            </tr>
                        </table>   
                       
                       <?php
                      
                         // Rewind the stream
                         rewind($stream);

                         // You can now echo it's content
                         //echo stream_get_contents($stream);

                         // Close the stream 
                         fclose($stream);
                         
                         
                          } ?>
                   
                   </div>
                   
                    <?php }?>
                </div>
</div>

<br/><br/>
        
      