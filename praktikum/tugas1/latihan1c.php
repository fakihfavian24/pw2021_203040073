<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .lingkaran {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border-radius: 100%;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 2px;
        }
    </style>
</head>
<body>
    
    <?php
    for ( $i = 1; $i <= 3; $i++ ) : ?>
        <?php for ( $j = 1; $j <= $i; $j++ ) : ?>
            <div class="lingkaran"><?php echo $i; ?> </div>
        <?php endfor; ?>
        <?php echo "<br>" ?>
    <?php endfor; ?>
    
</body>
</html>