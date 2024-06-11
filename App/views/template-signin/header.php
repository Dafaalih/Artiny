<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artiny</title>
    <link href="<?php echo BASEURL; ?>/img/Logo.png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <img src="<?php echo BASEURL; ?>/img/artiny.png" alt="img" style="widht: 30px; height:30px;">
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASEURL; ?>/Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/Inspirasi">Inspiration</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/Job">Job</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
