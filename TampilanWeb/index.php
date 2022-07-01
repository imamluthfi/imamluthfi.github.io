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

    <div class="container mt-5" >
        <div class="row mb-3">
            <h2>
                <b>Selamat Datang ! 👋</b>
            </h2>
        </div>
        <div class="row mr-3">
            <p class="text-justify">
                &emsp;<b>MaM</b> merupakan sistem informasi penggajian yang dibangun untuk menghitung gaji karyawan. <b>MaM</b> memberikan fasilitas penghitungan gaji karyawan guna mempermudah perusahaan dan perusahaan dapat lebih konsentrasi untuk bersaing dengan perusahaan lain.
                Sejak dibangun pada tahun 2020, <b>MaM</b> telah melayani lebih dari 15 perusahaan, salah satu perusahaan tersebut adalah salah satu perusahaan besar di Indonesia yaitu LapakPedia. <b>MaM</b> selalu meningkatkan kualitas dan fitur untuk selalu menjadi website penggajian nomor 2 di Indonesia.
            </p>
        </div>
        
    </div>

    <!-- Fitur kami -->
    <div class="container">
        <div class="row ml-5 mt-5">
            <h2>
                <b>Fitur Unggulan Kami</b>
            </h2>
        </div>
        <div class="row d-flex justify-content-around pt-3">
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
        <div class="col d-flex justify-content-center pb-5">
            <a href="features.php">
            <button type="button" class="btn btn-primary btn-lg">Lihat Fitur Lainnya</button>
            </a>
        </div>
    </div>
    
    <?php
        include("footer.php");
    ?>
</body>
</html>