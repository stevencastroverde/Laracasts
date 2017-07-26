<html>
<head>
    <meta charset="UTF-8">
    <title>Hey Hoe</title>

</head>

<body>
<ul>
    <?php foreach ($hoes as $hoe) : ?>
        <li><?=$hoe?></li>
    <?php endforeach;?>

    </ul>
<br>
<ul>
    <?php foreach ($hoes as $hoe){
        echo "<li>$hoe</li>";
}
?>
</ul>
<br>
<ul>
    <?php foreach ($person as $feature => $val):?>
        <li><?= $val ?></li>
    <?php endforeach; ?>
</ul>

</body>

</html>