<?php
require 'main.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="navbar navbar-expand-md navbar-dark shadow fixed-top">
            <div class="container-fluid">
                
                <!-- username  and image <div class="col-md-6" style="border-radius: 50%; background-color: black;">black</div> -->
                <img src="avatar.jpg" width="40px" style="margin-left: 10px;">
                <span style="margin-left: 10px;">Question-maker</span>
                <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"><span class="navbar-toggler-icon"></span></button>
                <div class="container">
                <form action="" method="post">

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item px-3"><a href="question_maker.php" class="nav-link">Question_Maker</a></li>
                            <li class="nav-item px-3"><a href="#home" class="nav-link">Home</a></li>
                            <li class="nav-item px-3"><a href="#report" class="nav-link">Report</a></li>
                            <li class="nav-item px-3"><a href="#contact" class="nav-link">Contact</a></li>
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="logout.php" class="nav-link one" style="background-color: green; border-radius: 10px; padding: 5px 20px;">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>

    <!-- body -->
    <div class="container-fluid my-5 p-5 shadow">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="" method="post">
                    <select class="form-select shadow" name="sub" style="border-radius: 10px!important; font-weight: 500;">
                        <option value="" disabled selected>Subject</option>
                        <option value="os">Os</option>
                        <option value="java">Java</option>
                    </select>
                    <button class="btn btn-primary my-3" style="float: right;" name="submit">Submit</button>
                </form>
            </div>
        </div>


        <!-- table -->
        <div class="row my-5">
            <table class="table table-bordered">

            <tr>
                <th>Question</th>
                <th>Choice1</th>
                <th>Choice2</th>
                <th>Choice3</th>
                <th>Choice4</th>
                <th>Answer</th>
                <th>Change</th>
            </tr>
            

            <?php
            if(isset($_POST["submit"])){
                $sub=$_POST["sub"];
                $result=mysqli_query($conn,"select * from $sub");
                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row['question']; echo "</td>";
                    echo "<td>"; echo $row['choice 1']; echo "</td>";
                    echo "<td>"; echo $row['choice 2']; echo "</td>";
                    echo "<td>"; echo $row['choice 3']; echo "</td>";
                    echo "<td>"; echo $row['choice 4']; echo "</td>";
                    echo "<td>"; echo $row['answer']; echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
    

            </table>
        </div>

        <!-- <div class="row my-5">
            <table class="table table-bordered">

            <tr>
                <th>Question</th>
                <th>Choice1</th>
                <th>Choice2</th>
                <th>Choice3</th>
                <th>Choice4</th>
                <th>Answer</th>
                <th>Change</th>
            </tr>

            <?php
            $result=mysqli_query($conn,"select * from java");
            while($row=mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>"; echo $row['question']; echo "</td>";
                echo "<td>"; echo $row['choice 1']; echo "</td>";
                echo "<td>"; echo $row['choice 2']; echo "</td>";
                echo "<td>"; echo $row['choice 3']; echo "</td>";
                echo "<td>"; echo $row['choice 4']; echo "</td>";
                echo "<td>"; echo $row['answer']; echo "</td>";
                echo "</tr>";
            }
            ?>
    

            </table>
        </div> -->
    </div>
</body>
</html>