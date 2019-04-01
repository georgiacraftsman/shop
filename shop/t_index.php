<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>中華料理　油</title>
        <link rel="stylesheet" href="shop.css">
    </head>
    <body>
        <div align="center"><img src="images/logo (2).png" width="400px";></div>


        <table>
            <?php foreach ($goods as $g) { ?>
                <tr>
                    <td>
                        <?php echo img_tag($g['code']) ?>
                    </td>
                    <td>
                        <p class="goods"><?php echo $g['name'] ?></p>
                        <p><?php echo nl2br($g['comment']) ?></p>
                    </td>
                    <td width="80">
                        <p><?php echo $g['price'] ?> 円</p>
                        <form action="cart.php" method="post">
                            <select name="num">
                                <?php
                                for ($i = 0; $i <= 9; $i++) {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>
                            <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
                            <input type="submit" name="submit" value="カートへ">
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <ul id="nav" width="60%" style="display: inline-block;">
                <li><a href="top.php">TOP</a></li>
                <li><a href="index.php">MENU</a></li>
                <li><a href="info.html">INFO</a></li>
            </ul>
            <div align="" style="width: 30%; display: inline-block;">
                <form action="session1.php" method = "post"></form>
                ユーザーネーム<input type ="text" name="username" value = ""><br>  
                パスワード<input type = "text" name="pass" value = "">
                <input type="submit" name ="login" value = "ログイン"><br> 
            </div>      

    </body>
    <form method="post" action="chat.php">
        <p>名前</p>　　　　<input type="text" name="name">
        <p>メッセージ</p>　<input type="text" name="message">

        <button name="send" type="submit">送信</button>

        チャット履歴
    </form>



</table>

</html><?php
ini_set('display_errors', "On");
?>


