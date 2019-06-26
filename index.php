<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['numberone'])) {
        $input1 = htmlspecialchars($_POST['numberone']);
        if(!is_numeric($input1)){
            echo "<script>alert('Masukkan angka yang benar')</script>";
            $input1 = 0;
        }
        else{
            $input1 = htmlspecialchars($_POST['numberone']);
        }
    }
    if (isset($_POST['numbertwo'])) {
        $input2 = htmlspecialchars($_POST['numbertwo']);
        if(!is_numeric($input2)){
            echo "<script>alert('Masukkan angka yang benar')</script>";
            $input2 = 0;
        }
        else{
            $input2 = htmlspecialchars($_POST['numbertwo']);
        }
    }


    if (isset($_POST['operator'])) {
        $operator = $_POST['operator'];
        if ($operator === "+") {
            $result = $input1 + $input2;
        } else if ($operator === "-") {
            $result = $input1 - $input2;
        } else if ($operator === "*") {
            $result = $input1 * $input2;
        } else if ($operator === "/") {
            $result = $input1 / $input2;
        } else if ($operator === "mod") {
            $result = $input1 % $input2;
        } else {
            echo "<script> alert('Pilih operator terlebih dahulu ');</script>";
            $result = 0;
        }
    } else {
        echo "<script> alert('Pilih operator terlebih dahulu ');</script>";
        $result = 0;
    }
} else {
    $result = 0;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>First App</title>
</head>

<body>
    <div class="container">
        <div class="row text-center my-5">
            <div class="col-md-12 title">
                <h1>Calculator</h1>
                <div class="row items">
                    <div class="col-md-6">
                        <div class="image-app d-flex justify-content-center">
                            <img src="img/kal2.png" alt="" width="400" class="coba">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="container">
                            <form action="" method="post" name="submit">
                                <div class="form-group my-3">
                                    <label for="numberone" class="text-dark">Input 1st Number</label>
                                    <input type="text" class="form-control" id="numberone" name="numberone">
                                </div>
                                <div class="form-group my-3">
                                    <label for="numbertwo" class="text-dark">Input 2nd Number</label>
                                    <input type="text" class="form-control" id="numbertwo" name="numbertwo">

                                </div>
                                <div class="input-group my-5">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="operator">Operator</label>
                                    </div>
                                    <select class="custom-select" id="operator" name="operator">
                                        <option selected>Choose...</option>
                                        <option value="+">+</option>
                                        <option value="-">-</option>
                                        <option value="*">*</option>
                                        <option value="/">/</option>
                                        <option value="mod">mod</option>
                                    </select>
                                </div>
                                <button type="submit" name="submit" value="submit" class="btn btn-success btn-rounded mb-4"> Enter</button>
                                <div class="form group">
                                    <h3 class="text-dark">Hasil : <?= $result; ?> </h3>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>