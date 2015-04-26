<!DOCTYPE HTML>
<html>
	<head>
		<title>My Project</title>

	<!-- Header -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>	
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
				      
    <form action='http://localhost/codeigniter/index.php/user/department' method='POST' accept-charset='UTF-8' class="form">
        <fieldset>
            	<h1><span></span> Department Insertion Form</h1>
    		  
	          <tr>
	              <td>Department Name: </td>
	              <td><input type="text" name="department_name" id="department_name"></td>
	          </tr> <br><br>

	        <input type="submit" name="submit"  id="submit" value="Submit" class="button_submit"> 
     	</fieldset>
			
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