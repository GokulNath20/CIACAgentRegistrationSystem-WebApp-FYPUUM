<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="images/UUM logo only.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Agent Information System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js">
    <script>
        function getValue() {
            var txtValue = document.getElementById("AgentID").value;
            localStorage.setItem("passValue", txtValue);
        }
    </script>

</head>


<body>
    <!--<button type="button" class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>-->
        <header id="sp-header">
        <br>
        <a href="ciac.php"><img class="logo" src="images/UUM logo.png" alt="UUM Logo"></a>
        <div class="navbar">
            <nav>
                <ul>
                    <li>
                        <a href="homepage.php">HOME</a>
                    </li>
                    <li>
                        <a href="newapplication.php">NEW APPLICATION</a>
                    </li>
                    <li>
                        <a href="status.php">STATUS</a>
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
            <form class="find" action="newapplication2.php" method="post">
                <i class="fa fa-arrow-circle-o-right "></i>
                <p> INTRODUCER DETAILS</p>
                <p id="registration-no-text">CIAC Registration No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="" placeholder="Please enter your Registration No." id="AgentID" name="AgentID" size="33" required>

                    <button type="submit" class="btn1" onclick="hideElem()"><i class="fa fa-arrow-right fa-lg" style="font-size: 1.5em;"></i></button>

                <p id="registration-no-text">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="" id="name" name="name" size="33" disabled oncopy="return false" onpaste="return false" oncut="return false">

                <p id="registration-no-text">IC/Passport Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="" id="ICnumber" name="ICnumber" size="33" disabled readonly user-select: none;>

                <p id="registration-no-text">Matric
                    No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="" name="matric" size="33" disabled readonly user-select: none;>

                <p id="registration-no-text">
                    Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="address" type="text" placeholder="" value="" height="48" size="33" disabled readonly user-select: none;>


                <p id="registration-no-text">Contact
                    No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="" value="" name="contact" size="33" disabled readonly user-select: none;>
            </form>
        </div>

        <div>
            <i class=" fa fa-arrow-circle-o-right " style="margin-top: 0px; "></i>
            <p> LIST OF STUDENTS INTRODUCED AND SUCCESSFULLY REGISTERED</p>

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

<script type="text/javascript">
    const hamburgerMenu = document.querySelector('.hamburger');
    const menuIsActive = () => {
        hamburgerMenu.classList.toggle('active');
    };
    hamburgerMenu.addEventListener('mouseout', menuIsActive)

    btn1 = document.querySelector(".btn1");

    btn1.onclick = function() {

        this.innerHTML = "<div class='spinner'></div>";
        this.innerHTML = "Loading...";

        setTimeout(() => {


        }, 5000);
    }
</script>

</html>