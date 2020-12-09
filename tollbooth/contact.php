<?php include_once "header.php"; ?> 
    <?php if(isset($_SESSION['username']) || isset($_SESSION['admin_username'])){ ?>
        <div class="banner-wrapper disclosure-wrapper">
            <div class="banner-content disclosure-content contact-content clearfix">
                <div class="inflation-bx disclosure-bx">
                    <h2 class="slider-title ratio title">Contact Us</h2>
                    <div class="address-side">
                        <p>235 Lincoln Road, </p>
                        <p>Miami Beach,  </p>
                        <p>Florida 33139 </p>
                        <p>U.S.A.  </p>
                        <p><span>Tel: 1 305 767 2071</span></p>
                    </div>
                    <div class="contact-detail">
                        <div class="founder-bx">
                            <p class="founder-title">Manish Shah </p>
                            <p>Founder and CIO  </p>
                            <p><span>manish@tollboothstrategy.com</span></p>
                        </div>
                        <div class="direct-bx">
                            <p>Research Director </p>
                            <p class="founder-title">Thomas Buckingham</p>
                        </div>
                        <div class="global-bx">
                            <p class="title-global">Global Strategic Partnerships </p>
                            <p class="founder-title">David Rickham  </p>
                            <p class="founder-title">Barry Randall  </p>
                            <p class="founder-title">Boris Petrov </p>
                            <p class="link-strategy">Partner@tollboothstrategy.com</p>
                        </div>
                    </div>
                    <div class="manage-detail">
                        <div class="data-bx">
                            <p>Database and Site Management</p>
                            <p class="founder-title">Huy Phan </p>
                        </div>
                        <div class="analyst-bx">
                            <p><span>Lead Analysts</span></p>
                            <p class="founder-title">Nichole Nguyen</p>
                            <p class="founder-title">Sarla Buch</p>
                        </div>
                    </div>
                </div>
            </div>
            
           <?php } else{ ?>
    		<div class="banner-wrapper redirect_login_wrap">
	        <div class="banner-content redirect_login_content">
	            <h1>You are not authorized to access site. <br/>Please SignUp and request access.</h1>
	            <a href="login.php" class="login redirect_login">Login</a>
	        </div>
	    </div>
	    <?php } ?>
            
        </div>
<?php include "footer.php"; ?>  
