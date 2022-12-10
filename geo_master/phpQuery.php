<?php

class phpQuery {
    function __construct($display = false) {
        if($display == true) {
            echo "<p>phpQuery: true;</p>";
        }
        //"sterowniki":
        if(!isset($_SESSION)) {
            session_start();
        }
        $phpQuery_is = true;
        global $phpQuery_is;
        $_SESSION['phpQuery_is'] = true;
    }
}
class phpQuery_math {
    function __construct($display = false) {
        if(@$_SESSION['phpQuery_is'] == true) {
        if($display == true) {
            echo "<p>phpQuery.math: true;</p>";
        }
        $math_display = $display;
        global $math_display;
        } else {
            echo "Error from phpQuery.math: Add variable with class phpQuery (with sessions and more) before phpQuery.math";
        }
    }
    function plus($elements = [], $it_must_be_only_ints = true, $echo = false) {
        $count = count($elements);
        $score = 0;
        for($i = 0; $i <= $count -1; $i++) {
            $score += $elements[$i];
        }
        if($echo == true) {
            echo $score;
        }
        return $score;
    }
    
}
/**//**//**//**//*Test:*/
$root = new phpQuery();
$math = new phpQuery_math();