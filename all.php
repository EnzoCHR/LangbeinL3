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
<h1> All </h1>
<div class="content search" >
    <?php
    
    include 'connect.php';

    ?>

    <form action="all.php">
        <input default='true' type="checkbox" id="astro" name="astro" value="astrophotography">
        <label for="Astrophotography"> Astrophotography</label><br>
        <input type="checkbox" id="misc" name="misc" value="miscellaneous">
        <label for="Miscellaneous"> Miscellaneous </label><br>
        <input type="checkbox" id="nat" name="nat" value="nature">
        <label for="Nature"> Nature</label><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (!empty($_GET['nat']) || !empty($_GET['astro']) || !empty($_GET['misc'])) {
        $nat = $_GET['nat'];
        $ast = $_GET['astro'];
        $misc = $_GET['misc'];
        include 'filter.php';
    }
    else{
        $nat = "nature";
        $ast = "astrophotography";
        $misc = "miscellaneous";
        include 'filter.php';
    }
    ?>
</body>
</html>