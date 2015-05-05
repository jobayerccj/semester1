<div class="container-fluid">
            <div class="row section1">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url();?>images/Sale-Mark2.jpg" alt="registration-left"/>
                </div>
               
            </div>
        </div>
      
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 text-justify">
                    <h1>About Us</h1>
                    <p>
                        Yellow Bird Estate Sales is owned by Michael Adamson.  Michael is a native of North East Georgia.  
                        He left the corporate world (Banking, Real Estate and Home Building) to follow his love... Estate Sales and Antiques.  
                        You will find him experienced and fully capable of handling all aspects of your estate sale needs. 
                        Michael attends sales and auctions on a regular basis to keep current on trends and values of what is selling and what is not.  Michael is a licensed Georgia Home Builder (Contractor), a member of the North Georgia Home Builders Association, a Member of the Association of Online Appraisers and a Member of the American Society of Estate Liquidators.
                    </p>
                    
                    <p>
                        Mark Adamson is a life long Atlanta native.  
                        Mark has always had a love of collecting and a love of meeting and working with new people.  
                        He is an Associate Broker with Virtural Properties.net and heads up the property listing and estate preservation services for Yellowbird.  
                        Mark's involvement in Real Estate goes back almost a quarter century in the Atlanta market.  
                        With a keen eye for what is selling, he will use his  extensive marketing tools to help you market your property to recieves offers quickly, and his negotiating skills will allow you to quickly decided if this the the right offer for you.  
                        Call me today to set up an appointment.
                    </p>
                    
                    <p>
                        Our staff is happy to answer questions give us a call at  770 402-5185 or via our contact form. 
                        Please feel free to give any of us a call.  
                        We love to meet new people and look forward to the opportunity to help you deal with your estate, liquidation, or home sale needs.  
We're looking forward to meeting you soon.
                    </p>
                </div>
                
               
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                
                <?php if(isset($members)) foreach($members as $member){ ?>
                    <div class="col-lg-offset-2 col-lg-8 text-justify">
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
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 text-center more-info">
                    <div class="more-info-btn">
                        <a href="#"><div class="click-here">Click Here</div> For More Information</a>
                    </div>
                 
                </div>
            </div>
        </div>