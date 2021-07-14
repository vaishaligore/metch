<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Mettechnik Bhosari , Mettechnik Metallurgical Testing and Heat Treatment   </title>
 <!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/style.css" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="1/ninja-slider.css" rel="stylesheet" type="text/css" />
 <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> 


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="css/full-slider.css" rel="stylesheet">
 <link href="1/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="1/ninja-slider.js" type="text/javascript"></script>
    <script src="js/scriptjs.js" type="text/ecmascript"></script>
   
   
   <!--menu-->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>





 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">

<!--slider-->
<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
   <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style> 
 <script type="text/javascript">
		function validate_form()
		{
			with (document.contact_us)
		   {
			 if (full_name.value=="")
			 {
				
				document.getElementById("error").style.background="#C71F20";
				document.getElementById("error").innerHTML="Oy! You forgot to enter name";
				full_name.focus(); 
				return false;
			 }
			 else if (email.value=="")
			 {
				document.getElementById("error").style.background="#C71F20";
				document.getElementById("error").innerHTML="Oy! You forgot to enter email";
				email.focus();
				return false; 
				
			 }	
			 else if (mobile.value=="")
			 {
				document.getElementById("error").style.background="#C71F20";
				document.getElementById("error").innerHTML="Oy! You forgot to enter mobile";
				mobile.focus();
				return false;
				
			 }
			 else if (subject.value=="")
			 {
				
				document.getElementById("error").style.background="#C71F20";
				document.getElementById("error").innerHTML="Oy! You forgot to enter subject";
				subject.focus();
				return false;
				
			 }
			 else if (message.value=="")
			 {
				document.getElementById("error").style.background="#C71F20";
				document.getElementById("error").innerHTML="Oy! You forgot to enter message";
				message.focus();
				return false; 
			 }
			 else
			 {
				return true
			 }
		 }
		
				
			}
			
			</script>   
    
    
</head>

<body>
<div class="contentwrap1">
           
            <?php include 'include/header.php';?>
            
</div>

<div class="contentwrap2">
            <div class="container">
            <?php include 'include/menu.php';?>
           </div>
</div>

<!-- Slider-->



<div class="contentwrap6">
	<div class="container">
    <div class="row">
  			  <div class="col-sm-6">
               <h3 style="padding:10px;">Address Details</h3>
              <h4>Plant 1::</h4>
                    <p>4093 , Sanskruti Colony , Sr. No. 215/148 , Ganga Nagar, Phursungi, Pune 412 308. </p>
                    <p><b>Phone </b>:: 7276327303 </p>
                    <p> Email ID</b> :: Visionenterprise123@gmail.com</p>
                    <h4>Plant 2::</h4>
                    <p>113/9 , S- Block , Near Tanna Udhog , Telco Road MIDC, Bhosari , Pune 411 026 </p>
                      <p><b>Phone </b>:: 9405893391 </p> 
                      <p>Email ID</b> ::mettechnique@gmail.com | info@mettechnik.in</p>
             </div>
             <div class="col-sm-6">
             <h3 style="padding:10px;">Contact Form</h3>
             <div class="alert-box success">
                        <?php 
                            if(isset($_GET["message"]))
                            {
                                echo "<h5>Thanks for your Enquiry.We will Get Back To You Soon.</h5>";	
                            }
                            ?>
                      </div>
                      <form action="process_contact.php" name="contact_us" method="post" onSubmit="return validate_form()">
                                     
                                        <div class="large-7 column">
                                          <label>Name:</label><br>
                                          <input type="text" required name="full_name" id="full_name">
                                        </div>
                                     
                                     
                                        <div class="large-7 column">
                                          <label>Email:</label><br>
                                          <input type="text" required name="email" id="email">
                                        </div>
                                     
                                      
                                        <div class="large-7 column">
                                          <label> Mobile No :</label><br>
                                          <input type="text" required name="mobile" id="mobile">
                                        </div>
                                     
                                      
                                        <div class="large-11 column">
                                          <label> Subject:</label><br>
                                          <input type="text" required name="subject" id="subject">
                                        </div>
                                     
                                      
                                        <div class="large-11 column">
                                          <label>Message:</label><br>
                                          <textarea name="message" required id="message"></textarea>
                                        </div>
                                      
                                      
                                        <div class="large-11 column">
                                          <input type="submit" value="Send" required class="button" id="submit" style="background-color:#57669F">
                                        </div>
                                    
                                      
                                        <div class="large-11 column"><small><em>(All fields are required).</em></small></div>
                                     
                                    </form>
                      
                      
                      
             </div>
              
              
	</div>
    
    
    <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15135.41090544969!2d73.958739!3d18.490329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc96d98b50211de4c!2sVision+Enterprise!5e0!3m2!1sen!2sin!4v1540981751088" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
    
    </div>
</div>





<div class="contentwrap5">
       
        <?php include 'include/footer.php';?>
       
</div>
</body>
</html>

