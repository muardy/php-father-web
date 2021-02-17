<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
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

	@if (count($errors) > 0)
                            <div   class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
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


	

		<section class="section overfree">
		
			<div class="container">
				<div class="section-title text-center">
				  
			         <h4> Kami hadir sebagai BIRO KONSULTAN TERPADU, jasa kami meliputi pengurusan berbagai dokumen perizinan, legalitas perusahaan, penyusunan laporan pajak serta jasa kurir JNE untuk pengiriman paket dan dokumen. Kami berdiri sejak 04 juli 2011 menjadikan kami lebih berpengalaman terpercaya dalam memberikan solusi terbaik </h4>
					<hr>
					<p class="lead"> Produk Jasa Pelayanan Kami :</p>
				</div><!-- end section-title -->

				<div class="row service-list text-center">
					<div class="col-md-4 col-sm-12 col-xs-12 first">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-content"></i>
							<div class="service-details">
								<div class="header">
								<nav class="navbar navbar-default yamm">
								  <ul class="nav">
								    <li class="dropdown yamm-fw hasmenu">
				                   
								<a href="#" title="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pembuatan Izin Usaha</a>
								   <ul class="dropdown-menu">
						                <li>
						                    <div class="yamm-content">
							                    <div class="row"> 
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="#">Pembuatan PT</a></li>
							                    			<li><a href="#">Pembuatan PT PMA</a></li>
							                    			<li><a href="#">Pembuatan CV</a></li>
							                    			<li><a href="#">Pembuatan NPWP</a></li>
							                    			<li><a href="#">KTA,SBU,SIUJK</a></li>
							                    			<li><a href="#">PKP</a></li>
							                    			<li><a href="#">Domisili Usaha</a></li>
							                    			<li><a href="#">PIRT</a></li>
							                    			<li><a href="#">SIUP, NIB</a></li>
															<li><a href="#"> DLL </a></li>
							                    		</ul>
							                    	</div>
							                    	
							                    
							                    </div>
						                    </div>
						                </li>
						            </ul>
				                </li>

							</ul>
							</nav>					
							</div>	
															
							
						         		
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-content"></i>
							<div class="service-details">
							<div class="header">
								<nav class="navbar navbar-default yamm">
								  <ul class="nav">
								    <li class="dropdown yamm-fw hasmenu">
				                   
								<a  href="#" title="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Penyusunan Laporan Pajak Perusahaan</a>
								
							
							  <ul class="dropdown-menu">
						                <li>
						                    <div class="yamm-content">
							                    <div class="row"> 
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="#">PPh 21 Karyawan</a></li>
							                    			<li><a href="#">PPh 25/29 Badan</a></li>
							                    			<li><a href="#">PPh Final PP 23</a></li>
							                    			<li><a href="#">PPN </a></li>
							                    			<li><a href="#">SPT Tahunan Perorangan</a></li>
							                    			<li><a href="#">SPT Tahunan Perusahaan</a></li>
							                    			<li><a href="#">Neraca/Laba(Rugi)</a></li>
							                    			<li><a href="#">Review/Audit report</a></li>
							                    		
							                    		</ul>
							                    	</div>
							                    	
							                    
							                    </div>
						                    </div>
						                </li>
						            </ul>
				                </li>

							</ul>
							</nav>					
							</div>	
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-4 col-sm-12 col-xs-12 last">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-content"></i>
							<div class="service-details">
							<div class="header">
								<nav class="navbar navbar-default yamm">
								  <ul class="nav">
								    <li class="dropdown yamm-fw hasmenu">
				                   
								<a  href="#" title="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jasa Kurir JNE</a>
							
						 <ul class="dropdown-menu">
						                <li>
						                    <div class="yamm-content">
							                    <div class="row"> 
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="#">Operasional 09:00-23:00</a></li>
							                    			<li><a href="#">Sejak 01 Mei 2012</a></li>
							                    			<li><a href="#">Pengalaman dalam pelayanan</a></li>
							                    			<li><a href="#">Gratis Pick Up </a></li>
							                    			<li><a href="#">Membantu claim paket</a></li>
							                    			<li><a href="#">Diskon untuk pelanggan tetap</a></li>
							                    			<li><a href="#">Kepuasan pelanggan yang UTAMA</a></li>
							                    			
							                    		
							                    		</ul>
							                    	</div>
							                    	
							                    
							                    </div>
						                    </div>
						                </li>
						            </ul>
				                </li>

							</ul>
							</nav>					
							</div>	
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->
				</div><!-- end row -->

				<hr class="invis2">

				<div class="row">
					<div class="col-md-4">
                        <div class="milestone-counter c1">
                            <img src="images/icon_07.png" alt="" class="alignleft">
                            <h3 class="stat-count">2901</h3>
                            <p>Happy Customers</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c2">
                            <img src="images/icon_08.png" alt="" class="alignleft">
                            <h3 class="stat-count">304</h3>
                            <p>Online Strategy</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c3">
                            <img src="images/icon_09.png" alt="" class="alignleft">
                            <h3 class="stat-count">890</h3>
                            <p>Great Results</p>
                        </div>
                    </div>
                </div>
			</div><!-- end container -->
		</section><!-- end section -->
		
		
		<section class="section bt">
			<div class="container">
				<div class="section-title text-center">
					
					<h3> Profil Kami</h3>
				</div><!-- end section-title -->

				<div class="owl-carousel owl-theme lightcasestudies withhover">
					<div class="item-carousel">
						<div class="case-box">
							<img src="upload/head3.jpeg" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="/ceger"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="item-carousel">
						<div class="case-box">
							<img src="upload/head1.jpeg" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="/artha"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="item-carousel">
						<div class="case-box">
							<img src="upload/alfad.jpeg" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="/alfad"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					</div><!-- end col -->

				</div>
		    </div>
		</section>

	

		<section class="section overfree">
			<div class="icon-center"><img src="upload/head8.png" alt="" class="img-responsive"></div>
			<div class="container">
				<div class="section-title text-center">
					
					<h3>Lokasi Bisnis</h3>
				</div><!-- end section-title -->
				
				 <div id="map"></div>
				   <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    <style>
    </style>

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

    <script>
	mapboxgl.accessToken = 'pk.eyJ1IjoibXVhcmR5IiwiYSI6ImNqeThtMHB2ZzBibXIzbm81cDdwdGQ1bncifQ.i8pmOUbh2sanbAMnIYrLiA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [106.722, -6.25973],
        zoom: 14
    });
	
		var marker = new mapboxgl.Marker()
					.setLngLat([106.72121, -6.26205])
					.addTo(map);
					
					var marker2 = new mapboxgl.Marker()
					.setLngLat([106.72011, -6.25488])
					.addTo(map);
					

    map.on('load', function() {
        map.addSource('places', {
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': [
                    {
                        'type': 'Feature',
                        'properties': {
                            'description':
                                '<strong> <a href="https://www.google.com/maps/place/JNE+Al-Fath/@-6.2548926,106.7179331,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x911c9052ed719db2!8m2!3d-6.2548926!4d106.7201218" class="readmore"> JNE ALFath</a></strong>',
                            'icon': 'marker'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [106.72011, -6.25488]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description':
                                 '<strong><a href="https://www.google.com/maps/place/JNE+Ceger/@-6.2621726,106.7195726,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x4f7a6e6cdd8c2576!8m2!3d-6.2621726!4d106.7217613" class="readmore">PT ARTHAYANDO & JNE Ceger</a> </strong>',
                                  'icon': 'marker' 
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [106.72121, -6.26205]
                        }
                    }
                    
                ]
            }
        });
        // Add a layer showing the places.
        map.addLayer({
            'id': 'places',
            'type': 'symbol',
            'source': 'places',
            'layout': {
                'icon-image': '{icon}-15',
                'icon-allow-overlap': true
            }
        });

        // When a click event occurs on a feature in the places layer, open a popup at the
        // location of the feature, with description HTML from its properties.
        map.on('click', 'places', function(e) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var description = e.features[0].properties.description;

            // Ensure that if the map is zoomed out such that multiple
            // copies of the feature are visible, the popup appears
            // over the copy being pointed to.
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }

            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(description)
                .addTo(map);
        });

        // Change the cursor to a pointer when the mouse is over the places layer.
        map.on('mouseenter', 'places', function() {
            map.getCanvas().style.cursor = 'pointer';
        });

        // Change it back to a pointer when it leaves.
        map.on('mouseleave', 'places', function() {
            map.getCanvas().style.cursor = '';
        });
    });
