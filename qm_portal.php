<?php
include("configg.php");
if(isset($_POST["submit"])){
    $subject=$_POST["subject"];
    $level=$_POST["levels"];
    $type=$_POST["types"];
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
    <title>Question Maker Portal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color: rgb(213, 241, 255);">
    <div class="container-fluid">

        <!-- navbar -->
        <div class="navbar navbar-expand-md navbar-dark shadow fixed-top">
            <div class="container-fluid">
                <h2>Quizzlearn</h2>
                <span style="margin-left: 50px;">Question_maker</span>
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

                            <li class="nav-item px-3"><a href="home.html" class="nav-link">Home</a></li>
                            <li class="nav-item px-3"><a href="report.php" class="nav-link">Report</a></li>
                            <li class="nav-item px-3"><a href="#contact" class="nav-link">Contact</a></li>
                            <li class="nav-item px-3"><a href="questions.html" class="nav-link">Questions</a></li>
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="logout.php" class="nav-link one" style="background-color: green; border-radius: 10px; padding: 5px 20px;">LOGOUT</a></li>
                        </ul>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <!-- Add-Question -->
        <div class="container my-5">
            <div class="row">

                <!-- Question_making -->
                <div class="col-md-6 m-auto my-5">
                    <div class="row">

                        <div class="col-md-3">
                        <form action="" method="post">
                            <select class="form-select shadow" name="levels" style="border-radius: 10px!important; background-color: lightgray; font-weight: 500;">
                                <option value="" disabled selected>Level</option>
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="difficult">Difficult</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                                <select class="form-select shadow" name="types" style="border-radius: 10px!important; background-color: lightgray; font-weight: 500;">
                                    <option value="" disabled selected>Type</option>
                                    <option value="easy">MCQ</option>
                                    <option value="medium">MSQ</option>
                                </select>
                        </form>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-warning" id="imagebtn" style="float:right" onclick="byimage();">Add by image</button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col my-1">
                            <button class="btn btn-warning" id="textbtn" style="float:right; display: none;" onclick="bytext();">Add by text</button>
                        </div>
                    </div>

                    

                    <form action="" method="post">
                    <div id="addbytext">
                    <input type="text" class="form-control my-4 shadow" name="question" placeholder="Write your Question here" required>
                    <input type="text" class="form-control my-4 shadow" name="c1" placeholder="Choice a" required>
                    <input type="text" class="form-control my-4 shadow" name="c2" placeholder="Choice b" required>
                    <input type="text" class="form-control my-4 shadow" name="c3" placeholder="Choice c" required>
                    <input type="text" class="form-control my-4 shadow" name="c4" placeholder="Choice d" required>
                    <input type="text" class="form-control my-4 shadow" name="answer" placeholder="Answer" required>
                    <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Submit</button>
                    </div>
                    </form>

                    <form action="" method="post">
                        <div id="addbyimage" style="display: none;">
                            <label for="question" class="form-control-label my-3">Question</label>
                            <input type="file" class="form-control mb-4 shadow" name="question1" placeholder="Write your Question here" required>
                            <input type="text" class="form-control mb-4 shadow" name="c11" placeholder="Choice a" required>
                            <input type="text" class="form-control mb-4 shadow" name="c21" placeholder="Choice b" required>
                            <input type="text" class="form-control mb-4 shadow" name="c31" placeholder="Choice c" required>
                            <input type="text" class="form-control mb-4 shadow" name="c41" placeholder="Choice d" required>
                            <input type="text" class="form-control mb-4 shadow" name="answer1" placeholder="Answer" required>
                            <button class="btn btn-primary" style="float: right;">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

    <script src="style.js"></script>
</body>
</html>