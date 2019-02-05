<?php
    header('Content-type: text/plain; charset= UTF-8');
    if(isset($_POST['userid']) && isset($_POST['passward'])){
        $id = $_POST['userid'];
        $pas = $_POST['passward'];
        $str = "AJAX REQUEST SUCCESS\nuserid:".$id."\npassward:".$pas."\n";
        $result = nl2br($str);
        echo $result;   //これが呼び出し元に帰って、変数dataに入るよ。
    }else{
        echo 'FAIL TO AJAX REQUEST';  //これが呼び出し元に帰って、変数dataに入るよ。
    }
?>
