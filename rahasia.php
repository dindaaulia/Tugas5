
 <title>Luas Permukaan & Volume Kubus </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.SPASI{
    background-color:none;
    height: 20px;
    width: 100%;
}
.SPASII{
    background-color:none;
    height: 5px;
    width:100%;
}

body{
   background: url(hutan.png) no-repeat center center fixed; 
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
}


</style>
</head>
<body>

<div class="container" style="background-color: none">
<div class="row thumbnail" style="margin-left: 25%;margin-right: 25%; margin-top: 25%;" >
<table>
<tr class="SPASII"><td ></td></tr>
<tr ><td >
<?php
$nama = "Dinda";
    date_default_timezone_set("Asia/Jakarta");
    $sekarang = date ("H");
    if(isset($_COOKIE))
        $sudahLogin = $_COOKIE['login'];
         
    if($sudahLogin == true) {
        if (($sekarang>=6) && ($sekarang<=11)) {
        echo "<b>Selamat Pagi </b>, $nama <br>";
    }else if(($sekarang>=11) && ($sekarang<=15)){
        echo "<b>Selamat  Siang</b>, $nama  <br>";
    }elseif(($sekarang>15) && ($sekarang<=18)){
        echo "<b>Selamat Sore</b>, $nama <br>";
    }else{
        echo "<b>Selamat Malam</b>, $nama<br>";
    }

   if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla')){
    $browser = 'Mozilla';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')){
    $browser = 'Firefox';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
    $browser = 'Chrome';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari')){
    $browser = 'Safari';
}  else $browser = 'Other';
 echo 'Anda sekarang sedang menggunakan browser '.$browser;
    } else {
        echo "Maaf anda harus login terlebih dahulu";
    }?></td>
    </tr>
   <tr class="SPASI"><td></td></tr>
    </table>
</div>
</div>



</body>
</html>