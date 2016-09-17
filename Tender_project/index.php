 <!-- Bootstrap -->
        <link href="theams\css/bootstrap.min.css" rel="stylesheet">
        <link href="theams\css/responsive-slider.css" rel="stylesheet">
        <link rel="stylesheet" href="theams\css/animate.css">
        <link rel="stylesheet" href="theams\css/font-awesome.min.css">
        <link href="theams\css/style.css" rel="stylesheet" type="text/css">	
       
<!--
          <script src="theams/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed 
        <script src="theams/js/bootstrap.min.js"></script>
        <script src="theams/js/responsive-slider.js"></script>
        <script src="theams/js/wow.min.js"></script>
        <script>
            wow = new WOW(
                    {
                    })
                    .init();
        </script>
        -->
<?php
define('URL', dirname(__FILE__));
define('PATH', $_SERVER['REQUEST_URI']);
?>
<!-- start header -->
<div id="header">
    <?php
                    
   // session_start();
    include'general//Rout/Rout.php';
  //  include '/general/errors.php';
    include 'general\Menu_genarator/Genarator_menu.php';
    include 'general\System_array/System_array.php';
    $genral = new Genarator_menu();
    $rout = new Routing();
    ?>
    <?php include'theams/Views/header.php'; ?>
    <div id="menu">
        <ul id="main">
            <?php
            /*
            if (!isset($_SESSION['user_id'])) {
                echo $genral->GenerateMenu($header_menu1);
            } else {
                echo $genral->GenerateMenu($header_menu2);
            }
             * 
             */
            ?>
        </ul>
    </div>
</div>
<!-- end header -->

<div id="wrapper">
    <!-- start page -->
    <div id="page">
        <?php
       // include'theams/Views/Slide_show.php';
        ?>

        <div id="left_menu" class="sidebar">
            <div id="ser">
                <?php
               
              //  include'view/search/search_form.php';
                ?>
            </div>
            </br>
            <ul>
                <li>
                    <h2>Modulus</h2>
                    <div id='cssmenu'>
                        <ul>
                            <span>
                                <?php// echo $genral->GenerateMenu($left_menu); ?>
                            </span>
                          
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- start content -->
        <div id="content">
            <?php $rout->router(); ?>		

            <?php
            
            /* include'controler/photo_grid_con.php';
              new photo_grid_con();
              photo_grid_con::CheckUpload(); 

            include'controler/search_controler.php';
            new search_controler();
            search_controler::search();*/
            
            ?>


        </div>
        <!-- end content -->

        <!-- start sidebars -->
        <div id="right_menu" class="sidebar">
            <ul>
                <li>
                    <h2>Areas bidding</h2>
                    <div id='cssmenu'>
                        <ul>
                            <span>
                                <?php// echo $genral->GenerateMenu($right_menu); ?> 
                            </span>

                        </ul>
                    </div>


                </li>
            </ul>


        </div>
        <!-- end sidebars -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end page -->
</div>
<div id="footer">
    <?php include'theams/Views/footer.php'; ?>
</div>