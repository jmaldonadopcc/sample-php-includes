<?php
    // This is where you set your variable values for your pages so that
    // header.php and footer.php know where to get their text string data.
    // Customize this for the page that you are generating.
    $pagetitle = "Sample Page Title"; // current page title
    $metadescription = "Hi. I am a meta description lol."; // current page meta desc.
    $authorname = "Juan Maldonado"; // replace this with your name, obvs.
?>

<?php 
    // Call content from the header.php file
    include_once "header.php"; 
?>

    <!-- Page content goes here. -->
    <p>Hi. This is where the content goes. Everything here is between &lt;main&gt; tags, the start tag for which is in <strong>header.php</strong> as the last line, and the end tag is the first line in <strong>footer.php</strong>.</p>

<?php 
    // Call content from the footer.php file
    include_once "footer.php"; 
?>