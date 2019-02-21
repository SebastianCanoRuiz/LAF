<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DEMO LAF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Demo LAF" />
	<meta name="author" content="LAF" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="LAF Facebook"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="@LAF" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="#">DEMO <em>LAF</em></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1 main-nav">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Inicio</a></li>
						<li><a href="#" data-nav-section="about">Acerca de</a></li>
						<li><a href="#" data-nav-section="practice-areas">Servicios</a></li>
						<li><a href="#" data-nav-section="our-team">Nuestro Equipo</a></li>
						<li class="btn-cta"><a href="#" data-nav-section="contact"><span>Contáctenos</span></a></li>
						<li class="btn-cta"><a href="{{ url('/login') }}" class="external" style="color: #EE811A">Iniciar DEMO</a></li> 
						<!-- Para crear links externos -->
						<!-- <li><a href="" class="external">External</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<section id="gtco-hero" class="gtco-cover" style="background-image: url('{{ asset('assets/images/img_bg_4.jpg') }}');"  data-section="home"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeIn">SINTRASJACOL<br> <small style="color:#FFF700">#DerechoParaLaGente</small></h1>
							<p class="gtco-video-link animate-box" data-animate-effect="fadeIn"><a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-controller-play"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="gtco-about" data-section="about">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Bienvenido a nuestras oficinas LAF</h1>
					<br>
					<p class="sub">La presente DEMO, tiene como fin que usted pueda conocer de manera general el sistema de trabajo de nuestro Sindicato dentro de las Empresas, aprovechando al máximo el uso de las TICs, motivo por el cual no estarán habilitadas todas las funciones propias del aplicativo que aquí se muestra.
					    
					    Esperamos que sea de su gusto nuestro sistema de funcionamiento y en caso de cualquier duda y sugerencia por favor haga click <a href="#gtco-contact">aquí</a></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn" style="font-size: 70pt">Bienvenido</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/img_1.jpg') }}" class="img-responsive" alt="Demo LAF">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="heading-colored">¿Quiénes Somos?</h2>
					<p style="text-align: justify">Somos el “SINDICATO NACIONAL DE TRABAJADORES Y ASESORES DE SERVICIOS JURÍDICOS Y ADMINISTRATIVOS DE COLOMBIA”, identificada con la sigla “SINTRASJACOL”, la cual se establece en una organización sindical de industria, de primer grado, para los trabajadores y las trabajadoras de la rama de los servicios legales y del sector administrativo, así como las entidades asociadas, complementarias, conexas o de las que les presten servicios o sean los proveedores de éstas, que desempeñen un oficio de tipo específico, profesional, técnico o tecnológico.</p>

                    <div class="subapartado">
                        <div class="titulo">
                            <span class="read-more heading-colored titulo" >Leer más... <i class="icon-chevron-right"></i></span>
                        </div>

                        <div class="info">
                            <br>
                            <h2 class="heading-colored">Nuestro Régimen Jurídico</h2>
                            <p style="text-align: justify">Nuestro Sindicato se organiza y funciona de conformidad con los convenios internacionales de la OIT, la Constitución Nacional, la Segunda Parte del Código Sustantivo del Trabajo relativa al de Derecho Colectivo del Trabajo, el Título II del Decreto 1072 de 2015, la Resolución 810 de 2014 emanada del Ministerio del Trabajo y las demás disposiciones pertinentes sobre la materia actualmente vigentes así como las que el Estado colombiano promulgue en adelante y los Estatutos del Sindicato.</p>

                            <h2 class="heading-colored">Nuestro Objeto Social.</h2>
                            <p style="text-align: justify">SINTRASJACOL tiene como objeto principal impulsar y promover el desarrollo profesional de los afiliados que representa, generando oportunidades y condiciones óptimas para el ejercicio de su actividad profesional, que les permitan generar ingresos individuales y riqueza colectiva, y mejorar su calidad de vida y dignificar su actividad, mediante una gestión democrática y participativa de todos los miembros de la organización sindical.
                            </p>
                        </div>

                    </div>

				</div>
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" data-section="practice-areas">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Nuestros Servicios</h1>
					<p class="sub">Nuestro principal beneficio para su Empresa, es la protección jurídica laboral, que permitirá minimizar el riesgo de futuros pleitos judiciales, lo que es una evidente protección al patrimonio de su Empresa.
                    </p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn" style="font-size: 70pt"><span>Servicios</span></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/scale.png') }}" alt="Demo LAF">
						</div>
						<div class="gtco-copy">
							<h3>Contratos</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/scale.png') }}" alt="Demo LAF">
						</div>
						<div class="gtco-copy">
							<h3>Finiquitos</h3>
							<p>Reducir el riesgo de accidentes laborales y enfermedades laborales.</p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/scale.png') }}" alt="Demo LAF">
						</div>
						<div class="gtco-copy">
							<h3>Otro servicio</h3>
							<p>Minimizar el riesgo de pleitos judiciales de relaciones laborales.</p>
						</div>
					</div>

				</div>
				<div class="col-md-6">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/scale.png') }}" alt="Demo LAF">
						</div>
						<div class="gtco-copy">
							<h3>Otro servicio x2</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/scale.png') }}" alt="Demo LAF">
						</div>
						<div class="gtco-copy">
							<h3>Otro servicio x3</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/scale.png') }}" alt="Demo LAF">
						</div>
						<div class="gtco-copy">
							<h3>Otro servicio x4</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="gtco-our-team" data-section="our-team">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Nuestro Equipo</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn" style="font-size: 70pt">Our Team</p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/img_team_1.jpg') }}" class="img-responsive" alt="Demo LAF">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Hilberson</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

			<div class="row team-item gtco-team">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/img_team_2.jpg') }}" class="img-responsive" alt="Demo LAF">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>Carlos Mario</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/img_team_3.jpg') }}" class="img-responsive" alt="Demo LAF">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Carlos</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

			<div class="row team-item gtco-team">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/img_team_4.jpg') }}" class="img-responsive" alt="Demo LAF">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>Sebastian</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

		</div>
	</section>

	<section id="gtco-contact" data-section="contact">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Contáctenos</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn" style="font-size: 70pt">Contáctenos</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<form action="#">
						<div class="form-group">
							<label for="name" class="sr-only">Nombre</label>
							<input type="text" class="form-control" placeholder="Nombre" id="name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Correo Electrónico</label>
							<input type="text" class="form-control" placeholder="Email" id="email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Mensaje</label>
							<textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Mensaje"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar Mensaje" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-4 col-md-pull-6 animate-box">
					<div class="gtco-contact-info">
						<ul>
							<li class="address">Tuluá Valle, Carrera 27 # 27 -19, oficina 104</li>
							<li>
							    <div style="position: relative; padding-bottom: 56.25%; height: 90%; width: 120%; overflow hidden;">
							        
    							    <iframe style="position: absolute; top:0; left: 0; width:100%; height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.674684240817!2d-76.19650804003294!3d4.084097007038725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e39c5c68769f2bb%3A0xccb796d07632ce0d!2sCra.+27+%26+Cl.+27%2C+Tulu%C3%A1%2C+Valle+del+Cauca!5e0!3m2!1ses!2sco!4v1550216668256" width="450" height="315" frameborder="0" style="border:0" allowfullscreen>
    							    </iframe>
    							</div>        
    						</li>
							<li class="phone"><a href="tel://+573136027260">3136027269 - 3136720002</a></li>
							<li class="email"><a href="mailto:sintrasjacol@laf-demo.xyz">sintrasjacol@laf-demo.xyz</a></li>
							<li class="url"><a href="http://laf-demo.xyz">http://laf-demo.xyz</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="gtco-footer" role="contentinfo">
		<div class="container">
			
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy;Todos los derechos reservados.</small> 
						<small class="block">Diseñado por <a href="" target="_blank">SINTRASJACOL</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar -->
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>

