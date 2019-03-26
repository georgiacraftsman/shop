<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"
              <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="shop.css">
    </head>
    <body>
        <div align="center"><img src="images/logo (2).png" width="400px";></div>

        <table>
            <ul id="nav" width="60%" style="display: inline-block;">
                <li><a href="top.php">TOP</a></li>
                <li><a href="index.php">MENU</a></li>
                <li><a href="info.html">INFO</a></li>
            </ul>
            <div align="" style="width: 30%; display: inline-block;">
                <form action="session1.php" method= "post">
                    ユーザーネーム<input type ="text" name="username" value = ""><br>  
                    パスワード<input type = "text" name="pass" value = "">
                    <input type="submit" name ="login" value = "ログイン"><br>
                </form>
                    </div>
                
        </table>    
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div style="text-align:center;">
                    <div class="carousel-item active">
                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"alt="コース" src="images/c.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"alt="ビール" src="images/b.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"alt="コース" src="images/yakei.jpg">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </body>
</html><?php
ini_set('display_errors', "On");
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>




