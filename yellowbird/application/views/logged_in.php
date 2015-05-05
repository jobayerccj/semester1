<div class="container-fluid">
            <div class="row section1">
                
                <div class="col-lg-12 col-md-12 col-sm-12 form-part">                  
                   <?php                      
                        if($this->session->userdata('username'))
                        {
                   ?>
                    <h1 >Admin login Panel</h1>
                    
                    <p><?php if($this->session->userdata('success_msg')) echo $this->session->userdata('success_msg'); ?></p>
                   <h3>Select your task</h3>
                   <ul>
                       <li><a href="<?php echo base_url();?>index.php/admin/new_member">Add new member</a></li>
                       <li><a href="<?php echo base_url();?>index.php/admin/delete_member">Delete Member</a></li>
<!--                       <li><a href="<?php echo base_url();?>index.php/admin/edit_member">Edit member info</a></li>
                       <li><a href="<?php echo base_url();?>index.php/admin/email_list">Show email list</a></li>
                       <li><a href="<?php echo base_url();?>index.php/admin/more_info_list">Show more info request list</a></li>-->
                   </ul>
                    <?php }?>
                </div>
            </div>
</div>

<br/><br/>
        
      