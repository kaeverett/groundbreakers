<!DOCTYPE php PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xphp1/DTD/xphp1-transitional.dtd">

<php xmlns="http://www.w3.org/1999/xphp" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/php;charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<title>Groundbreakers</title>
 <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="gb_styles.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/bw-menu.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script type="text/javascript" src="build/dist/jquery.jfeed.pack.js"></script>
<script language="javascript" src="js/jquery.cycle.all-2.8.6.js" type="text/javascript"></script>

<script type="text/javascript">

			  $(function() {
            // create the image rotator
            setInterval("rotateImages()", 5000);
        });

        function rotateImages() {
            var oCurPhoto = $('#photoShow div.current');
            var oNxtPhoto = oCurPhoto.next();
            if (oNxtPhoto.length == 0)
                oNxtPhoto = $('#photoShow div:first');

            oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
                function() {
                    oCurPhoto.removeClass('previous');
                });
        }
		
		
			$(function()
				{	
					$("#header_left").corner("40px");
					$("#right_inner").corner("40px");
					
					
					
				}); 
				
				
 $(function() {
        $('#slideshow').before('<div id="slideshow_nav">').cycle({
            fx:     'fade',
            speed:  1000,
            timeout: 8000,
            pager:  null,
            before: function() { if (window.console) console.log(this.src); }
        });
    });


</script>       

	</head>

	<body>
	<div id="wrapper">
       		
        	  
      <div id="header">
                
               <div id="header_left"><a href="index.php"><img src="images/GB_final_logo.gif" alt="" /></a></div>
                
         		 <div id="header_right"> 
                    
            
            
                   <div id="menuTopFront">
                       <ul id="menuOne" class="menuHoriz">
                                <li><a href="index.php"><strong>Home</strong></a></li>
                                <li><a href="about_gb.php" onMouseOver="setMenu('menuSubOne')" onMouseOut="clearMenu('menuSubOne')"><strong>About Us</strong></a></li>
                                <li><a href="farm.php" onMouseOver="setMenu('menuSubTwo')" onMouseOut="clearMenu('menuSubTwo')"><strong>The Farm</strong></a></li>
                                <li><a href="getinvolved_donate.php" onMouseOver="setMenu('menuSubThree')" onMouseOut="clearMenu('menuSubThree')"><strong>Get Involved</strong></a></li>
                                <li><a href="http://www.facebook.com/thegroundbreakers" target="_blank"><strong>Follow Us</strong></a></li>
                                <li><a href="contact.php"><strong>Contact</strong></a></li>
                            </ul>
                            <ul id="menuSubOne" class="menuVert" onMouseOver="setMenu('menuSubOne')" onMouseOut="clearMenu('menuSubOne')">
                                <li><a href="about_gb.php">Mission/Vision</a></li>
                                <li><a href="about_leadership.php">Leadership Bios</a></li>
                                <li><a href="about_partners.php">Partners &amp; Supporters</a></li>
                            </ul>
                             <ul id="menuSubTwo" class="menuVert" onMouseOver="setMenu('menuSubTwo')" onMouseOut="clearMenu('menuSubTwo')">
                                 <li><a href="farm.php">About the Farm</a></li>
                                 <li><a href="farm_directions.php">Directions</a></li>
                            </ul>
                            <ul id="menuSubThree" class="menuVert" onMouseOver="setMenu('menuSubThree')" onMouseOut="clearMenu('menuSubThree')">         
                                 <li><a href="getinvolved_donate.php">Contribute</a></li>
                                 <li><a href="getinvolved_volunteer.php">Volunteer</a></li>
                            </ul>
                   </div><!--end menuTop-->
                   
                 </div><!--end header right-->
	 		 </div><!--end header-->
                
            
              <div id="contentFront">
      	 <div id="slideshow">
                <img src="images/slide1a.jpg"/>
                <img src="images/slide2a.jpg" style="display:none"/>
                <img src="images/slide3a.jpg" style="display:none"/>
                <img src="images/slide4a.jpg" style="display:none"/>
                <img src="images/slide5a.jpg" style="display:none"/>
                <img src="images/slide6a.jpg" style="display:none"/>
                <img src="images/slide7a.jpg" style="display:none"/>
         </div>
                
              
              <div id="extra_info">
                    <div id="left" class="column">
                      <h4>What We Do</h4>					
                        <p>Groundbreakers empowers disadvantaged men and women through vocational field
                        training in sustainable organic food production. We believe in social justice and food security, where households have no problems or anxiety about consistently accessing adequate food. Our vision to transform lives and unite community for
                        a stronger and healthier economy begins with an invitation to the homeless to
                        reclaim independence, self-worth, and self-respect. </p>
                        <span class="detail"><a href="aboutus.php">[Read more about us]</a></span> 
                    </div><!--end left column-->
    				<div id="centar_right">
                    
                    <div id="centar" class="column">
                      <h4>Partners &amp; Supporters</h4>
                         <ul >
                            <li><a href="/aboutus_partners.php#herbco"><img src="images/herbco_logo.jpg" width="100" /></a></li>
                            <li><a href="/aboutus_partners.php#fullcircle"><img src="images/fullcircle_logo.jpg" width="100"  /></a></li>
                            <li><a href="/aboutus_partners.php#gd"><img src="images/gd_logo.jpg" width="100" /></a></li>
                            <li><a href="/aboutus_partners.php#tray"><img src="images/tray_logo.jpg" width="100"  /></a></li>
                             
                          </ul>
                            <span class="detail"><a href="about_partners.php">[View all partners &amp; supporters]</a></span> 
                    
                        </div> <!--end centar column-->   
                        
                     <div id="right" class="column">
                     	<div id="right_inner">
                          <p><!--<img src="images/bg_right_top.png" />-->
                          If you would like to contribute to the Groundbreakers cause, please 
                          visit our <a href="getinvolved_donate.php">contribute page</a>.</p>
                          <p>If you are interested in helping us in the fields, find out how to become a <a href="getinvolved_volunteer.php">volunteer</a>.</p>
                          <p>Feel free to contact us with any general questions and comments 
                            by sending an email to <a href="mailto:info@thegroundbreakers.org" target="_blank">info@thegroundbreakers.org</a></p>
                          <p>For news and information about us and our events visit us on <a href="http://www.facebook.com/thegroundbreakers"><img src="images/facebook.png" alt="facebook button" /></a>
<!--						  <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="thegroundbreakers" width="250" font="verdana"></fb:like>	
--></p>
                        </div><!--end right_inner-->
                     </div><!--end right column-->
                </div><!--end centar right-->
                
              </div> <!--end extra info-->  
        	
       	</div><!--end content-->
             
             
             
             <?php include('includes/inc_footer.php'); ?>
			
            
		</div><!--end wrapper-->
		
	</body>

</php>
