<!DOCTYPE html>
<html lang="en">

<ul class="nav">
    <li><a href="Index.html" class="logo">
        <img src="images/logo.png" class="logo" alt="logo">
    </a></li>
    <li><a href="all.php" >All</a> </li>
    <li><a href="astro.php" >Astro</a> </li>
    <li><a href="nature.php" >Nature</a> </li>
    <li><a href="misc.php" >Misc</a> </li>
    <li><a href="about.php" >About</a> </li>
    <p>&copy; Langbein <br> Photography</p>
</ul>
<head>
    <meta charset="UTF-8">
    <title>Domenik Photography</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1> Miscellaneous</h1>
    <div class="content gallery">
    <?php
    $genre = "miscellaneous";

    include 'connect.php';

    include 'selectImage.php';
    ?>
</body>
</html>