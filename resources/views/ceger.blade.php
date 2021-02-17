<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<?php

$connect = new PDO('mysql:host=127.0.0.1;dbname=arthaya1_arthayando','arthaya1_arthayando','irawan081382291699');

function rowcount($connect,$query)
{
	
	$stmt = $connect->prepare($query);
	$stmt->execute();
	return $stmt->rowcount();
}
?>
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Arthayando</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
<link rel="icon" href="{{ asset('css/favsicon.ico') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/animate.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/carousel.css') !!}">
	<link rel="stylesheet" href="{!! asset('style.css') !!}">
   

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>	
	<![endif]-->
					

</head>
<body>
	
	<div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <nav class="topbar-menu">
                            
                        </nav><!-- end menu -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-6">
                        <nav class="topbar-menu">
                            <ul class="list-inline text-right navbar-right">
                              
                                
                            </ul><!-- end list -->
                        </nav><!-- end menu -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

		<header class="header site-header">
			<div class="container">
				<nav class="navbar navbar-default yamm">
				    <div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
                     <a href="/">  <img height="50" width ="200" src="upload/head5.jpeg" alt=""  /> 
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class="active"><a href="/">Home</a></li>
								  
				               
                          
                            </ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->


		<section class="section lb">
			<div class="container">
				<div class="row case-single">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="pitem">
							<div class="case-box">
								<img src="upload/head.jpeg" alt="" class="img-responsive">
							</div><!-- end case-box -->
						</div><!-- end pitem -->
					</div><!-- end col -->

					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="case-details">
							<h3>JNE Ceger</h3>
					
							<a href="https://www.aftership.com/couriers/jne">Lihat paket anda</a><br/>
							<a href="https://ongkir.arthayando.com">Cek Ongkir</a>  							
						</div><!-- end details -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section overfree">
			<div class="row">
	<div class="col-md-4">
                      
                    </div>
	            <div class="col-md-4">
                        <div class="milestone-counter c1">
                            <img src="images/icon_07.png" alt="" class="alignleft">
                            <h3 class="stat-count">	<?php
									echo rowcount($connect,"select *from c_ceger");
									?></h3>
                            <p>Client</p>
                        </div>
                    </div>
					</div>
			
			<div class="container">
			
				<div class="section-title text-center">
					
				
					<h3> Client Kami </h3>
				</div><!-- end section-title -->
				<div class="center-pricing">
				  
			  		<div class="tab-content">
			    		<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row big-pricing">
							<div class="col-md-4 col-sm-6 col-xs-12 colon1 nopad">
									
									<ul class="first-colon">
								
									</ul>
								</div><!-- end col -->
					

						
				
         
								<div class="col-md-4 col-sm-6 col-xs-12 colon1 nopad">
									<div class="pricing-header firstch c0">
										<p>Daftar Client JNE Ceger</p>
								
									</div><!-- end pricing-header -->
									@foreach($c_ceger as $c)
									<ul class="first-colon">
										<li>{{ $c->nama }}
											
											<span>
											
											</span>
										</li>
										
									</ul>
										@endforeach
									</div><!-- end tab-content -->
								
									</div>
								</div><!-- end col -->
								</div>
								</div>
								</div>
								</section>
								
	
<footer class="footer primary-footer">
            <div class="container">
               
           	</div><!-- end container -->
		</footer><!-- end primary-footer -->

		<footer class="footer secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>2020 &copy; <a href="#">Arthayando</a></p>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline">
                            <li> <a href="https://html.design"></a></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
		</footer><!-- end second footer -->
	</div><!-- end wrapper -->

	<!-- jQuery Files -->

	<script src="{!! asset('js/jquery.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/parallax.js') !!}"></script>
	<script src="{!! asset('js/animate.js') !!}"></script>
	<script src="{!! asset('js/owl.carousel.js') !!}"></script>
	<script src="{!! asset('js/custom.js') !!}"></script>

</body>
</html>