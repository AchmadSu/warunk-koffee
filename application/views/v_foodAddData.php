<title>ADMIN - FOOD</title>
<div class="container mt-5 mb-0 p-5 rounded">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<h3 class="py-3" style="text-align: center;">Add Data Food</h3>
	<form class="signUp" action="<?php echo base_url();?>index.php/foodData/save" method="POST" enctype="multipart/form-data">
	   	<div  style="background-color: #F0F0F0;" class="container p-5 rounded">
	  	<div class="container px-5">
	  		<div class="row mb-4">
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-cutlery mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="text" name="grill_name" class="form-control" placeholder="Name" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-usd mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="number" class="form-control" name="grill_price" placeholder="Price" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-align-left mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<textarea class="form-control" name="grill_desc" placeholder="Food Description" aria-label="Default" aria-describedby="inputGroup-sizing-default"></textarea>
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-file-image-o mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="file" class="mx-2" name="grill_picture" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<hr>
			<label for="dob">Category Layout</label>
		  	<div class="input-group mb-3">
			  	<select name="grill_category" class="form-control form-select form-select-lg">
			  		<option disabled>Choose Category Here</option>
			  		<option value="list">List (Orientation must be landscape)</option>
			  		<option value="potrait">Potrait (Orientation must be potrait)</option>
				</select>
			</div>
  <!-- Submit button -->
		<button type="submit" class="btn btn-info btn-block mb-4">Add Food</button>
	</form>
  <!-- Register buttons -->
  	</div>
  </div>
</div>
</div>
</div>