<?php
ini_set('display_errors', "On");

$str = '私の電話番号は、090-8888-9876、林さんの電話番号は、03-123-4567　郵便番号
      はどちらも987-1200です';

if (preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $matches)) {
    print "電話番号は:$matches[0]<br>";
    print "市外番号は:$matches[1]<br>";
    print "市内局番は:$matches[2]<br>";
    print "加入者番号は:$matches[3]<br>";
}
?>

<?php
$msg = <<<EOD
PHP技術者認定試験の試料は、「PHP技術者認定初級試験
    (https://www.phpexam.jp/summary/novice/)」から入手できます。
        無料初級試験対応教材二ついては「無料初級教材」
        (https://www.phpexam.jp/material/phpfree/)どうぞ。
EOD;
print preg_replace('|https?://([\w-]+\.)+[\w-]+(/[\w-./?% &=]*)?|', '<a href = "$0">$0</a>', $msg);
?>

<form action="#" method="get">
    <p><input type="text" pattern=".{3,6}" title="3文字以上6文字以内" size="20"></p> 
    <p><input type="text" pattern="^([A-Z][a-z][0-9])*$" title="英数字のみ" size="20"></p>
    <p><button type="submit" >ボタン</button></p>
</form>