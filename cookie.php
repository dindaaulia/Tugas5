<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.SPASI{
    background-color:none;
    height: 5px;
    width: 100%;
}

</style>
    </head>
    <body>
 <div class="container">
<div class ="row thumbnail" style="margin-left: 25%;margin-right: 25%; margin-top: 25%;" >
<table>
<tr class="SPASI" >
<tr><td ><?php
    $username = $_REQUEST['usr'];
    $password = $_REQUEST['pwd'];

    if($username == "dinda" and 
        $password == "phppemweb") {
            setcookie("login", true, time() + 1000);
            echo "Anda berhasil login";
        }
        else echo "Login gagal.";
?>
<tr class="SPASI" >
</table>
   </body>
</html>
