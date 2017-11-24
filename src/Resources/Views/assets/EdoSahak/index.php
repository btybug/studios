<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <link rel="manifest" href="/manifest.json">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>React App</title>
    <?php
    BBstyle(module_path('studios/src/Resources/Views/assets/EdoSahak/static/css/main.css'));
    echo HTML::style('custom/css/'.$page->slug.'.css');
    ?>
</head>
<body>
<div class="row" id="builderContain">
    <div class="col-md-6 previewAray">
        <div id="preview"></div>
    </div>
    <div class="col-md-6 formoptions textBuilderEditor">
        <div id="settings"></div>
    </div>
</div>
<?php
BBscript(module_path('studios/src/Resources/Views/assets/EdoSahak/static/js/main.js'));
echo HTML::script('custom/js/'.str_replace(' ','-',$page->slug).'.js');
?>
</body>
</html>