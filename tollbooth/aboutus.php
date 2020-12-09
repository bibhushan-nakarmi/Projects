<?php include "header.php"; ?> 
    <?php if(isset($_SESSION['username']) || isset($_SESSION['admin_username'])){ ?>
<div class="banner-wrapper about-banner-wrapper">
            <div class="banner-content clearfix">
                <div class="inflation-bx about-bx">
                    <h2 class="slider-title ratio title">About Us</h2>
                    <p class="slider-text ratio-desc desc">
                        <p>Manish Shah is the founder of Tollbooth Investing Strategy and developed custom research for hedge funds, life insurance companies and pension funds in the U.S., Europe, Japan and Singapore since 1993.</p>
                        <p>Manish co-founded 123jump.com, Inc in 1999, the publisher of TickerFunds.com, AdvisorSelect.com, 123jump.com, Ticker, a financial search engine, and Readara.com.</p>
                        <p> Manish has interviewed 850 investment managers since 2004.</p>
                        <p>Manish also designed Ticker Planner, the first-ever day planner for investors and advisors.</p>
                        <p>Manish worked as a management consultant with Coopers & Lybrand, Ford Motor Company and as a researcher with Ben Franklin Research Center affiliated with Lehigh University between 1987 and 1992.</p>
                        <p>Manish received his MBA from INSEAD, France; MS in Manufacturing System Engineering from Lehigh University; MS in Mechanical Engineering from the University of Texas at Arlington and B.E. in Mechanical Engineering from the University of Bombay.</p>
                        <p>Manish holds the CPIM from APICS The Association for Operations Management, Chicago, Illinois and passed CPA exams from California State.</p>
                        <p> Manish speaks French, German, Gujarati and Hindi.</p>
                    </p>
                </div>
                <img src="img/about-photo.jpg" alt="Manish Shah-photo" class="side-pic">
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