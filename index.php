<?php include_once('lib/top.php');?>
<!doctype html>
<html lang="<?php echo $html_lang?>">
<head>
    <meta charset="UTF-8">
    <title>julihana Love 24節氣</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once('view/nav.php');?>
    <h1><?=$WebTitle?></h1>
    
    <?php foreach ($NameStr as $NameStrK => $NameStrV){ ?>
        <h1><?=$NameStrK?></h1>
        <?php foreach ($NameStrV as $NameStrvK => $NameStrvV){ ?>
            <?php foreach ($NameStrvV as $k => $poetry) { ?>
                <a href="page.php?sty=<?php echo $pop ?>&cls=<?php echo $pop ?>&poetry=<?=$poetry?>">
                    <div class="btn"><?=$NameStrvK?></div>
                </a>
            <?php }
        }
    } ?>
</body>
</html>