<?php

//Add GTM
function insert_google_tag_manager() {
?>
<!-- Google Tag Manager Container Code -->
<!-- Paste your Google Tag Manager code from GTM here. -->
<?php
}
add_action('wp_head', 'insert_google_tag_manager');

function insert_google_tag_manager_body() {
?>
<!-- Google Tag Manager Body Code -->
<!-- Paste the second part of the code for Google Tag Manager from GTM here -->
<?php
}
add_action('wp_body_open', 'insert_google_tag_manager_body');

?>
