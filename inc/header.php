<?php 
$pageTitle = "Zaizai Group";
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo $pageTitle; ?></title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="" />
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">




		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
					var myCenter=new google.maps.LatLng(51.508742,-0.120850);
		var marker;

		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker=new google.maps.Marker({
		  position:myCenter,
		  animation:google.maps.Animation.BOUNCE
		  });

		marker.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>





        <!-- CSS code from Bootply.com editor -->

        <style type="text/css">
            body {
                  padding-top: 50px;
                }

            .navbar-brand h3{
                color:  #8f9296;
				font-size: 34px;
				font-weight: normal;
				margin: 0;
            }
            .navbar-brand h3 span{
                	color:  #446600;
                }

        </style>
    </head>

    <!-- HTML code from Bootply.com editor -->

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" rel="home" href="index.php"><h3>Zai<span>zai</span></h3></a>
	</div>

	<div class="collapse navbar-collapse">

		<ul class="nav navbar-nav">
			<li><a href="blog.php">Blog</a></li>
			<li><a href="store.php">Store</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>

		<div class="col-sm-3 col-md-3 pull-right">
        <div class="navbar-text"> <i class="fa fa-spinner fa-pulse"></i> </div>
		<form class="navbar-form" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
			</div>
		</div>
		</form>
		</div>

	</div>
</div>


