<?php include_once('lib/top.php');?>
<!doctype html>
<html lang="<?php echo $html_lang?>">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once('view/nav.php');?>
    <p><?php echo $Poetry ?></p>
    <a href="index.php?sty=<?php echo $pop ?>&cls=<?php echo $pop ?>"><div><?php echo $backhome ?></div></a>
</body>
</html>