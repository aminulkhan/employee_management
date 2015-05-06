<div class="container">
<div class="content">
				      <?php $this->load->view('menu');?>
    <form action='<?php echo base_url();?>index.php/user/employees' method='POST' accept-charset='UTF-8' class="form">
        <fieldset>
            	<h1><span></span> Employee Insertion Form</h1>
    		  
	          <tr>
	              <td>Employee ID: </td>
	              <td><input type="text" name="emp_id" id="emp_id"></td>
	          </tr> <br><br>
	          <tr>
	              <td>Employee Name: </td>
	              <td><input type="text" name="emp_name" id="emp_name"></td>
	          </tr> <br><br>
	          <tr>
	              <td>Designation: </td>
	              <td>
	              	<select name="designation_id" id="designation_id">
	              		<option value="">Select Designation</option>
	              	<?php 
	              		foreach ($all_designation as $key => $value) {
	              			echo "<option value=".$value->designation_id.">".$value->designation."</option>";
	              		}
	              	?>
	              </select>
	          </td>
	          </tr> <br><br>
	          <tr>
	              <td>Department: </td>
	              <td>
	              	<select name="department_id" id="department_id">
	              		<option value="">Select Department</option>
	              	<?php 
	              		foreach ($all_department as $key => $value) {
	              			echo "<option value=".$value->department_id.">".$value->department_name."</option>";
	              		}
	              	?>
	              </select>
	          </td>
	          </tr> <br><br>
	          <tr>
	            <td>Gender: </td>
	              	<select name="mygender" id="selectgender">
						<option value="">Select Gender</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
						<option value="0">Others</option>
					</select><br><br>
	          </tr>
	          <tr>
	              <td>Employee Grade: </td>
	              <td><input type="text" name="emp_grade" id="emp_grade"></td>
	          </tr> <br><br>
	          <tr>
	              <td>Employee Date of Birth: </td>
	              <td><input type="text" name="emp_dob" id="emp_dob" placeholder="YYYY-MM-DD"></td>
	          </tr> <br><br>
	          <tr>
	              <td>Employee Joining Date: </td>
	              <td><input type="text" name="emp_joining_date" id="emp_joining_date" placeholder="YYYY-MM-DD"></td>
	          </tr> <br><br>
	          <tr>
	              <td>Employee Cell No: </td>
	              <td><input type="text" name="emp_cell_number" id="emp_cell_number"></td>
	          </tr> <br><br>
	          <tr>
	              <td>Employee Email: </td>
	              <td><input type="text" name="emp_email" id="emp_email"></td>
	          </tr> <br><br>

	        <input type="submit" name="submit"  id="submit" value="Submit" class="button_submit"> 
     	</fieldset>
			
    </form>
    		</div>
		</div>
			<!-- END: Page Content -->
		<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
		<script type="text/javascript">
			$(function() {
    				$( "#emp_dob" ).datepicker({
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
    				$( "#emp_joining_date" ).datepicker({
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