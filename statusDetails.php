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

    <main class="sp-page-status">
        <div>
            <a id="submission-status" class="center" style="font-weight: 550;">SUBMISSION STATUS</a>
        </div>

        <form action="statusdb.php" method="post">

            <div class="search-box">
                <input class="search-txt" id="myInput" onkeyup="filterSearch()" type="text" placeholder="Search using matric number" name="search" autocomplete="off" />
                <i class="fa fa-search fa-lg" style="font-size: 1.45em;"></i>
            </div>

        </form>
        <div style="margin: 30px 20px 0px 20px; ">
            <?php
            $con =  mysqli_connect("localhost", "root", "", "agentsystem");

            if (!$con) {
                die('not connected');
            }
            $con =  mysqli_query($con, "SELECT * FROM submissions ORDER BY 'No.' DESC");

            ?>
            <div>
                <table id="myTable">

                    <th>No.</th>
                    <th>Matric No.</th>
                    <th>Student Name</th>
                    <th>Approval Status</th>

                    <?php

                    while ($row =  mysqli_fetch_assoc($con)) {
                    ?>

                        <tr>
                            <td><?php echo $row['No.'];?></td>
                            <td><?php echo $row['MatricNo'];?></td>
                            <td><?php echo $row['StudentName']; ?></td>
                            <td><a href="homepage.php"><?php echo $row['ApprovalStatus']; ?></td></a>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
            </div>
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

<script>
    function filterSearch() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</html>