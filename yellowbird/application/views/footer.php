<footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#" onclick="window.print();return false;"><i class="fa fa-print"></i> Print</a> | <a href="#">Sitemap</a>
                        <br/>
                        <p>&COPY; Yellow Bird Estate Sales Copyrighted 2015</p>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h2 class="text-center">Call Today (770) 224-7101</h2>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 text-right">
                         <?php 
                            
                            if($this->session->userdata('username'))
                            {
                          ?>
                        <a href="<?php echo base_url();?>index.php/admin/logout">Logout</a>
                        <?php 
                            } else{
                        ?>
                        <a href="<?php echo base_url();?>index.php/admin">Login</a>
                            <?php }?>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>