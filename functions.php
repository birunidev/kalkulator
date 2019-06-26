<?php

    
    if(isset($_GET['submit'])){
        if(isset($_GET['numberone'])){
            $input1 = htmlspecialchars($_GET['numberone']);
            
        }
        if(isset($_GET['numbertwo'])){
            $input2 = htmlspecialchars($_GET['numbertwo']);
        }
    
        
        if(isset($_GET['operator'])){
            $operator = $_GET['operator'];    
            if ($operator === "+"){
                $result = $input1 + $input2;
            }
            else if ($operator === "-"){
                $result = $input1 - $input2;
            }
            else if ($operator === "*"){
                $result = $input1 * $input2;
            }
            else if ($operator === "/"){
                $result = $input1 / $input2;
            }
            else if ($operator === "mod"){
                $result = $input1 % $input2;
            }
            else {
                echo "<script> alert('Pilih operator terlebih dahulu ');</script>";
                $result = 0;
            }         
        }
        else{
            echo "<script> alert('Pilih operator terlebih dahulu ');</script>";
            $result = 0;
        }   
    }

else{
    $result = 0;
    header('location: index.php');
}

?>