<!doctype html>
<html lang="en">
    <?php
        include "head.php";
    ?>
    <body>
        <?php
            include "header.php";
        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><span>Selamat Datang Di Website <br> Import Data</span></h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 info-panel">
                    <div class="row">
                        <div class="col-lg">
                            <a class="nav-link" href="art.php">
                                <img src="img/art.jpg" alt="art" class="float-left">
                                <h4> Data Art</h4>
                                <p> Data Anggota Rumah Tangga</p>
                            </a>
                        </div>
                        <div class="col-lg">
                            <a class="nav-link" href="ruta.php">
                                <img src="img/ruta.jpg" alt="ruta" class="float-left">
                                <h4> Data Ruta</h4>
                                <p> Data Rumah Tangga</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "jsscript.php";
        ?>
    </body>
</html>