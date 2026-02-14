<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bus Pass Management System || About Us Page</title>

    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>

    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
    
    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>
<body>  
    <!-- Banner Section -->
    <div class="agileits-banner">
        <div class="bnr-agileinfo"> 
            <!-- Navigation -->
            <?php include_once('includes/header.php'); ?>
            <!-- End Navigation -->
            
            <!-- Banner Text -->
            <div class="banner-text agileinfo about-bnrtext"> 
                <div class="container">
                    <h2><a href="index.php">Home</a> / About</h2> 
                </div>
            </div>
            <!-- End Banner Text -->   
        </div>
    </div>
    <!-- End Banner --> 

    <!-- Welcome Section -->
    <div class="welcome" id="welcome">
        <?php
        $sql = "SELECT * FROM tblpage WHERE PageType='aboutus'"; // Fetch about us page content
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);  // Fetch all rows
        
        if ($query->rowCount() > 0) {
            foreach ($results as $row) { // Loop through results
        ?>
        <div class="container">   
            <div class="agileits-title">
                <h3><?php echo $row->PageTitle; ?></h3> <!-- Display the page title -->
            </div> 
            <div class="welcomerow-agileinfo">
                <!-- Updated Description for Bus Pass System -->
                <p>
                    Welcome to the Bus Pass Management System! Our system is designed to simplify the process of applying for, managing, and renewing bus passes for students, employees, and the general public. We aim to provide an easy-to-use platform that ensures seamless access to bus travel across the city. Whether you're a student, commuter, or senior citizen, our bus pass system makes your daily travel more convenient and affordable. Stay connected and travel hassle-free with our service.
                </p>
            </div> 
        </div> 
        <?php
            }
        }
        ?>
    </div>
    <!-- End Welcome -->

    <!-- Footer -->
    <?php include_once('includes/footer.php'); ?>  
    <!-- End Footer -->

    <!-- JS Files -->
    <script src="js/jquery-2.2.3.min.js"></script> 
    <script src="js/SmoothScroll.min.js"></script>
    <script src="js/jarallax.js"></script> 
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>  

    <script type="text/javascript" src="js/numscroller-1.0.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){        
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>  

    <script src="js/bootstrap.js"></script> <!-- Bootstrap JS -->
</body>
</html>
