<div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 form-part">
                   
                   <?php                      
                        if($this->session->userdata('username'))
                        {
                   ?>
                   <h1 class="form_h1">Admin login Panel</h1>
                   
                   <div class="col-lg-6 col-md-6">
                       <h3>Delete member</h3>
                       <?php if(isset($error))echo $error;?>
                       
                       <?php if(isset($members)){?>
                          
                       <table class="table table-bordered">  
                           <tr>
                               <th style="border:1px solid #000;">Name</th>
                               <th style="border:1px solid #000;">Email</th>
                               <th style="border:1px solid #000;">Action</th>
                           </tr>
                            <?php   foreach($members as $member){
                                echo '<tr>';
                                    echo '<td style="border:1px solid #000;">';
                                    echo $member->name;
                                    echo '</td>';
                                    
                                    echo '<td style="border:1px solid #000;">';
                                    echo $member->email;
                                    echo '</td>';
                                    ?>
                                <td style="border:1px solid #000;">
                                    <form action="<?php echo base_url();?>index.php/admin/delete_member2" method="post" />
                                         <input type="hidden" name="id" value="<?php echo $member->id;?>"/>
                                         <button type="submit" class="btn btn-default submit-form1">Delete</button>
                                     </form>
                                </td>
                           <?php  } ?>
                     
                        </table>     
                         <?php } ?>
                   
                   </div>
                   
                    <?php }?>
                </div>
</div>

<br/><br/>
        
      