<?php
get_header();
?>
<div class="updraft-404-container">
    <div class="updraft-404-title">404</div>
    <div class="updraft-404-message">Oops! The page you are looking for cannot be found.</div>
    <a class="updraft-404-home" href="<?php echo esc_url(home_url('/')); ?>">Go to Homepage</a>
</div>

<?php
get_footer();
?>