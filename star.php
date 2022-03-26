<?php


echo '<form name="form" action="" method="post">
  <input type="text" name="subject" id="subject">
  <input type="submit" value="send">
</form>';

if (!empty($_POST)) {
    $num = $_POST['subject'];
    function star($num) {
        $space = floor($num/2);
        $star = ceil($num/2);
        for($i=0;$i<$num;$i++) {
            for($j=$space-1;$j>=$i;$j--) {
                echo "-&nbsp&nbsp&nbsp";
            }
            for($k=1;$k<$i;$k++) {

                
            }
            echo "<br>";
        }
    }
    star($num);
}