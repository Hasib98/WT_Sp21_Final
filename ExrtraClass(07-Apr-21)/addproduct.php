<?php include 'admin_header.php';?>
<!--addproduct starts -->
<div class="center">
	<form class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4> 
			<select class="form-control">
				<option>Choose</option>
			</select>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Quantity:</h4> 
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Add Product" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
