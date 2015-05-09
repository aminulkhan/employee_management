<div class="container">
	<div class="content">
		<?php $this->load->view('menu');?>
    	<form action='<?php echo base_url();?>index.php/employees/department' method='POST' accept-charset='UTF-8' class="form">
        	<fieldset>
            	<h1><span></span> Department Insertion Form</h1>
    		<?php //echo validation_errors(); ?>
			<?php //echo form_open('user'); ?>  
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