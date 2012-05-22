<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CSH Project Bricks - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">CSH Project Bricks</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="submit.php">New Brick</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <form class="form-horizontal">
        <fieldset>
            <legend>Submit a new Project Brick</legend>
            <div class="control-group">
                <label class="control-label" for="projectName">Project Name/Title</label>
                <div class="controls">
                    <input type="text" class="input-" id="projectName">
                </div>
                <label class="control-label" for="committee">Committee Name</label>
                <div class="controls">
                    <select id=committee">
                        <option>R & D</option>
                        <option>OpComm</option>
                        <option>Evals</option>
                        <option>History</option>
                        <option>Financial</option>
                        <option>Imps</option>
                        <option>Social</option>
                        <option>Other...</option>
                    </select>
                </div>
                <label class="control-label" for="projectDate">Date</label>
                <div class="controls">
                    <input type="date" class="input-large" id=projectDate>
                </div>
                <label class="control-label" for="description">Project Description</label>
                <div class="controls">
                    <textarea class="input-large" id=description" rows="4"></textarea>
                </div>
                <label class="control-label" for="leader">Project Leader</label>
                <div class="controls">
                    <input type="text" value="<?=$_SERVER['WEBAUTH_LDAP_CN']?>" class="input-large" id="leader">
                </div>
            </div>
        </fieldset>
    </form>

</div> <!-- /container -->

</body>
</html>
