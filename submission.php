<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="images/UUM logo only.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Agent Information System</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /**
 * ==============================================
 * Dot Flashing
 * ==============================================
 */
        .dot-flashing {

            align-items: center;
            position: fixed;
            top: 70%;
            left: 53%;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #DCDCDC;
            color: #DCDCDC;
            animation: dotFlashing 1s infinite linear alternate;
            animation-delay: .5s;
        }

        .dot-flashing::before,
        .dot-flashing::after {
            content: '';
            display: inline-block;
            position: absolute;
            top: 0;
        }

        .dot-flashing::before {
            left: -15px;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #DCDCDC;
            color: #DCDCDC;
            animation: dotFlashing 1s infinite alternate;
            animation-delay: 0s;
        }

        .dot-flashing::after {
            left: 15px;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #DCDCDC;
            color: #00008B;
            animation: dotFlashing 1s infinite alternate;
            animation-delay: 1s;
        }

        @keyframes dotFlashing {
            0% {
                background-color: #000000;
            }

            50%,
            100% {
                background-color: #ebe6ff;
            }
        }
    </style>

    <script>
        setTimeout("location.href = 'homepage.php';", 3000);
    </script>
</head>

<body>
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

    <main>

        <img id="submission-icon" src="images/submission icon.png" alt="Submission Successful">
        <div class="col-3">
            <div class="snippet" data-title=".dot-flashing">
                <div class="stage">
                    <div class="dot-flashing"></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>