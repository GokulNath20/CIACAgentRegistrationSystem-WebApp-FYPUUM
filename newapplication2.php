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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "agentsystem";

        $conn = new mysqli($servername, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM agent WHERE AgentID='$AgentID'";

        $result = $conn->query($sql);

        if (!$result) {
            echo "Error: Data not found..";
        } else
            $test = mysqli_fetch_array($result);
        $name = $test['name'];
        $ICnumber = $test['ICnumber'];
        $matric = $test['matric'];
        $address = $test['address'];
        $contact = $test['contact'];

        ?>


        btn1 = document.querySelector(".btn1");

        btn1.onclick = function() {

            this.innerHTML = "<div class='spinner'></div>";
            this.innerHTML = "Loading...";

            setTimeout(() => {


            }, 5000);
        }

        function message() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                document.location.href = 'ciac.php';

            } else {
                document.location.href = current;
            }
        }

        function message1() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                document.location.href = 'homepage.php';
            } else {
                document.location.href = current;
            }
        }

        function message2() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                document.location.href = 'newapplication.php';
            } else {
                document.location.href = current;
            }
        }

        function message3() {
            let text = ("The page you're looking for used information that you entered. Returning to that page might trigger a repetition of any action you took there. Do you want to continue?");
            if (confirm(text) == true) {
                document.location.href = 'status.php';
            } else {
                document.location.href = current;
            }
        }
    </script>
</head>


<body>
    <header id="sp-header">
        <br>
        <img class="logo" src="images/UUM logo.png" onclick="message()" alt="UUM Logo">
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
                        <a href="#">MANAGE ACCOUNT</a>
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

            <form id="apply" action="newapplication.php" method="post">

                <i class="fa fa-arrow-circle-o-right "></i>
                <p> INTRODUCER DETAILS</p>
                <p id="registration-no-text">CIAC Registration No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="<?PHP echo $AgentID; ?>" placeholder="Please enter your Registration No." id="AgentID" name="AgentID" size="33" disabled disabled readonly user-select: none;>

                    <button class="btn1" onclick=""><i class="fa fa-close fa-lg" style="font-size: 1.8em;"></i></button>


                <p id="registration-no-text">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="<?PHP echo $name; ?>" id="name" name="name" size="33" disabled oncopy="return false" onpaste="return false" oncut="return false">

                <p id="registration-no-text">IC/Passport Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="<?PHP echo $ICnumber; ?>" id="ICnumber" name="ICnumber" size="33" disabled disabled readonly user-select: none;>

                <p id="registration-no-text">Matric
                    No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="<?PHP echo $matric; ?>" name="matric" size="33" disabled disabled readonly user-select: none;>

                <p id="registration-no-text">
                    Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="address" type="text" placeholder="" value="<?PHP echo $address; ?>" height="48" size="33" disabled disabled readonly user-select: none;>


                <p id="registration-no-text">Contact
                    No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="<?PHP echo $contact; ?>" name="contact" size="33" disabled disabled readonly user-select: none;>

            </form>

        </div>

        <div>

            <i class="fa fa-arrow-circle-o-right " style="margin-top: 0px; "></i>
            <p>LIST OF STUDENTS INTRODUCED AND SUCCESSFULLY REGISTERED</p>

            <form action="newapplication3.php" method="post">
                <p id="registration-no-text">Matric No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="" placeholder="Please enter student matric No." id="StudentMatric" name="StudentMatric" size="33" required>

                    <button class="btn1" onclick="getValue()" onclick="load()"><i class="fa fa-arrow-right fa-lg" style="font-size: 1.8em;"></i></button>
            </form>
            <script>
                function getValue() {
                    var txtValue = document.getElementById("AgentID").value;
                    localStorage.setItem("passValue", txtValue);
                }
            </script>
        </div>

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



</html>