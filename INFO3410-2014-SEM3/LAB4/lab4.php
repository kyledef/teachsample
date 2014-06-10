<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name</th><th>Last Name</th>
                            <th>Role</th><th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                       $conn = new mysqli("localhost", "root", "usbw", "lab4"); 
                       $SQL = "select * from users;";
                       $result = $conn->query($SQL);
                       if ($result){
                            $row = $result->fetch_assoc();
                            while ($row != NULL){
                                $toPrint = "<tr>";
                                $toPrint .= "<td>" . $row['firstName'] ."</td>";
                                $toPrint .= "<td>" . $row['lastName'] ."</td>";
                                $toPrint .= "<td>" . $row['role'] ."</td>";
                                $toPrint .= "<td>" . $row['countryCode'] ."</td>";

                                $toPrint .= "</tr>";
                                echo $toPrint;
                                $row = $result->fetch_assoc();
                            }
                       }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" class="form-horizontal" role="form">
                        <input id="fName" type="text" name="firstName" class="form-control" placeholder="Enter First Name" />
                        <input id="lName" type="text" name="lastName" class="form-control"placeholder="Enter Last Name" />
                        <input id="role" type="text" name="role" class="form-control" placeholder="Enter Role" />
                        <select id="cCode" name="countryCode">
                            <option>GND</option>
                            <option>SKN</option>
                            <option>SVG</option>
                            <option>TNT</option>
                        </select>
                        <input type="submit" value="save" id="btnSave" />
                    </form>
                </div>
            </div>

            <div class = "row">
                <div class="col-xs-4">
                    <button id="btnOne" class="btn btn-primary">Button One</button>
                </div>
                <div class="col-xs-4">
                    <button id="btnTwo" class="btn btn-primary">Button Two</button>
                </div>
                <div class="col-xs-4">
                    <a href="#href" class="btn btn-primary">Button Three</a>
                </div>
            </div>
        </div>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>

<?php

    if (isset($_POST['firstName']) AND 
        isset($_POST['lastName'])   AND
            isset($_POST['countryCode'])){

        // var_dump($_POST);
        $conn = new mysqli("localhost", "root", "usbw", "lab4");
        $SQL = "INSERT INTO  `lab4`.`users` (`firstName` ,`lastName` ,`role` ,`countryCode`)VALUES (";

        $SQL = $SQL . "'" . $_POST['firstName'] . "',";
        $SQL = $SQL . "'" . $_POST['lastName'] . "',";
        $SQL = $SQL . "'" . $_POST['role'] . "',";
        $SQL = $SQL . "'" . $_POST['countryCode'] . "');";

        // echo "<br>" .$SQL . "<br>";
        if ($conn->query($SQL)){
            echo "<div class='alert alert-success'>Saved Record</div>";
        }else{
            echo $conn->error;
        }


        // $conn->query("")

    }


?>
