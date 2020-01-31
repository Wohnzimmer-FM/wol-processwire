<?php require 'inc/functions.php'; ?>
<?php if($config->ajax): ?>
<?php else: ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $page->title; ?></title>
        <meta name="description" content="<?php echo ""; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo versionedStylesheet($config->urls->templates.'dist/css/main.css'); ?>
    </head>

    <body>
		


        <h1><?php $page->title; ?></h1>
		<?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>

        <?php echo versionedJavascript($config->urls->templates.'dist/js/main.min.js'); ?>
    </body>
</html>

<?php endif; ?>