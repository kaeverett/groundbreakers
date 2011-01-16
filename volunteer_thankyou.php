		<?php include('includes/inc_head.php'); ?>


	<body>
		 <?php include('includes/inc_header.php'); ?>
       <div id="wrapper" class="getinvolved">
   
      <div id="content">
      		<div id="content_left">
                <p><strong>Get Involved</strong></p>
                <ul>
                   <li><a href="getinvolved.php">&raquo; Donate</a></li>
                    <li class="active"><a href="getinvolved_volunteer.php">Volunteer</a></li>
                    <li><a href="getinvolved_wishlist.php">&raquo; Wish List</a></li>
                </ul>
                 <a href="getinvolved_donate.php"><img src="images/contribute_button.jpg" alt="dontate button" /></a>
                 
      		</div><!--end content left-->
      
            <div id="content_right">
          <h2>VOLUNTEER</h2>
                <p><strong>Your Email was sent! Thank you for your submission!</strong></p><br />
              
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
   
        <input type="radio" name="hearAbout" value="female" /> Word of Mouth <br />  
        <input type="radio" name="hearAbout" value="male" /> Special Event <br /> 
        <input type="radio" name="hearAbout" value="other" /> Internet <br />  
         <input type="radio" name="hearAbout" value="other" /> Employer <br />  
          <input type="radio" name="hearAbout" value="other" /> School <br /> 
            <input type="radio" name="hearAbout" value="other" /> Press <br />  
            <input type="radio" name="hearAbout" value="other" /> Other<br /><br />
  Comments:<br />
   <textarea onFocus="if (this.value == this.defaultValue) this.value='';" rows="4" cols="25" name="comments">Type Here!</textarea><br />
 
     
     <input type="submit" value="Send" />
     <input type="hidden" name="ToFirst" value="" />
     <input type="hidden" name="ToLast" value="" />
     <input type="hidden" name="ToEmail" value="marina5150@gmail.com" />
     <input type="hidden" name="Subject" value="Volunteer Form" />
     <input type="hidden" name="Thanks" value="http://www.thegroundbreakers.org/thankyou.html" />
    </form>
            </div> <!--end content right-->
       </div><!--end content-->
       
        <?php include('includes/inc_footer.php'); ?>
        	
	</div><!--end wrapper-->
		
	</body>

</html>