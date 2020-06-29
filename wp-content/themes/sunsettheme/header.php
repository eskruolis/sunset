<?php wp_head(); ?>
<?php 
$firstName = esc_attr(get_option( 'first_name' ) );
$lastName = esc_attr(get_option( 'last_name' ) );
$fullName = $firstName . ' ' . $lastName;
$user_description = esc_attr(get_option( 'user_description' ) );
?>
<div class="sunset-sidebar-preview">
    <div class="sunset-sidebar">
    <h1 class="sunset-username"><?php print $fullName ?></h1>
    <h2 class="sunset-description"><?php print $user_description ?></h2>
        <div class="icons-wrap">

        </div>
    </div>
</div>



<?php $crntTheme = esc_attr(get_posts( 'post_date_gmt' ) );
print $crntTheme
?>