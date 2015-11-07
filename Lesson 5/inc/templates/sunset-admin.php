<h1>Sunset Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'sunset-settings-group' ); ?>
	<?php do_settings_sections( 'alecaddd_sunset' ); ?>
	<?php submit_button(); ?>
</form>