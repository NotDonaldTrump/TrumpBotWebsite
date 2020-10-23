<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grav .htaccess Tester</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <style>
        body { padding: 2rem; }
        textarea.form-input { height: 500px; }
    </style>
</head>

<body>
<div class="container grid-lg">
    <div class="columns">
        <div class="column text-center">
    
<?php

echo '<h1>Grav Apache <tt>.htaccess</tt> Tester</h1>';

if (strpos($_SERVER['REQUEST_URI'], 'htaccess_tester.php') === false) {

    echo '<div class="toast toast-success"><tt>mod_rewrite</tt> is working! You used the path <tt>' . $_SERVER['REQUEST_URI'] . '</tt> to request this page.</div>';

} elseif (is_readable(__DIR__.'/.htaccess') ) {

    echo '<div class="toast toast-success">The file .htaccess exists and is readable to the webserver. The file contains: </div>';
    echo '<div class="form-group"><textarea class="form-input my-2">';
    echo file_get_contents(__DIR__.'/.htaccess');
    echo '</div></textarea>';

} else {

    echo '<div class="toast toast-error"><strong>Error:</strong> The file .htaccess does not exist or it is not readable to the webserver</div><p class="my-2">Download a <a href="https://raw.githubusercontent.com/getgrav/grav/develop/.htaccess">new version of the .htaccess file</a>, and place it in your webroot. Make sure it is readable to the webserver.</p>';
    die();

}

// echo '<h1>PHPinfo</h1>';
// echo '<p>Below you'll find the specifics of your PHP installation, for debugging purposes.</p>';
// phpinfo();

?>
        </div>
    </div>
</div>
</body>

</html>