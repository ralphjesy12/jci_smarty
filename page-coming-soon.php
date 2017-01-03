
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <?php wp_head();?>

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="<?=get_template_directory_uri()?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="<?=get_template_directory_uri()?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="<?=get_template_directory_uri()?>/assets/css/layout.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="<?=get_template_directory_uri()?>/assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="<?=get_template_directory_uri()?>/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />


    <link rel="apple-touch-icon" sizes="180x180" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/manifest.json">
    <link rel="mask-icon" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/favicon.ico">
    <meta name="msapplication-config" content="<?=get_stylesheet_directory_uri();?>/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<!--
AVAILABLE BODY CLASSES:

smoothscroll 			= create a browser smooth scroll
enable-animation		= enable WOW animations

bg-grey					= grey background
grain-grey				= grey grain background
grain-blue				= blue grain background
grain-green				= green grain background
grain-blue				= blue grain background
grain-orange			= orange grain background
grain-yellow			= yellow grain background

boxed 					= boxed layout
pattern1 ... patern11	= pattern background
menu-vertical-hide		= hidden, open on click

BACKGROUND IMAGE [together with .boxed class]
data-background="<?=get_template_directory_uri()?>/assets/images/boxed_background/1.jpg"
-->
<body class="enable-animation">
    <div id="fb-root"></div>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '540263062836547',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <!-- wrapper -->
    <div id="wrapper">

        <!-- HEADER -->
        <div id="header" class="sticky transparent clearfix">
            <!-- TOP NAV -->
            <header id="topNav">
                <div class="container"><!-- add .full-container for fullwidth -->

                    <ul class="pull-right list-inline mobile-block list-social-icons margin-top-30 hidden-xs">
                        <li>
                            <a href="https://www.facebook.com/jciimuswagayway/" class="social-icon social-icon-transparent social-icon-sm social-facebook pull-left" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-icon social-icon-transparent social-icon-sm social-twitter pull-left" data-toggle="tooltip" data-placement="bottom" title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:contactus@jciimuswagayway.org" data-toggle="modal" data-target="#contactModal" class="social-icon social-icon-transparent social-icon-sm pull-left" data-placement="bottom" title="Contact Us">
                                <i class="et-envelope"></i>
                                <i class="et-envelope"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Logo -->
                    <a class="logo pull-left" href="<?=site_url()?>">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/Logo-JCI-Imus-Wagayway-500-white.png" alt="" />
                    </a>

                </div>
            </header>

        </div>
        <!-- /HEADER -->



        <!-- -->
        <section id="slider" class="fullheight" style="background:transparent">
            <div class="overlay dark-5"><!-- dark overlay [0 to 9 opacity] --></div>

            <div class="display-table">
                <div class="display-table-cell vertical-align-middle">
                    <div class="container text-center">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/Logo-JCI-Imus-Wagayway-500-white.png" style="display:block;margin:0 auto;height:80px;">

                        <h1 class="margin-bottom-20 size-20 margin-top-0">OFFICIAL WEBSITE</h1>

                        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/coming-soon.png" style="display:block;margin:0 auto;height:100px;">

                        <div style="max-width:550px; margin:auto; margin-top:60px; margin-bottom:80px;">
                            <div class="countdown squared dark theme-style" data-labels="years,months,weeks,days,hour,min,sec" data-from="January 02, 2017 08:00:00"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
                        </div>
                        <a href="#" id="shareBtn" class=" btn btn-block btn-social btn-facebook" style=" max-width: 300px; text-align: center; margin: 0 auto;
">
                            <i class="fa fa-facebook"></i> Share us on Facebook
                        </a>
                    </div>
                </div>



            </section>
            <!-- / -->




        </div>
        <!-- /wrapper -->



        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = '<?=get_template_directory_uri()?>/assets/plugins/';</script>
        <script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

        <script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/scripts.js"></script>
        <script type='text/javascript' src='<?=get_stylesheet_directory_uri()?>/assets/js/jquery.backstretch.min.js'></script>

        <!-- Background Slider (Backstretch) -->
        <script>

        var userMd5 ='';
        var userName;
        jQuery.backstretch([
            "<?=get_stylesheet_directory_uri()?>/assets/img/project-1.jpg",
            "<?=get_stylesheet_directory_uri()?>/assets/img/project-2.jpg",
            "<?=get_stylesheet_directory_uri()?>/assets/img/project-3.jpg",
            "<?=get_stylesheet_directory_uri()?>/assets/img/project-4.jpg",
            "<?=get_stylesheet_directory_uri()?>/assets/img/project-5.jpg"
        ], {
            fade: 1000,
            duration: 5000
        });


        </script>

        <script>
        document.getElementById('shareBtn').onclick = function() {
          FB.ui({
            method: 'share',
            display: 'popup',
            href: 'http://jciimuswagayway.org/',
          }, function(response){});
        }
        </script>

    </body>
    </html>
