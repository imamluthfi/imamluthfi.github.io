<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Penggajian</title>

    <style>
        .figure:hover{
           transform: scale(1.1);
        }
    </style>

</head>
<body class="bg-light" style="font-family: 'Montserrat', sans-serif ;">   

    <?php
        include ("menu.php");
    ?>

    <!-- Fitur kami -->
    <div class="container  mt-5 mb-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2>
                    <b>
                        FEATURES
                    </b>
                </h2>
            </div>
        </div>
        <div class="row d-flex justify-content-around pt-5">
            <div>
                <figure class="figure">
                    <a href="../CRUD_Penggajian_ImamLuthfiPerdana/tampil_karyawan.php" class=" hv text-decoration-none">
                        <img src="img/employees.png" class="figure-img img-fluid rounded ml-1">
                        <figcaption class="figure-caption text-center text-dark mt-1">
                            <h5>Data Karyawan</h5>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <a href="../CRUD_Penggajian_ImamLuthfiPerdana/tampil_cuti.php" class="text-decoration-none">
                        <img src="img/cuti.png" class="figure-img img-fluid rounded ml-1" >
                        <figcaption class="figure-caption text-center text-dark mt-1">
                            <h5>Data Cuti</h5>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <a href="../CRUD_Penggajian_ImamLuthfiPerdana/tampil_potongan.php" class="text-decoration-none">
                        <img src="img/potongan_gaji.png" class="figure-img img-fluid rounded">
                        <figcaption class="figure-caption text-center text-dark mt-1">
                            <h5>Potongan Gaji</h5>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>

        <div class="row d-flex justify-content-around pt-5 mb-5">
            <div>
                <figure class="figure">
                    <a href="under_construction.php" class="text-decoration-none">
                        <img src="img/lembur.png" class="figure-img img-fluid rounded ml-1">
                        <figcaption class="figure-caption text-center text-dark mt-1">
                            <h5>Data Lembur</h5>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <a href="under_construction.php" class="text-decoration-none">
                        <img src="img/kinerja.png" class="figure-img img-fluid rounded ml-3">
                        <figcaption class="figure-caption text-dark mt-1">
                            <h5>Kinerja Karyawan</h5>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <a href="under_construction.php" class="text-decoration-none">
                        <img src="img/gajian.png" class="figure-img img-fluid rounded">
                        <figcaption class="figure-caption text-dark ml-3 mt-1">
                            <h5>Data Gaji</h5>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>
    </div>
    
    <?php
        include("footer.php");
    ?>
</body>
</html>