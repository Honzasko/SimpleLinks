<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $settings['title'];?></title>
        <link rel="stylesheet" href="./static/style.css">
        <style>
            <?php 
            if(isset($settings['background']))
            {
                echo "body {background: url('./static/".$settings['background']."');}";
            }
            ?>
        </style>
    </head>
    <body>
        <div class="bg"></div>
        <div class="content">
        <h1><?php echo $settings['title'];?><h1>
        <?php  
            for($i = 0;$i < $object['num'];$i++)
            {
                echo "<a href='".$object['urls'][$i]."'><button>".$object['titles'][$i]."</button></a><br>";
            }
        ?>
        </div>
    </body>
</html>