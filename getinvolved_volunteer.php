<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		
		<title>Groundbreakers</title>
   

 <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="gb_styles.css" type="text/css" media="screen" />
 
<script type="text/javascript" src="js/bw-menu.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
	
	
	// function for dropdown paint effect
		

			
			
			$(function()
				{	
					$("#header_left").corner("40px");
					
					
					
					
				}); 

</script>

	</head>

	<body>
		
        <div id="wrapper" class="getinvolved">
       		
        	  
       <?php include('includes/inc_header.php'); ?>
   
      <div id="content">
      		<div id="content_left">
                <p><strong>Get Involved</strong></p>
                <ul>
                   <li><a href="getinvolved_donate.php">&raquo; Contribute</a></li>
                   <li class="active"><a href="getinvolved_volunteer.php">Volunteer</a></li>
                   <li class="active"><a href="getinvolved_faq.php">Frequently Asked Questions</a></li>
                </ul>
      		</div><!--end content left-->
      
            <div id="content_right">
          <h2>VOLUNTEER</h2>
		  <h4>Volunteer</h4>
                <p>Our volunteers are one of the greatest assets we have.  If you would like to be a part of the solution to homelessness, we'd love to hear from you.</p><br />
              
<form action="http://www.newmanic.com/formhandler3.asp" method="post">
    First Name:<br />
    <input type="text" name="FirstName" /><br />
 Last Name:<br />
    <input type="text" name="LastName" /><br />
  Email:<br />
    <input type="text" name="FromEmail" /><br />
  Phone:<br />
  <input type="text" name="FromEmail" /><br /><br />
 
 
 How did you hear about us:<br />
   
        <input type="radio" name="hearAbout" value="wordofmouth" /> Word of Mouth <br />  
        <input type="radio" name="hearAbout" value="spectialevent" /> Special Event <br /> 
        <input type="radio" name="hearAbout" value="internet" /> Internet <br />  
         <input type="radio" name="hearAbout" value="employer" /> Employer <br />  
          <input type="radio" name="hearAbout" value="school" /> School <br /> 
            <input type="radio" name="hearAbout" value="press" /> Press <br />  
            <input type="radio" name="hearAbout" value="other" /> Other<br /><br />
  Comments:<br />
   <textarea onfocus="if (this.value == this.defaultValue) this.value='';" rows="4" cols="25" name="comments">Type Here!</textarea><br />
 
     
     <input type="submit" value="Send" />
     <input type="hidden" name="ToFirst" value="" />
     <input type="hidden" name="ToLast" value="" />
     <input type="hidden" name="ToEmail" value="info@thegroundbreakers.org" />
     <input type="hidden" name="Subject" value="Volunteer Form" />
     <input type="hidden" name="Thanks" value="http://www.thegroundbreakers.org/volunteer_thankyou.php" />
    </form>
    
            <p>To volunteer or receive more information, please contact us at <strong>877-771-GIVE</strong> or email <a href="mailto:give@thegroundbreakers.org" target="_blank">give@thegroundbreakers.org</a></p>

            </div> <!--end content right-->
       </div><!--end content-->
       
        <?php include('includes/inc_footer.php'); ?>
        	
      
	</div><!--end wrapper-->
		
	</body>

</html>