<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Penggajian</title>
    <style>
        button:hover{
            transform: scale(1.08);
        }
        .hov:hover{
            transform: scale(1.08);
        }
    </style>
    <title>About Me</title>
</head>
<body class="bg-light" style="font-family: 'Montserrat', sans-serif ;">
    <?php
        include("menu.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center mt-5 mb-5">
                <h2>
                    <b>
                        ABOUT CREATOR
                    </b>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3 justify-content-center ">
                <img src="img/pasfoto.jpg" width="240px" height="240px" class="rounded-circle">
                
                <div class="ml-2 mt-5">
                    <h4>Sosial Media : </h4>
                    <a href="https://www.facebook.com/" target="_blank"><img src="img/!facebook.png"  class ="hov" width="35px" height="35px"></a>
                    <a href="https://github.com/" target="_blank"><img src="img/github.png" class="ml-3 hov" width="35px" height="35px"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="img/!instagram.png" class="ml-3 hov" width="35px" height="35px"></a>
                    <a href="https://web.whatsapp.com/" target="_blank"><img src="img/!whatsapp.png" class="ml-3 hov" width="35px" height="35px"></a>
                </div>
            </div>
            <div class="col-9">
                <div class="container">
                    <div class="row ">
                        <div class="col mr-5">
                            <table cellpadding="7">
                                <tr>
                                    <td>
                                        <img src="img/user.png" width="45px" height="45px">
                                    </td>
                                    <td>
                                        Nama<br>
                                        Imam Luthfi Perdana
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col ml-4">
                            <table cellpadding="7">
                                <tr>
                                    <td>
                                        <img src="img/calendar.png" width="45px" height="45px">
                                    </td>
                                    <td>
                                        Tanggal Lahir<br>
                                        15 September 2000
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="w-100"></div>
                        <div class="col mt-3 mr-5">
                            <table cellpadding="7">
                                <tr>
                                    <td>
                                        <img src="img/telephone.png" width="45px" height="45px">
                                    </td>
                                    <td>
                                        No. Telepon<br>
                                        +62 812-1246-4239
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col mt-3 ml-4">
                            <table cellpadding="7">
                                <tr>
                                    <td>
                                        <img src="img/email.png" width="45px" height="45px">
                                    </td>
                                    <td>
                                        Email<br>
                                        imamluthfi15@gmail.com
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="w-100"></div>
                        <div class="col mt-3 mr-5">
                            <table cellpadding="7">
                                <tr>
                                    <td>
                                        <img src="img/home.png" width="45px" height="45px">
                                    </td>
                                    <td>
                                        Alamat<br>
                                        Jl. Syukur RT.002 RW.008 No.46
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col mt-3 ml-4">
                            <table cellpadding="7">
                                <tr>
                                    <td>
                                        <img src="img/globe.png" width="45px" height="45px">
                                    </td>
                                    <td>
                                        Kewarganegaraan<br>
                                        Indonesia
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="ml-4 mt-5">
                        <h3>About Me</h3>
                        <p align="justify">
                            &emsp; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore nihil iure quo. Excepturi eveniet minus non, debitis optio nam molestias est at, unde natus corrupti veniam reprehenderit nesciunt tempore asperiores in ipsam ut amet quos sit temporibus vitae placeat hic rem. Libero facilis ipsa asperiores temporibus voluptas ullam, animi doloremque molestias consequatur quibusdam, ut sed. Facere tenetur aut nam asperiores dolores eveniet sequi quam officiis? Facere voluptas, repellat impedit autem, sunt quisquam facilis repellendus nam, placeat harum iusto perferendis numquam rem quam dolore eum quia consequatur fugit quae corporis inventore saepe dignissimos odio. Dolore molestiae minus voluptates iusto officia totam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>