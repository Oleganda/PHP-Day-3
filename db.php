<?php
require_once "db_connect.php";

$sql = "SELECT * FROM `DISHES`";
$result = mysqli_query($connect, $sql);

$layout = " ";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $layout .= " <div class='card p-0' style='width: 300px; 'height = 70px'>
        <img src='{$row["IMG"]}' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>{$row["NAME"]}</h5>
            <p class='card-text'> {$row["DESCRIPTION"]}</p>
             <p class='card-text'> {$row["PRICE"]} $</p> 
        </div>
    </div>";
    }
} else {
    $layout .= "No results";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>

    <div class="container ">
        <div class="d-flex justify-content-around row row-lg-3 row-md-2 row-xs-1 p-2 g-col-6 p-2 g-col-6">
            <?= $layout ?>
        </div>
    </div>

    <section>
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #e3f2fd;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3 text-black">Enjoy your Pizza!</span>

                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright

            </div>
            <!-- Copyright -->
        </footer>