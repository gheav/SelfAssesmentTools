<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Halo Infeksi | Spot Sehat</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Canonical SEO -->
	<link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard" />
	<meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
	<meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
	<meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
	<meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@creativetim">
	<meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
	<meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
	<meta name="twitter:creator" content="@creativetim">
	<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">
	<!-- Open Graph data -->
	<meta property="og:title" content="Paper Bootstrap Wizard by Creative Tim | Free Boostrap Wizard" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="https://demos.creative-tim.com/paper-bootstrap-wizard/wizard-list-place.html" />
	<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg" />
	<meta property="og:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors." />
	<meta property="og:site_name" content="Creative Tim" />
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	<!-- Fonts and Icons -->
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background-image: url('assets/img/medical.png')">
		<!--   Creative Tim Branding   -->
		<a href="/">
			<div class="logo-container">
				<div class="logo">
					<img src="assets/img/new_logo.png">
				</div>
				<div class="brand" style="color: #15a6f7;">
					Spot Sehat
				</div>
			</div>
		</a>
		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="azure" id="wizardProfile">
							<form action="/spotsehat.com/halo-infeksi/result.php" method="GET">
								<!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->
								<div class="wizard-header text-center">
									<h3 class="wizard-title">Halo Sahabat Sehat!</h3>
									<p class="category">Yuk, Kenali luka kamu biar tepat perawatannya.</p>
								</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
										<div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
										<li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Data Diri
											</a>
										</li>
										<li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												Luka
											</a>
										</li>
										<li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Tubuh
											</a>
										</li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane" id="about">
										<div class="row">
											<h5 class="info-text"> Isi data kamu dulu yuk...</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
														<input type="file" id="wizard-picture">
													</div>
													<h6>Hai, Sahabat...</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Nama Lengkap </label>
													<input name="firstname" type="text" class="form-control" placeholder="Andrew...">
												</div>
												<div class="form-group">
													<label>Tanggal Lahir</label>
													<input name="lastname" type="date" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="account">
										<h5 class="info-text"> Gimana kondisi luka kamu ? </h5>
										<div class="row">
											<div class="col-sm-12 ">

												<div class="form-group">
													<label for=""> Apakah luka kamu berwarna kemerahan ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="lukaMerah" id="lukaMerah1" value="1" required>
														<label class="form-check-label" for="lukaMerah1">Iya</label>
														&emsp;
														<input class="form-check-input" type="radio" name="lukaMerah" id="lukaMerah2" value="0" required>
														<label class="form-check-label" for="lukaMerah2">Tidak</label>
													</div>
												</div>
												<div class="form-group">
													<label for="">Apakah sekitar luka kamu bengkak ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="lukaBengkak" id="lukaBengkak1" value="1" required>
														<label class="form-check-label" for="lukaBengkak1">Iya</label>
														&emsp;
														<input class="form-check-input" type="radio" name="lukaBengkak" id="lukaBengkak2" value="0" required>
														<label class="form-check-label" for="lukaBengkak2">Tidak</label>
													</div>
												</div>
												<div class="form-group">
													<label for="">Apakah lukamu terasa panas ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="lukaPanas" id="lukaPanas1" value="1" required>
														<label class="form-check-label" for="lukaPanas1">Iya</label>
														&emsp;
														<input class="form-check-input" type="radio" name="lukaPanas" id="lukaPanas2" value="0" required>
														<label class="form-check-label" for="lukaPanas2">Tidak</label>
													</div>
												</div>
												<div class="form-group">
													<label for="">Apakah lukamu mengeluarkan darah ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="lukaBerdarah" id="lukaBerdarah1" value="1" required>
														<label class="form-check-label" for="lukaBerdarah1">Iya</label>
														&emsp;
														<input class="form-check-input" type="radio" name="lukaBerdarah" id="lukaBerdarah2" value="0" required>
														<label class="form-check-label" for="lukaBerdarah2">Tidak</label>
													</div>
												</div>
												<div class="form-group">
													<label for="">Apakah terdapat nanah pada luka kamu ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="lukaBernanah" id="lukaBernanah1" value="1" required>
														<label class="form-check-label" for="lukaBernanah1">Ada</label>
														&emsp;
														<input class="form-check-input" type="radio" name="lukaBernanah" id="lukaBernanah2" value="0" required>
														<label class="form-check-label" for="lukaBernanah2">Tidak</label>
													</div>
												</div>
												<div class="form-group">
													<label for="">Apakah ada bau tidak sedap dari lukamu ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="lukaBau" id="lukaBau1" value="1" required>
														<label class="form-check-label" for="lukaBau1">Ada</label>
														&emsp;
														<input class="form-check-input" type="radio" name="lukaBau" id="lukaBau2" value="0" required>
														<label class="form-check-label" for="lukaBau2">Tidak</label>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="tab-pane" id="address">
										<div class="row">
											<div class="col-sm-12">
												<h5 class="info-text"> Gimana Kondisi tubuh kamu ? </h5>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<label for="">Apakah kamu merasa nyeri di area luka ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="nyeriLuka" id="nyeriLuka1" value="1" required>
														<label class="form-check-label" for="nyeriLuka1">Iya</label>
														&emsp;
														<input class="form-check-input" type="radio" name="nyeriLuka" id="nyeriLuka2" value="0" required>
														<label class="form-check-label" for="nyeriLuka2">Tidak</label>
													</div>
												</div>
												<div class="form-group">
													<label>Apakah kamu demam atau suhu tubuhmu &nbsp; > 38&#8451; ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="demam" id="demam1" value="1" required>
														<label class="form-check-label" for="demam1">Iya</label>
														&emsp;&emsp;
														<input class="form-check-input" type="radio" name="demam" id="demam2" value="0" required>
														<label class="form-check-label" for="demam2">Tidak</label>
													</div>
												</div>
												<div class="form-group">
													<label for="">Apakah kamu merasa mati rasa di sekitar area luka ?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="matiRasa" id="matiRasa1" value="1" required>
														<label class="form-check-label" for="matiRasa1">Ada</label>
														&emsp;
														<input class="form-check-input" type="radio" name="matiRasa" id="matiRasa2" value="0" required>
														<label class="form-check-label" for="matiRasa2">Tidak</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wizard-footer">
									<div class="pull-right">
										<input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Berikutnya' />
										<input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Cek Infeksi' />
									</div>
									<div class="pull-left">
										<input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Kembali' />
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<!-- wizard container -->
				</div>
			</div>
			<!-- end row -->
		</div>
		<!--  big container -->
	</div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<!--  Plugin for the Wizard -->
<script src="assets/js/demo.js" type="text/javascript"></script>
<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>