<?php
include('config/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="CodersCave Logo" sizes="76x76" href="./assets/img/CodersCave Logo.png">
    <link rel="icon" type="image/png" href="./assets/img/CodersCave Logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Coders Cave</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"/>
    
    <link href="assets/style.css" rel="stylesheet"/>

</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="../website/Coders Cave Website/page/home.php" class="navbar-brand" rel="tooltip" title="Designed and Coded by Serve(8) Web Solutions, Inc." data-placement="bottom" target="">
                    Coders Cave E-Commerce Website
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    <span class="navbar-toggler-bar bar4"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="pages/user_login_page.php" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/user_signup.php" class="nav-link" onclick="scrollToDownload()">
                            <i class="now-ui-icons education_paper"></i>
                            <p>Sign up</p>
                        </a>
                    </li>
					
                    <li class="nav-item">
                        <a class="nav-link" href="pages/products.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Cart</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/ironman.jpg');">
            
                <div class="container">
                    <div class="content-center brand">
                        <img src="./assets/img/CodersCave Logo.png" >
                        <br><br>
                        <h3>Welcome to Coders Cave E-commerce website</h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <br>
                    <div class="col-md-12">
                        <h2 class="title">Products</h2>
                        <div class="typography-line">
                            <p>
                            This is the E-Commerce website Project created for Coders Cave Internship
                            </p>
                        </div>
                        <br>

                        
                        <center>
                        <label><b>Search Product: &nbsp</b></label>       
                                <form method="POST" action="index_search.php" >
                                    <input type="image" title="Search" src="assets/img/search.png" alt="Search" />
                                    <input type="text" name="search" class="search-query" placeholder="Enter product name">
                                </form>
                        </center>
                    </div>
                    <br><hr color="orange">

  <div class="tab-pane  active" id="">
    <ul class="thumbnails">
    <?php
    $query = "SELECT * FROM products ORDER BY prod_name ASC";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['prod_id'];
    
?>   
    <div class="row-sm-3">
        <div class="thumbnail">
            <?php if($res['prod_pic1'] != ""): ?>
            <img src="uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px">
            <?php else: ?>
            <img src="uploads/default.png" width="300px" height="200px">
            <?php endif; ?>
        <div class="caption">
          <h5><b><?php echo $res['prod_name'];?></b></h5>
          <h6><a class="btn btn-success btn-round" title="Click for more details!" href="pages/product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a><medium class="pull-right">Rs.<?php echo $res['prod_price']; ?></medium></h6>
        </div>

        </div>
      <hr color="yellow">
      </div>
             
<?php }?> 

      </ul>
  </div>
        


    </div>     
</div>
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="www.coderscave.com" target="_blank">
                                Coders Cave
                            </a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed By Coders Cave 2023
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/jquery.lightbox-0.5.js"></script>
    <script src="assets/js/bootsshoptgl.js"></script>
     <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>

    <script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="./plugins/fastclick/fastclick.min.js"></script>
    <script src="./plugins/app.min.js"></script>
    <script src="./plugins/demo.js"></script>
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
        });
      });
    </script>

</html>