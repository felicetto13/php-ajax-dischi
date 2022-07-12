<?php
require "db/db_disk.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi with PHP</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">

        <header>
            <!-- create navbar -->
            <div class="my-navbar">
                <img src="img/spotify-logo-png-7053.png" alt="logo spotify" />
                <!-- <div class="search-bar">
                    <input type="text" id="searched-bar" />
                </div> -->
            </div>
        </header>
        <div class="main-content">
            <div class="container">
                <label class="fs-5 text-white" for="filtro">Filtra per genere: </label>
                <select class="select-genre" name="filtro" id="filtro-genere">
                    <option value="">All</option>
                </select>
                <div class="row row-cols-5">
                    <?php
                foreach ($db_disks as $disk) {
                    echo '
                    <div class="col">
                    <div class="card">
                    <img src="'. $disk["poster"] .'" alt="'. $disk["author"] .'" />
                    <div class="card-body">
                    <div class="card-title">'. $disk["title"] .'</div>
                    <div class="card-author">'. $disk["author"] .'</div>
                    <div class="card-year">'. $disk["year"] .'</div>
                    </div>
                    </div>  
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>