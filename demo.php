<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
        <link href="css/gridder-ajax.css" rel="stylesheet">
        <link href="css/demo.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">

            <p class="headline">

			<?php
                $files = glob('./images/*.jpg', GLOB_BRACE);
                echo count($files);
			?>

			<ul class="gridder-list">
				<?php foreach($files as $key => $value): ?>

                    <li class="item item-<?php echo $key; ?> do-expand-item">
                        <a rel="nofollow" href="item-<?php echo $key; ?>" title="<?php echo $key; ?>" class="link">
                            <div class="image"><img src="<?php echo $value?>" /></div>
                            <span class="title"><?php echo $key; ?></span>
                            <span class="description"><?php echo $key; ?></span>
                        </a>
				<?php endforeach; ?>
            </ul>

        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/gridder-ajax.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                // Call Gridder Ajax

                $('.gridder-list').GridderAjax({
					scrollOffset: 200,
					rootUrl: "/gridder-ajax/"
				});
            });
        </script>
    </body>
</html>
