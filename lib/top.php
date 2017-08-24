<?php
    if (isset($_GET['sty'])){
        $pop = $_GET['sty'];
        $cls = $_GET['cls'];
        
        switch ($_GET['sty']) {
            case '1': include_once('lang/chinese.php'); break; //$importLang = 'lang/chinese.php'; break;
            case '2': include_once('lang/japanese.php'); break; //$importLang = 'lang/japanese.php'; break;
            case '3': include_once('lang/english.php'); break; //$importLang = 'lang/english.php'; break;
            default : include_once('lang/chinese.php');
        }
    }else{
        include_once('lang/chinese.php');
        $pop = "1";
        $cls = "1";
        
    }
    //var_dump($_GET['sty']);
    
    //扔出去的值
     if (isset($_GET['poetry'])){
         $Poetry = $_GET['poetry'];
     }else{
         $Poetry = "";
     }
?>