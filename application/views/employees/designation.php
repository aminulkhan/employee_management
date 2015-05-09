<div class="container">
	<div class="content">
		<?php $this->load->view('menu');?>
    	<form action='<?php echo base_url();?>index.php/employees/designation' method='POST' accept-charset='UTF-8' class="form">
        	<fieldset>
            	<h1><span></span> Designation Insertion Form</h1>
		    		<?php //echo validation_errors(); ?>
					<?php //echo form_open('user'); ?>  
	          	<tr>
		            <td>Designation Name: </td>
		            <td><input type="text" name="designation" id="designation"></td>
	          	</tr> <br><br>
	          	<tr>
	                <td>Basic Salary: </td>
		            <td><input type="text" name="basic_salary" id="basic_salary"></td>
	          	</tr> <br><br>
				<input type="submit" name="submit"  id="submit" value="Submit" class="button_submit"> 
     		</fieldset>
		</form>
    </div>
</div>
<!-- END: Page Content -->