</script>
             

			
		</section>

			<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-details">
							<h3>Saran dan Pertanyaan</h3>
							<p>Apabila ada Pertanyaan / Saran yang berkaitan dengan kami silahkan isi form berikut</p>

							<p> Kerahasiaan data akan di jaga</p>

							<hr>

					
						</div>
					</div>
					                         
                         

					<div class="col-md-5">
						<form   action="/arthayando/store" class="contactform" method="post">
						{{ csrf_field() }}
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="nama" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						    </div>
						    <div class="form-group">
						        <textarea class="form-control" id="message" placeholder="Message" name="pesan" maxlength="140" rows="7"></textarea>
						    </div>
						    <button type="submit" id="submit" name="submit" class="btn btn-primary" >Submit Form</button>
						</form>
					</div><!-- end col -->

					<div class="col-md-3 mb30">
						<div class="contact-details">
							<ul>
								<li><i class="fa fa-phone"></i> <span>021 733 3029</span></li>
								<li><i class="fa fa-whatsapp"></i> <span>08788 8898 000</span></li>
								<li><i class="fa fa-whatsapp"></i> <span>0812 13353637 </span></li>
								<li><i class="fa fa-fax"></i> <span> 021 733 3020</span></li>
								<li><i class="fa fa-envelope"></i> <span><a href="mailto:arthayando@gmail.com">arthayando@gmail.com</a></span></li>
								<li><i class="fa fa-envelope"></i> <span><a href="mailto:rudi@arthayando.com">rudi@arthayando.com</a></span></li>
							
							</ul>
						</div><!-- end contact details -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->
	

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