		<?php include('includes/inc_head.php'); ?>

	<body>
		

     <div id="wrapper" class="contact">
       		
        	  
       <?php include('includes/inc_header.php'); ?>     
   
    <div id="content">
      	 <div id="content_left">
         <p><strong>Sign Up</strong></p>
<!-- <p><strong>Newsletter</strong></p>-->
 <a href="getinvolved_donate.php"><img src="images/contribute_button.jpg" alt="dontate button" /></a>
 </div><!--end content left-->
     
         <div id="content_right">
         <h2>NEWSLETTER</h2>
			<form action="http://www.newmanic.com/formhandler3.asp" method="post">
    First Name:<br />
    <input type="text" name="FirstName" /><br />
 Last Name:<br />
    <input type="text" name="LastName" /><br />
  Email:<br />
    <input type="text" name="FromEmail" /><br />
  
  Comments:<br />
   <textarea onFocus="if (this.value == this.defaultValue) this.value='';" rows="4" cols="25" name="comments">Type Here!</textarea><br />
 
     
     <input type="submit" value="Send" />
     <input type="hidden" name="ToFirst" value="" />
     <input type="hidden" name="ToLast" value="" />
     <input type="hidden" name="ToEmail" value="info@thegroundbreakers.org" />
     <input type="hidden" name="Subject" value="Volunteer Form" />
     <input type="hidden" name="Thanks" value="http://www.thegroundbreakers.org/signup_thankyou.php" />
    </form>
    
       	</div> <!--end content right-->
       
  </div><!--end content-->
            
      <?php include('includes/inc_footer.php'); ?>
        	
      
 </div><!--end wrapper-->
		
</body>

</html>