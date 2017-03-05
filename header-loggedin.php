<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="assets/css/bootstrap-sandstone.css">
  <link rel="stylesheet" href="assets/css/site.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  <script src="assets/js/jobs.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost17">jobbyjobz.</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost17/browse-jobs.php">FAQ<span class="sr-only">(current)</span></a></li>
        <li><a href="http://localhost17/jobs.php">How It Works</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Browse Projects<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Projects</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Collaborations</a></li>
            <li class="divider"></li>
            <li><a href="#">Honey Pots</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost17/login.php">Log In</a></li>
        <li><a href="http://localhost17/register.php">Sign Up</a></li>
      </ul>
      <!-- <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
    </div>
  </div>
</nav>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- END Top Bar -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<div class="container wrapper">
     <div class="navbar">
              <ul class="nav" id="action-nav">
                <li><a href="">Home/Main</a></li>
                <li><a href="">Browse Through</a>
                  <ul>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Collaborations</a></li>
                    <li><a href="">HoneyPots</a></li>
                  </ul>
                </li>
                <li><a href="">How To</a></li>
                <li><a href="">Start a Project</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Signup</a></li>
              </ul>
     </div><!-- /.navbar -->
</div>
