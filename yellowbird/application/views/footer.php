<footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="#" onclick="window.print();return false;"><i class="fa fa-print"></i> Print</a> | <a href="#">Sitemap</a>
                        <br/>
                        <p>&COPY; Yellow Bird Estate Sales Copyrighted 2015</p>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 text-right">
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