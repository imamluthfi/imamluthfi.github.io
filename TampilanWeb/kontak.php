<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Penggajian</title>
    <style>
        button:hover{
            transform: scale(1.08);
        }
    </style>
</head>
<body class="bg-light" style="font-family: 'Montserrat', sans-serif ;">    
    <?php
        include ("menu.php");
    ?>
    
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2>
                    <b>
                        LET'S CONNECT!
                    </b>
                </h2>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-6">
                <form action="kontak.php">
                    <table align="center" cellpadding="5">
                        <tr>
                            <td class="pt-3">
                                <label for="name">
                                    NAMA
                                </label> 
                            </td>
                            <td>
                                <input type="text" id="name" name="name" style="width: 272px; height: 25px;" ><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3">
                                <label for="phone">
                                    No. HP/WA &emsp;
                                </label>
                            </td>
                            <td>
                                <input type="tel" id="phone" name="phone" style="width: 272px; height: 25px;"> <br>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3">
                                <label for="email">
                                    EMAIL
                                </label>
                            </td>
                            <td>
                                <input type="email" id="email" name="email" style="width: 272px; height: 25px;"><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Message">
                                    MESSAGE
                                </label>
                                
                            </td>
                            <td>
                                <textarea name="Message"cols="35" rows="3"></textarea> <br>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" onclick="alert('Pesan Berhasil Dikirim')" class="btn btn-primary">Submit</button> &emsp13;
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </td>
                        </tr>
                    </table>  
                </form>  
            </div>

            <div class="col-6 mb-5" align="center">
                <h4>
                    Atau Temui kami di :
                </h4>
                <table cellpadding="6">
                    <tr>
                        <td>
                            <img src="img/!facebook.png" width="40px" height="40px" alt="">
                        </td>
                        <td>
                            <a href="https://www.facebook.com/" target="_blank">@MaMCount_official</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/!instagram.png" width="40px" height="40px" alt="">
                        </td>
                        <td>
                            <a href="https://www.instagram.com/" target="_blank">@MaMCount_official</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/!whatsapp.png" width="40px" height="40px" alt="">
                        </td>
                        <td>
                            +62 81212464239
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/!gmail.png" width="40px" height="40px" alt="">
                        </td>
                        <td>
                            admin@mamcount.com
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/github.png" width="40px" height="40px" alt="">
                        </td>
                        <td>
                            <a href="https://github.com/imamluthfi" target="_blank">@MaMCount_official</a> 
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php
        include ("footer.php");
    ?>
</body>
</html>