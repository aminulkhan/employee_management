<!DOCTYPE HTML>
<html>
<style type="text/css">
#header_container { 
					background:#eee; 
					border:1px solid #666; 
					height:90px; 
					left:0.5px;
					right: 0.5px; 
					position:fixed; 
					width:99.5%; 
					top:0; 
				}
#header{ 
	line-height:60px; 
	margin:0 auto; 
	width:500px; 
	text-align:center;
	position: fixed;
	 }

#logo{
	border: 2px solid;
    border-radius: 5px;
    position: left;
    left: 0;
    max-width: 50%;
    height: 85px;
}

.container { 
	margin:0 auto;
	 overflow:auto; 
	 padding:92px 0; 
	 width:940px; 
	 height: 100%;
	 top:50px;

	}
.content{
	/*background-color: #80CC80;  */
	background-image: url("White_Vista_by_nerval.jpg");
}

.form{
	position: center;
	background-color: #80CC80;
	text-align: center;
	max-width: 50%;
	border: 2px solid;
	margin: 0 auto;
}

#footer_container{
	background:#eee; 
	border:2px solid #666; 
	bottom:0; 
	height:40px; 
	left:1px; 
	right: 1px;
	position:fixed; 
	width:99.5%;
}
#footer { 
	line-height:15px; 
	margin:0 auto; 
	width:940px; 
	text-align:center; 
}


</style>
	<head>
		<title>My Project</title>

	<!-- Header -->
								
	
	</head>
	<body>
		<!-- BEGIN: Header -->
			<div id="header_container">
			    <div id="header">
			        <!-- LOGO  -->
			        <div id="logo">
			        	<p>Logo Here</p>
			        </div>
	
			    </div>
			</div>
		<!-- END: Header -->
		<div>

		</div>
			<!-- BEGIN: Page Content -->
			<div class="container">
				<div class="content">
				      
    	<form action='http://localhost/codeigniter/index.php/user/registration' method='POST' accept-charset='UTF-8' class="form">
          <fieldset>
            	<h1><span></span> Registration Form</h1>
    		  
	          <tr>
	              <td>Name: </td>
	              <td><input type="text" name="user_name" id="user_name"></td>
	          </tr> <br><br>
	          
	          <tr>
	              <td>UserID: </td>
	              <td><input type="text" name="user_id" id="user_id"> </td>
	          </tr> <br><br>

	          <tr>
	              <td>Password: </td>
	              <td><input type="password" name="user_password" id="user_password"> </td>
	          </tr> <br><br>
	           
	          <tr>
	              <td>Email Addess: </td>
	              <input type="text" name="user_email" id="user_email"></span><br><br>

	          </tr><br><br>
	   

     <input type="submit" name="user_signup"  id="user_signup" value="Sign Up" class="button_submit"> 	</fieldset>
			
      </form>
    		</div>
		</div>
			<!-- END: Page Content -->
			
			
	</body>
	<!--  END Body  -->
	<!-- BEGIN: Footer -->
			<div id="footer_container">
			    <div id="footer">
			       <p>&copy; 2015 Aminul Khan<p>
			    </div>
			</div>
<!-- END: Footer -->
	
</html>