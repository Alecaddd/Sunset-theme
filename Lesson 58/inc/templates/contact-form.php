<form id="sunsetContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="form-group">
		<input type="text" class="form-control" placeholder="Your Name" id="name" name="name" required="required">
	</div>

	<div class="form-group">
		<input type="email" class="form-control" placeholder="Your Email" id="email" name="email" required="required">
	</div>

	<div class="form-group">
		<textarea name="message" id="message" class="form-control" required="required" placeholder="Your Message"></textarea>
	</div>

	<button type="stubmit" class="btn btn-default">Submit</button>

</form>