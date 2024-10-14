<?php
function add_csp_header() {
    header("Content-Security-Policy: default-src 'self'; script-src 'self' https://trusted-source.com; object-src 'none';");
}
add_action('send_headers', 'add_csp_header');
?>
