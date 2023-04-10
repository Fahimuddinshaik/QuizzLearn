<?php
require 'configg.php';
if(isset($_POST["submit"])){
    $subject=$_POST["subject"];
    $level=$_POST["levels"];
    $question=$_POST["question"];
    $choice1=$_POST["c1"];
    $choice2=$_POST["c2"];
    $choice3=$_POST["c3"];
    $choice4=$_POST["c4"];
    $answer=$_POST["answer"];

    if($subject=="os"){
        $query="INSERT INTO os VALUES('','$question','$choice1','$choice2','$choice3','$choice4','$answer','$level')";
        mysqli_query($conn,$query);
       header("location:question_maker.php");
    }else if($subject=="java"){
        $query="INSERT INTO java VALUES('','$question','$choice1','$choice2','$choice3','$choice4','$answer','$level')";
        mysqli_query($conn,$query);
       header("location:question_maker.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question_Maker</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container-fluid">

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

                            <select class="form-select shadow" name="subject" style="border-radius: 10px!important; background-color: lightgrey; font-weight: 500;">
                                <option value="" disabled selected>Subject</option>
                                <option value="os">Os</option>
                                <option value="java">Java</option>
                            </select>

                            <li class="nav-item px-3"><a href="#home" class="nav-link">Home</a></li>
                            <li class="nav-item px-3"><a href="#report" class="nav-link">Report</a></li>
                            <li class="nav-item px-3"><a href="#contact" class="nav-link">Contact</a></li>
                            <li class="nav-item px-3"><a href="questions.php" class="nav-link">Questions</a></li>
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="logout.php" class="nav-link one" style="background-color: green; border-radius: 10px; padding: 5px 20px;">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5">
            <div class="row">

                <!-- Question_making -->
                <div class="col-md-6 my-5">
                    <div class="row">

                        <div class="col-md-3">
                            <select class="form-select shadow" name="levels" style="border-radius: 10px!important; font-weight: 500;">
                                <option value="" disabled selected>Level</option>
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="difficult">Difficult</option>
                            </select>
                        </div>

                        <!-- <div class="col-md-9">
                            <button class="btn btn-success" style="float:right">Add by image</button>
                        </div> -->
                    </div>

                    

                    <div id="addbytext">
                    <input type="text" class="form-control my-4 shadow" name="question" placeholder="Write your Question here" required>
                    <input type="text" class="form-control my-4 shadow" name="c1" placeholder="Choice a" required>
                    <input type="text" class="form-control my-4 shadow" name="c2" placeholder="Choice b" required>
                    <input type="text" class="form-control my-4 shadow" name="c3" placeholder="Choice c" required>
                    <input type="text" class="form-control my-4 shadow" name="c4" placeholder="Choice d" required>
                    <input type="text" class="form-control my-4 shadow" name="answer" placeholder="Answer" required>
                    <button class="btn btn-primary" style="float: right;" name="submit">Submit</button>
                    </div>

                    <!-- <div id="addbyimage">
                    <label for="question" class="form-control-label">Question</label>
                    <input type="file" class="form-control mb-4 shadow" name="question" placeholder="Write your Question here" required>
                    <input type="text" class="form-control mb-4 shadow" name="c1" placeholder="Choice a" required>
                    <input type="text" class="form-control mb-4 shadow" name="c2" placeholder="Choice b" required>
                    <input type="text" class="form-control mb-4 shadow" name="c3" placeholder="Choice c" required>
                    <input type="text" class="form-control mb-4 shadow" name="c4" placeholder="Choice d" required>
                    <input type="text" class="form-control mb-4 shadow" name="answer" placeholder="Answer" required>
                    <button class="btn btn-primary" style="float: right;" name="submit">Submit</button>
                    </div> -->

                    </form>
                </div>



                <!-- image -->
                <div class="col-md-6 my-5">
                    <img src="qm.jpg" width="500px" height="500px">
                </div>
            </div>
        </div>


    </div>
</body>
</html>