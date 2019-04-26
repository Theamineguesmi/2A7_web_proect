<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
               <a class="navbar-brand" href="./"><img src="images/logo3.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo4.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Blog</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="addAdvertisement.html">Add Blog</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="updatead.php">Show Blogs</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Testimonials</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="addTestimonial.html">Add Testimonial</a></li>
                            <li><i class="fa fa-table"></i><a href="updateTestimonial.php">Update Testimonial</a></li>
                            
                        </ul>
                    </li>
                                         <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Advertisements</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="addPublicite.html">Add Advertisement</a></li>
                            <li><i class="fa fa-table"></i><a href="updatePub.php">Update Advertisement</a></li>
                            
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                
                <div class="col-sm-12">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <hr />
        <?php 
    include "C:/wamp64/www/Makhla/sufee-admin-dashboard-master/Entities/testimonial.php";
    include_once "C:/wamp64/www/Makhla/sufee-admin-dashboard-master/Cores/testimonialC.php";
    include_once "../config.php";

    $ref=$_GET['title'];

        $sql="SElECT * From testimonial where title = '".$ref."'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  







    ?>
<form method="GET" action="mod.php" class="form-control">
 <div class="breadcrumbs">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update</strong> Testimonial
                        </div>
                        <form  method="post" enctype="multipart/form-data" action="addTestimonial.php" class="form-horizontal">
<table>
    <?PHP
        foreach($liste as $row){
    ?>
    <tr>
        
            Testimonial title :
        
        <br>
        
            <input type="text" id="title" required="" placeholder="" value="<?PHP echo $row['title']; ?>" class="form-control" name="title">
        
    </tr>
    <br>
    <br>
    <tr>
            Testimonial date :
        <br>
            <input type="Date" id="releaseDate" required="" value="<?PHP echo $row['releaseDate']; ?>" class="form-control" name="releaseDate">
    </tr>
    <br>
    <tr>
            Testimonial message:
    
            <input type="text" id="message" required="" value="<?PHP echo $row['message']; ?>" class="form-control" name="message">
    </tr>
    <br>
    <br>
    <tr>
            Testimonial picture:
    
           <input type="file" id="image" name="image" multiple="" class="form-control-file" value="<?PHP echo $row['image'];?>" >
    </tr>
    <br>
     <?PHP
}
?> 
</table>
</form>
                       
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-sm" value="Confirm">
                            <input type="reset" class="btn btn-danger btn-sm" value="Reset">
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
