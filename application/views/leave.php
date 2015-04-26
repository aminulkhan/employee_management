<!DOCTYPE HTML>
<html>
<style type="text/css">



</style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
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
				      
    	<form action='http://localhost/codeigniter/index.php/user/leave' method='POST' accept-charset='UTF-8' class="form">
          <fieldset>
            	<h1><span></span> Leave Form</h1>
    		  
	          <tr>
	              <td>Employee ID: </td>
	              <td>
	              	<select name="emp_id" id="emp_id">
	              		<option value="">Select Employee</option>
	              	<?php 
	              		foreach ($all_employees as $key => $value) {
	              			echo "<option value=".$value->emp_id.">".$value->emp_id."</option>";
	              		}
	              	?>
	              </select>
	              <script type="text/javascript">
					$("#emp_id").change(function(){
						var url = "<?php echo base_url(); ?>" + "index.php/user/get_employees/" + $(this).val();
						$.getJSON( url, function( data ) {
						  $("#emp_name").val((data.emp_name));
						  $("#designation").val((data.designation));
						  $("#emp_department").val((data.department_name));
						});
    					
					});
	              </script>
	              </td>
	          </tr> <br><br>
	          <tr>
	              <td>Employee Name: </td>
	              <td><input type="text" name="emp_name" id="emp_name"></td>
	          </tr> <br><br>
	          
	          <tr>
	              <td>Employee Designation: </td>
	              <td><input type="text" name="designation" id="designation"> </td>
	          </tr> <br><br>

	          <tr>
	              <td>Employee Department: </td>
	              <td><input type="text" name="emp_department" id="emp_department"> </td>
	          </tr> <br><br>
	           
	          <tr>
	            <td>Leave Type: </td>
	              	<select name="mydropdown">
						<option value="Medical Leave">Medical Leave</option>
						<option value="Annual Leave">Annual Leave</option>
						<option value="Earned Leave">Earned Leave</option>
						<option value="Without Pay Leave">Without Pay Leave</option>
						<option value="Maternity Leave">Maternity Leave</option>
					</select><br><br>
	          </tr>
	          <tr>
	              <td>Leave From Date: </td>
	              <td><input type="text" name="emp_leave_from_date" id="emp_leave_from_date" placeholder="YYYY-MM-DD"> </td>
	          </tr> <br><br>
	          <tr>
	              <td>Leave To Date: </td>
	              <td><input type="text" name="emp_leave_to_date" id="emp_leave_to_date" placeholder="YYYY-MM-DD"> </td>
	          </tr> <br><br>
	          <tr>
	              <td>Leave Cause: </td>
	              <td><input type="text" name="emp_leave_cause" id="emp_leave_cause"> </td>
	          </tr> <br><br>
	          <tr>
	              <td>Leave Approval Person: </td>
	              <td><input type="text" name="emp_leave_approval_person" id="emp_leave_approval_person"> </td>
	          </tr> <br><br>

	   

     <input type="submit" name="submit"  id="submit" value="Submit" class="button_submit"> 	</fieldset>
			
      </form>
    		</div>
		</div>
		<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
		<script type="text/javascript">
			$(function() {
    				$( "#emp_leave_from_date" ).datepicker({
    					//alert(change)
    					dateFormat: 'yy-mm-dd',
    					defaultDate: new Date(2015, 02 - 1, 14),
    					changeMonth: true,
    					changeYear: true,
    					yearRange: '1940:2020',
    					minDate: new Date(1940, 01 - 1, 01),
    					maxDate: '+5Y',
    					onClose: function(selectedDate) {
    						console.log("here is fn...");
    					}
    				});
    				$( "#emp_leave_to_date" ).datepicker({
    					//alert(change)
    					dateFormat: 'yy-mm-dd',
    					defaultDate: new Date(2015, 02 - 1, 14),
    					changeMonth: true,
    					changeYear: true,
    					yearRange: '1940:2020',
    					minDate: new Date(1940, 01 - 1, 01),
    					maxDate: '+5Y',
    					onClose: function(selectedDate) {
    						console.log("here is fn...");
    					}
    				});
				});
		</script>
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