<?php include 'include/header.php'; ?>

<?php

    function calc($a, $b, $op)
    {
        if ($op === 'sum') {
            return $a + $b;
        }elseif ($op === 'mul') {
            return $a * $b;
        }elseif ($op === 'div') {
            return $a / $b;
        }elseif ($op === 'sub') {
            return $a - $b;
        }
    }

    if( isset($_GET['submit']) ){
        $a  = $_GET['num1'];
        $b  = $_GET['num2'];
        $op = $_GET['op'];

        echo calc($a, $b, $op);
    }  else{
        header('location: form.php');
    }

    <?php include 'include/footer.php'; ?>