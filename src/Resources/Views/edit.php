<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <link rel="manifest" href="/manifest.json">
    <link rel="shortcut icon" href="/favicon.ico">
    <title>BBStudios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <?php
    BBstyle(module_path('studios\src\Resources\Views\assets\build\static\css\main.css'));
    echo HTML::style('custom/css/'.$page->slug.'.css');
    ?>
    <link href="/static/css/main.6315f64e.css" rel="stylesheet">
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root"></div>
<?php
BBscript(module_path('studios\src\Resources\Views\assets\build\static\js\main.js'));
echo HTML::script('custom/js/'.str_replace(' ','-',$page->slug).'.js');
?>
</body>
</html>