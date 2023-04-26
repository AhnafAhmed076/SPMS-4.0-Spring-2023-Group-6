<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
      body{
        background-image:url('background.png');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100%;
        background-position:center;
        background-color:#155977;
      }

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #21abcd ;
      }

      li a {
        display: block;
        color: #000;
        padding: 8px 20px;
        text-decoration-style: solid;
      }

    /* Change the link color on hover */
      li a:hover {
      background-color:#0892d0;
      color: white;
    }

    </style>
      

  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><font color = #e7feff><b>SPMS 4.0</b></font></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Analysis
          </a>
          <ul class="dropdown-menu">
            <li><a href="ploAnalysis.php" target="_self">PLO Analysis</a></li>
            <li><a href="ploAchieveStats.php" target="_self">PLO Achievement Stats</a></li>
            <li><a href="spiderChart.php" target="_self">Spider Chart Analysis</a></li>
            <li><a href="performanceStats.php" target="_self">GPA Analysis</a></li>         
          </ul>
        </li>
        <li class="nav-item">
          <a href="dataEntry.php" target="_self">Data Entry</a>
        </li>
        <li class="nav-item">
          <a href="viewCourseOutline.php" target="_self">Course Outline</a>
        </li>
        <li class="nav-item">
          <a href="enrollmentStatistics.php" target="_self">Enrollment Stats</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" target="_self">Logout</a>
        </li>
        <span></span>
      </ul>
     </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>

</html>