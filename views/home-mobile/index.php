<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Home page</title>

	<!-- ================== GET HEADER METAS ================== -->
	<?php require "../_includes/head_metas.php"; ?>

	<!-- ================== GET HEADER GLOBAL CSS ================== -->
	<link href="../../dist/lib-bundle.min.css" rel="stylesheet" />

	<!-- ================== BEGIN PAGE CSS STYLE ================== -->
	<link href="home-mobile.min.css" rel="stylesheet" />
	<link href="../modals/shared/general-modals.min.css" rel="stylesheet" />
	<link href="../modals-landing/shared/general-modals-ext.min.css" rel="stylesheet" />

	<!-- ================== PACE JS ================== -->
	<script src="../../vendor/pace/pace.js"></script>

	<!-- ================== GET GLOBAL JS ================== -->
	<script src="../../dist/lib-bundle.min.js"></script>

</head>

<body class="page-home-mobile type-mobile">

	<!-- ================== BEGIN content-wrapper VIDEO ================== -->

	<section class="section-wrapper" id="section-video">
		<div class="content-wrapper-free">
			<div class="logo">
				<img class="img-fluid" src="../../images/logo/logo.svg" alt="Logo Pilot Hub">
			</div>
			<div class="texto">
				<span class="texto-1">SUMATE A NUESTRA</span>
				<span class="texto-2 ">COMUNIDAD</span>
			</div>
			<div class="icos-seccion-video">
				<div class=icos-seccion-video-wrapper>
					<div class="ico">
						<div class="ico-img">
							<img src="../../images/gral/ico-fotos.svg" class="img-fluid" />
						</div>
						<div class="ico-textos">
							FOTOS
						</div>
					</div>

					<div class="ico">
						<div class="ico-img">
							<img src="../../images/gral/ico-tips.svg" class="img-fluid" />
						</div>
						<div class="ico-textos">
							TIPS
						</div>
					</div>

					<div class="ico">
						<div class="ico-img">
							<img src="../../images/gral/ico-video.svg" class="img-fluid" />
						</div>
						<div class="ico-textos">
							VIDEO
						</div>
					</div>


					<div class="ico">
						<div class="ico-img">
							<img src="../../images/gral/ico-tutorial.svg" class="img-fluid" />
						</div>
						<div class="ico-textos">
							TUTORIAL
						</div>
					</div>


					<div class="ico">
						<div class="ico-img">
							<img src="../../images/gral/ico-event.svg" class="img-fluid" />
						</div>
						<div class="ico-textos">
							EVENTOS
						</div>
					</div>


				</div>

			</div>
			<div id="logo-instagram-welcome" class="instagram">
				<a href="https://www.instagram.com/pilothub/" target="_blank" class="hvr-pop"><img src="../../images/gral/logo-instagram.svg" alt="Instagram Pilot Hub"></a>
				<span class="texto-instagram">
					pilothub
				</span>
			</div>
		</div>
	</section>

	<!-- ================== BEGIN content-wrapper BIENVENIDOS ================== -->

	<section class="section-wrapper" id="section-bienvenidos">

		<div class="content-wrapper-free">

			<!-- <div class="cont-bienvenidos"> -->
			<div class="texto-bienvenidos">
				<span class="tit-bienvenidos">
					BIENVENIDOS
				</span>
				<br>
				<span class="subtit-bienvenidos">
					TU CARRERA COMIENZA
				</span>
				<br>
				<span class="text-bienvenidos">
					Somos un grupo de pilotos experimentado que quiere ayudarte a cumplir tu sueño de ser un piloto profesional.
				</span>

			</div>

		</div>
	</section>

	<!-- ================== BEGIN content-wrapper 1 ================== -->

	<section class="section-wrapper background-section-1" id="section-1">
		<div class="content-wrapper">

			<div class="ico-top-seccion">
				<img src="../../images/gral/ico-nro-1-mobile.svg" class="img-fluid" alt="Bienvenidos" />
			</div>

			<div class="col-content-mobile">
				<h1>SELECCIONÁ TU ESCUELA</h1>


				<div class="item-wrapper ">
					<div class="titulo-item">
						<h2>¿QUÉ DEBO TENER EN CUENTA?</h2>
					</div>
					<div class="content-item-2-col">
						<div class="ico-escuela-1">
							<img src="../../images/gral/ico-escuela-1.svg" class="img-fluid" alt="Selecciona Escuela Bullet" />
						</div>
						<div class="text-item">

							Empezando por las cosas básicas, como: dónde y qué tan lejos queda la escuela, el precio de la hora o el estado de los aviones.<br>
							Hay otras preguntas que debemos hacernos al momento de elegir una escuela.
						</div>
					</div>
					<div class="right">

						<button class="btn ripple-blue apilado text-truncate" onclick="openInternalModal('m-s-1-tener-cuenta', event)">VER MÁS</button>


					</div>
				</div>

				<div class="item-wrapper ">
					<div class="titulo-item">
						<h2>LISTADO DE ESCUELA Y AEROCLUBES</h2>
					</div>
					<div class="content-item-2-col">
						<div class="ico-escuela-1">
							<img src="../../images/gral/ico-escuela-1.svg" class="img-fluid" alt="Selecciona Escuela Bullet" />
						</div>
						<div class="text-item">
							Pronto podrás acceder a la información de todas las escuelas aquí.
						</div>
					</div>
					<!-- <div class="right">

						<button class="btn apilado text-truncate" onclick="openInternalModal('m-s-1-selecciona-escuela', event)">VER MÁS</button>


					</div> -->
				</div>



				<div class="item-wrapper ">
					<div class="ico-section-2 p-tb-15 zoom-80">
						<img src="../../images/gral/logo-anac3.svg" class="img-fluid" alt="ANAC" />
					</div>
					<div class="titulo-item">
						<h2>¿qué ES la ANAC?</h2>
					</div>

					<div class="text-item">
						La ANAC (Administración Nacional de Aviación Civíl) es el ente que regula la aviación en Argentina
					</div>

					<div class="right">

						<button class="btn apilado text-truncate" onclick="openInternalModal('m-s-1-anac', event)">VER MÁS</button>


					</div>
				</div>

				<div class="spacer-end"></div>


				<div class="img-libros">
					<img src="../../images/gral/img-libros.svg" class="img-fluid" alt="Escuela">
				</div>
			</div>

		</div>
	</section>
	<!-- ================== BEGIN content-wrapper 2 ================== -->

	<section class="section-wrapper section-2" id="section-2">
		<div class="content-wrapper">

			<div class="ico-top-seccion">
				<img src="../../images/gral/ico-nro-2-mobile.svg" class="img-fluid" alt="Bienvenidos" />
			</div>

			<!-- AFIP -->

			<div class="col-content-mobile">
				<div class="ico-section-2">
					<img src="../../images/gral/ico-afip.svg" class="img-fluid" alt="Generacion Clave Afip" />
				</div>
				<h2>GENERAR CLAVE FISCAL</h2>
				<div class="text-item">
					Es necesario poseer la Clave Fiscal Nivel 3 para realizar la apertura del CAD.
				</div>
				<div>
					<button class="btn apilado orange text-truncate" onclick="openInternalModal('m-s-2-afip', event)">TUTORIAL</button>

				</div>
			</div>




			<!-- CAD -->

			<div class="col-content-mobile ">
				<div class="ico-section-2-certificacion">
					<img src="../../images/gral/ico-cad.svg" class="img-fluid" alt="CAD">
				</div>
				<h2>APERTURA DEL CAD</h2>
				<div class="text-item">
					¿Que es el CAD? , ¿Para que se usa? ¿Cuáles son los requisitos para abrirlo?

				</div>
				<div>
					<button class="btn apilado orange text-truncate" onclick="openInternalModal('m-s-2-cad', event)">TUTORIAL</button>

				</div>
			</div>

			<!-- CERTIFICACION -->

			<div class="col-content-mobile mb-0">
				<div class="ico-section-2-certificacion">
					<img src="../../images/gral/ico-medico.svg" class="img-fluid" alt="Certificacion Médica">
				</div>
				<h2>certificación medica</h2>
				<div class="text-item">
					¿Que es el CMA?, ¿Cómo y dónde se realiza? Diferencias entre el 1° CMA, las renovaciones y los cambios de clase.
				</div>
				<div>
					<button class="btn apilado orange text-truncate" onclick="openInternalModal('m-s-2-cma', event)">TUTORIAL</button>

				</div>
			</div>

			<div class="spacer-end-section-2"></div>

		</div>
	</section>

	<!-- ================== BEGIN content-wrapper 3 ================== -->

	<section class="section-wrapper section-3" id="section-3">
		<div class="content-wrapper">

			<div class="ico-top-seccion">
				<img src="../../images/gral/ico-nro-3-mobile.svg" class="img-fluid" alt="Bienvenidos" />
			</div>

			<div class="col-content-mobile">
				<h1>Licencia de PPA</h1>
				<div class="subtit">
					Status de APPA (Alumno Piloto Privado de Avión)
				</div>
				<h3 class="naranja">
					Reseña sobre la RAAC 61.101 (Regulaciones Argentinas de Aviación Civil)
				</h3>

				<!-- ******** Requisitos ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-requisitos.svg" class="img-fluid" alt="Requisitos Licencia">
							</div>
							<div class="text-item">
								Requisitos para el otorgamiento de la Licencia.
							</div>
							<div class="botones center">
								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-3-requisitos', event)">VER MÁS</button>
							</div>
						</div>
					</div>
				</div>

				<!-- ******** Conocimientos Teóricos ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-conocimiento.svg" class="img-fluid" alt="Conocimientos Teóricos">
							</div>
							<div class="text-item">
								Conocimientos Teóricos Aeronáuticos
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-3-conocimientos', event)">VER MÁS</button>
							</div>
						</div>
					</div>
				</div>

				<!-- ******** Horas ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<div class="ico-section-3">
								<img src="../../images/gral/ico-horas.svg" class="img-fluid" alt="Horas Vuelos">
							</div>
							<div class="text-item">
								Experiencia de Vuelo para obtener la licencia
								<div class="text-item-2">
									<div class="pop" data-toggle="tooltip" data-placement="top" title="Horas en doble comando">
										<img class="fix-w-25" src="../../images/gral/ico-comando-doble.svg" class="img-fluid">
										<span>30 HS</span>
									</div>
									<div class="pop" data-toggle="tooltip" data-placement="top" title="Horas de piloto al mando">
										<img class="fix-w-25" src="../../images/gral/ico-comando-simple.svg" class="img-fluid">
										<span>10 HS</span>
									</div>
								</div>
								<div class="botones aviacion">

									<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-3-experiencia', event)">VER MÁS</button>
								</div>
							</div>
							<div class="img-horas">
								<img src="../../images/gral/img-horas-40-mobile.svg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>

				<!-- ******** Atribuciones ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ultimo ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-licencia.svg" class="img-fluid" alt="Licencia">
							</div>
							<div class="text-item">
								Atribuciones y limitaciones de la licencia
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-3-atribuciones', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- ******** IMG AVIONES ********** -->
				<div class="img-avion-section-3">
					<img src="../../images/gral/img-avion-section-3.svg" class="img-fluid" alt="Avion Licencia de PPA">
				</div>



				<!-- ******** EXAMEN PPA >>>> TERCER BLOQUE ********** -->

				<h1>Examen PPA</h1>
				<h3 class="naranja">
					Requisitos administrativos previos al exámen
				</h3>

				<!-- ******** Pago ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-pago.svg" class="img-fluid" alt="Pago">
							</div>
							<div class="text-item">
								¿Cómo se abona el exámen?
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-3-abonar', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>


				<!-- examen -->
				<div class="col-content-block">
					<div class="item-wrapper ">
						<div class="content-item-3-col">
							<div class="ico-section-3">
								<img src="../../images/gral/ico-examen.svg" class="img-fluid" alt="En que consiste el examen" />
							</div>
							<div class="text-item">
								¿En qué consiste el examen?
							</div>
							<div class="botones center">

								<button class="btn orange text-truncate" onclick="openInternalModal('m-s-3-examen', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- ******** Costumbres ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ultimo ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-costumbres.svg" class="img-fluid" alt="Buenas Costumbres">
							</div>
							<div class="text-item">
								Prácticas y Buenas costumbres
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-3-costumbres', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- ******** IMG GRADUACION PPA ********** -->

				<div class="img-graduacion-section-3">
					<img src="../../images/gral/img-graduacion-section-3.svg" class="img-fluid" alt="Graduación PPA">
				</div>


			</div> <!-- ******** END col-content-mobile ********** -->
		</div><!-- ******** END content-wrapper ********** -->
	</section><!-- ******** END SECTION ********** -->

	<!-- ================== BEGIN content-wrapper 4 ================== -->

	<section class="section-wrapper section-4" id="section-4">
		<div class="content-wrapper">

			<div class="ico-top-seccion">
				<img src="../../images/gral/ico-nro-4-mobile.svg" class="img-fluid" alt="Bienvenidos" />
			</div>

			<div class="col-content-mobile">
				<h1>Licencia de PcA</h1>
				<div class="subtit">
					Licencia de Piloto Comercial de Avion
				</div>
				<h3 class="naranja">
					Reseña sobre la RAAC 61.121 (Regulaciones Argentinas de Aviación Civil)
				</h3>

				<!-- ******** Requisitos ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-requisitos-2.svg" class="img-fluid" alt="Requisitos Licencia">
							</div>
							<div class="text-item">
								Requisitos para el otorgamiento de la Licencia.
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-4-requisitos', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- ******** Conocimientos Teóricos ********** -->

				<!-- <div class="col-content-block">

					<div class="item-wrapper ">

						<div class="content-item-3-col">

							<div class="ico-section-3">
								<img src="../../images/gral/ico-conocimiento-2.svg" class="img-fluid" alt="Conocimientos Teóricos">
							</div>
							<div class="text-item">
								Conocimientos Teóricos Aeronáuticos
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-4-conocimientos', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div> -->

				<!-- ******** Horas ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<div class="ico-section-3">
								<img src="../../images/gral/ico-horas-2.svg" class="img-fluid" alt="Horas Vuelos">
							</div>
							<div class="text-item">
								Experiencia de Vuelo para obtener la licencia
								<div class="text-item-2">
									<div class="pop" data-toggle="tooltip" data-placement="top" title="Horas de piloto al mando">
										<img src="../../images/gral/ico-hat.svg" class="img-fluid">
										<span class="fix-65">100 HS</span>
									</div>
									<div class="pop" data-toggle="tooltip" data-placement="top" title="Horas de navegación">
										<img src="../../images/gral/ico-mundo-2.svg" class="img-fluid">
										<span class="fix-65">80 HS</span>
									</div>

								</div>
								<div class="text-item-2">
									<div class="pop" data-toggle="tooltip" data-placement="top" title="Horas de vuelo por instrumento">
										<img src="../../images/gral/ico-instrumento.svg" class="img-fluid">
										<span class="fix-65">10 HS</span>
									</div>
									<div class="pop" data-toggle="tooltip" data-placement="top" title="Horas de vuelo nocturnas">
										<img src="../../images/gral/ico-noche-2.svg" class="img-fluid">
										<span class="fix-65">10 HS</span>
									</div>

								</div>
								<div class="botones aviacion">

									<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-4-experiencia', event)">VER MÁS</button>

								</div>
							</div>
							<div class="img-horas">
								<img src="../../images/gral/img-horas-200-mobile.svg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>

				<!-- ******** Simulador ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-simulador-2.svg" class="img-fluid" alt="Horas Simulador"> </div>
							<div class="text-item">
								Horas de Simulador ¿Que temas se toman?
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-4-simulador', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>


				<!-- ******** Atribuciones ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ultimo ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-licencia-2.svg" class="img-fluid" alt="Licencia">
							</div>
							<div class="text-item">
								Atribuciones y limitaciones de la licencia
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-4-atribuciones', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- ******** IMG AVIONES ********** -->
				<div class="img-avion-section-3">
					<img src="../../images/gral/img-avion-section-4.svg" class="img-fluid" alt="Avion Licencia de PPA">
				</div>

				<!-- ******** 	REQUISITOS PCA >>>> SEGUNDO BLOQUE ********** -->
				<h1 class="mb-5">REQUISITOS PREVIOS EXÁMEN</h1>

				<!-- BEGIN CERTIFICACION MEDICA -->
				<div class="col-content-block">
					<div class="item-wrapper">
						<!-- wow fadeIn" data-wow-delay="1.2s" data-wow-offset="350" -->
						<div class="content-item-3-col">
							<div class="ico-section-3">
								<img src="../../images/gral/ico-medico-2.svg" class="img-fluid" alt="Certificación Médica" />
							</div>
							<div class="text-item">
								CMA CLASE I (Certificación Medica)
							</div>
							<div class="botones center">

								<button class="btn orange text-truncate" onclick="openInternalModal('m-s-4-cma1', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- CURSO TEORICO-->
				<div class="col-content-block">
					<div class="item-wrapper">
						<div class="content-item-3-col">
							<div class="ico-section-3">
								<img src="../../images/gral/ico-curso-2.svg" class="img-fluid" alt="Curso" />
							</div>
							<div class="text-item">
								Curso Teorico de PILOTO COMERCIAL (OBLIGATORIO)
							</div>
							<div class="botones center">

								<button class="btn orange text-truncate" onclick="openInternalModal('m-s-4-curso', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- CURSO OPERADOR -->
				<div class="col-content-block">
					<div class="item-wrapper ultimo mb-5">
						<div class="content-item-3-col">
							<div class="ico-section-3">
								<img src="../../images/gral/ico-curso-2.svg" class="img-fluid" alt="Curso Operador" />
							</div>
							<div class="text-item">
								Curso ORR (Operador Radiotelefonista Restringido)
							</div>
							<div class="botones center">

								<button class="btn orange text-truncate" onclick="openInternalModal('m-s-4-curso-oor', event)">VER MÁS</button>


							</div>
						</div>
					</div>
				</div>


				<!-- ******** EXAMEN PCA >>>> TERCER BLOQUE ********** -->

				<h1>Examen PcA</h1>
				<h3 class="naranja">
					Requisitos administrativos previos al exámen
				</h3>

				<!-- ******** Pago ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-pago-2.svg" class="img-fluid" alt="Pago">
							</div>
							<div class="text-item">
								¿Cómo se abona el exámen?
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-3-abonar', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>


				<!-- examen -->
				<div class="col-content-block">
					<div class="item-wrapper ">
						<div class="content-item-3-col">
							<div class="ico-section-3">
								<img src="../../images/gral/ico-examen-2.svg" class="img-fluid" alt="En que consiste el examen" />
							</div>
							<div class="text-item">
								¿En qué consiste el examen?
							</div>
							<div class="botones center">

								<button class="btn orange text-truncate" onclick="openInternalModal('m-s-4-examen', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- ******** Costumbres ********** -->

				<div class="col-content-block">
					<!-- display flex caja contenedora-->
					<div class="item-wrapper ultimo ">
						<!-- caja con bordes-->
						<div class="content-item-3-col">
							<!-- caja con 3 columnas-->
							<div class="ico-section-3">
								<img src="../../images/gral/ico-costumbres-2.svg" class="img-fluid" alt="Buenas Costumbres">
							</div>
							<div class="text-item">
								Prácticas y Buenas costumbres
							</div>
							<div class="botones center">

								<button class="btn ripple orange text-truncate" onclick="openInternalModal('m-s-4-costumbres', event)">VER MÁS</button>

							</div>
						</div>
					</div>
				</div>

				<!-- ******** IMG GRADUACION PPA ********** -->

				<div class="img-licencia-comercial-mobile">
					<img src="../../images/gral/img-licencia-comercial-mobile.svg" class="img-fluid" alt="Graduación PPA">
				</div>


			</div> <!-- ******** END col-content-mobile ********** -->
		</div>
	</section>

	<!-- ================== BEGIN FOOTER ================== -->

	<section class="section-wrapper" id="section-footer">
		<div class="content-wrapper-free">
			<div class="tit-egresado">
				FELICITACIONES!!
				<div class="subtit-egresado">
					YA ERES PILOTO COMERCIAL
				</div>
				<div class="text-egresado">
					NOS GUSTARÍA SEGUIR ACOMPAÑANDOTE EN TU VIDA PROFESIONAL
				</div>
			</div>

			<div class="img-felicitaciones">
				<img src="../../images/gral/img-felicitaciones.svg" class="img-fluid" alt="Egresado">
			</div>
		</div>
	</section>

	<!-- ================== BEGIN BANNER FOOTER ================== -->

	<section class="section-wrapper" id="section-banner-footer">
		<div class="content-wrapper-free pt-5 pb-5">
			<div class="tit-sumate">
				MANTENTE AL DÍA
			</div>
			<div class="text-sumate">
				Estamos continuamente trabajando en <b>nuevos contenidos</b> para uds.
			</div>
			<div class="tit-sumate">
				ENVIANOS TUS FOTOS Y VIDEOS
			</div>
			<div class="text-sumate">
				Seleccionaremos las <b>mejores fotos y videos que Uds. nos envíen</b> y las subiremos a nuestro Instagram
			</div>
			<div class="text-sumate-instagram">
				Sumate a nuestra <span class="ciam">comunidad DE PILOTOS</span>
			</div>

			<div id="logo-instagram-footer-container">
				<div id="logo-instagram-footer" class="instagram">
					<a class="hvr-pop" href="https://www.instagram.com/pilothub/" target="_blank"><img src="../../images/gral/logo-instagram.svg" alt="Instagram Pilot Hub"></a>
					<span class="texto-instagram">
						pilothub
					</span>
				</div>
			</div>


		</div>
	</section>

	<!-- whatsapp -->

	<section class="section-wrapper" id="section-whatsapp">
		<div class="content-wrapper wow fadeIn" data-wow-offset="50">
			<div class="col-content">

				<div class="whatsapp ">

					<a href="https://wa.me/5491123848823" target="_blank" rel="noopener" class="hvr-wobble-vertical"><img src="../../images/gral/ico-whatsapp.svg" alt="WhatsApp Pilot Hub">SI NECESITAS COMUNICARTE PERSONALMENTE</a>




				</div>

			</div>

		</div>
	</section>

	<!-- bloque floating buttons -->
	<div class="boton-float-tramites" id="boton-float-tramites">



		<a href="javascript:void(0)" tabindex="0" class="btn btn-tips btn" role="button" onclick="openExternalModal('modal-indice', event)">
			<img src="../../images/gral/btn-tips.svg">
		</a>

		<a href="javascript:void(0)" tabindex="0" class="btn btn-tramites btn pulse animated infinite fast delay-2s" role="button" onclick="openInternalModal('m-s-tramites', event)">
			<img src="../../images/gral/btn-tramites.svg">
		</a>
	</div>

	<div class="boton-float-instagram" id="boton-float-instagram">
		<a class="btn btn-instagram hvr-buzz-out" href="https://www.instagram.com/pilothub/" target="_blank">
			<img src="../../images/gral/btn-instagram.svg">
		</a>
	</div>
	<!-- END bloque floating buttons -->

	<!-- ================== MODALS INTERNOS (LOADS HTML) ================== -->
	<div id="modal-internal" class="modal fade bs-scrollbar modal-section-gral" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" id="modal-internal-content"></div>
		</div>
	</div>

	<!-- ================== MODAL-LANDING-PLACEHOLDER (LOADS HTML) ================== -->
	<div id="modal-landing" class="modal fade bs-scrollbar modal-externo" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div id="modal-landing-content"></div>
		</div>
	</div>

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="home-mobile.js"></script>
	<script src="../modals/shared/general-modals.js"></script>
	<script src="../modals-landing/shared/general-modals-ext.js"></script>



</body>

</html>