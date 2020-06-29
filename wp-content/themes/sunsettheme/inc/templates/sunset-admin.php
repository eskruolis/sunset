<h1>Sunset Theme Options</h1>
<?php settings_errors(); ?>
<?php 
$picture = esc_attr( get_option( 'profile_picture' ) );
$firstName = esc_attr(get_option( 'first_name' ) );
$lastName = esc_attr(get_option( 'last_name' ) );
$fullName = $firstName . ' ' . $lastName;
$user_description = esc_attr(get_option( 'user_description' ) );
?>
<div class="sunset-sidebar-preview">
    <div class="sunset-sidebar">
        <div class="image-container">
            <div class="profile-picture" id="profile-picture-preview" style="background-image: url(<?php print $picture ?>)"></div> 
    <h1 class="sunset-username"><?php print $fullName ?></h1>
    <h2 class="sunset-description"><?php print $user_description ?></h2>
                <div class="icons-wrap">
                
             </div>
        </div>
    </div>
</div>
<form method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'sunset-settings-group' ); ?>
	<?php do_settings_sections( 'alecaddd_sunset' ); ?>
	<?php submit_button(); ?>
</form>
