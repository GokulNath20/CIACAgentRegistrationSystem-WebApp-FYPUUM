<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="images/UUM logo only.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Agent Information System</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js">

    <script>
        <?php

        $AgentID = $_REQUEST['AgentID'];
        $StudentMatric = $_REQUEST['StudentMatric'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "agentsystem";

        $conn = new mysqli($servername, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql1 = "SELECT * FROM student WHERE studentmatricno='$StudentMatric'";



        $result1 = $conn->query($sql1);
        //$result = $conn->query($sql);   

        if (!$result && !$result1) {
            echo "Error: Data not found..";
        } else
            $test1 = mysqli_fetch_array($result1);

        $StudentMatric = $test1['StudentMatric'];
        $studentname = $test1['studentname'];
        $country = $test1['country'];



        ?>
    </script>
    <script>
        function message() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                window.location.href = 'ciac.php';

            }
        }

        function message1() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                window.location.href = 'homepage.php';
            }
        }

        function message2() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                window.location.href = 'newapplication.php';
            }
        }

        function message3() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                window.location.href = 'status.php';
            }
        }

        function cancel() {

            let text = ("Are you sure you want to cancel the application?");
            if (confirm(text) == true) {
                window.location.href = 'homepage.php';
            }
        }
    </script>
</head>


<body>
    <header id="sp-header">
        <br>
        <img class="logo" onclick="message()" src="images/UUM logo.png" alt="UUM Logo">
        <div class="navbar">
            <nav>
                <ul>
                    <li>
                        <a id="cursor-pointer" onclick="message1()">HOME</a>
                    </li>
                    <li>
                        <a id="cursor-pointer" onclick="message2()">NEW APPLICATION</a>
                    </li>
                    <li>
                        <a id="cursor-pointer" onclick="message3()">STATUS</a>
                    </li>
                    <li>
                        <a id="cursor-pointer" href="#">MANAGE ACCOUNT</a>
                    </li>

                </ul>
            </nav>
        </div>


    </header>


    <main class="sp-page-application">

        <div><img class="center" src=" images/UUM Logo Form.png " alt=" ">
            <a class="center" style="font-weight: 550;">ACADEMIC AFFAIRS DEPARTMENT <br> UNIVERSITI UTARA MALAYISA</a>
        </div>

        <div id="register">
            <form action="newapplication.php" method="post">
                <i class="fa fa-arrow-circle-o-right "></i>
                <p> INTRODUCER DETAILS</p>
                <p id="registration-no-text">CIAC Registration No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="CIAC446688" id="AgentID" name="AgentID" size="33" disabled>

                    <button class="btn1" onclick="spinner()" onclick="showElem()"><i class="fa fa-close fa-lg" style="font-size: 1.8em;"></i></button>


                <p id="registration-no-text">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="AIMAN AKHIL BIN AZNAN" id="name" name="name" size="33" disabled oncopy="return false" onpaste="return false" oncut="return false">

                <p id="registration-no-text">IC/Passport Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="880655-05-2344" id="ICnumber" name="ICnumber" size="33" disabled readonly user-select: none;>

                <p id="registration-no-text">Matric
                    No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="-" name="matric" size="33" disabled readonly user-select: none;>

                <p id="registration-no-text">
                    Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="address" type="text" placeholder="" value="Berjaya Times Square, A2209,no.1, Imbi, 55100 Kual" height="48" size="33" disabled readonly user-select: none;>


                <p id="registration-no-text">Contact
                    No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="01126588391" name="contact" size="33" disabled readonly user-select: none;>

            </form>


            <div>

                <i class="fa fa-arrow-circle-o-right " style="margin-top: 0px; "></i>
                <p>LIST OF STUDENTS INTRODUCED AND SUCCESSFULLY REGISTERED</p>
                <form action="newapplication2.php" method="post">


                    <p id="registration-no-text">Matric No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" value="272930" placeholder="" id="StudentMatric" name="StudentMatric" size="33" disabled disabled readonly user-select: none;>

                        <button class="btn1" onclick="spinner()"><i class="fa fa-close fa-lg" style="font-size: 1.8em;"></i></button>

                        <script>
                            document.getElementById("AgentID").innerHTML = localStorage.getItem("passValue");
                        </script>

                    <p id="registration-no-text">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" placeholder="" value="<?PHP echo $studentname; ?>" id="studentname" name="studentname" size="33" disabled readonly user-select: none;>

                    <p id="registration-no-text">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" placeholder="" value="<?PHP echo $country; ?>" id="country" name="country" size="33" disabled readonly user-select: none;>
                        <span id="custom-text">Choose the file :</span>
                        <input type="file" id="real-file" hidden="hidden" multiple />
                        <button type="button" id="custom-button">Upload</button>
                        <span id="custom-text2">*Please upload the required documents</span>
                        <button type="submit" id=custom-text3 style="display: block">Add another student<i class="fa fa-plus-circle"></i></button>


                </form>

            </div>
        </div>
        <button type="submit" id="custom-button1" onclick="window.location.href='submission.php'">Submit</button>
        <button type="submit" style="margin: 20px 0 0 20px;" onclick="cancel()" id="custom-button1">Cancel</button>

    </main>
    <footer>

        <div class=" footer-container ">
            <h2 class=" ">Centre of International Affairs and<br>Cooperation (CIAC)<br>Universiti Utara Malaysia
                <h3>06010 Sintok<br>Kedah Darul Aman, Malaysia</h3>
            </h2><br>
            <i class="fa fa-phone " style=" font-size:20px; color: rgb(228, 250, 250); user-select: none; "></i>
            <p style=" color: white; display: inline; user-select: none; ">+604-928 3401 / 3403 / 3414</p><br>
            <i class="fa fa-envelope " style=" font-size:20px; color: rgb(228, 250, 250); user-select: none; "></i>
            <p style=" color: white; display: inline; user-select: none; ">ciac@uum.edu.my</p>
        </div>

    </footer>


</body>
<script>
    function add() {
        <?php
        $AgentID = $_REQUEST['AgentID'];
        $StudentMatric = $_REQUEST['StudentMatric'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "agentsystem";

        $conn = new mysqli($servername, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "INSERT INTO submissions (MatricNo, StudentName, ApprovalStatus) VALUES ('$StudentMatric', '$studentname', 'Pending')";

        $result = $conn->query($sql);

        if (!$result) {
            echo "Error: Data cannot be added..";
        }

        ?>
    }
</script>

<script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function() {
        realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
                /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
        } else {
            customTxt.innerHTML = "*Please upload the required documents";
        }
    });
</script>


</html>