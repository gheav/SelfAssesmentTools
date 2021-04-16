<?php
$nyeriLuka     = $_GET['nyeriLuka'];
$lukaMerah     = $_GET['lukaMerah'];
$lukaPanas     = $_GET['lukaPanas'];
$lukaBengkak   = $_GET['lukaBengkak'];
$lukaBerdarah  = $_GET['lukaBerdarah'];
$lukaBernanah  = $_GET['lukaBernanah'];
$lukaBau       = $_GET['lukaBau'];
$matiRasa      = $_GET['matiRasa'];
$demam         = $_GET['demam'];

$TotalScore = $nyeriLuka + $lukaMerah + $lukaPanas + $lukaBengkak + $lukaBerdarah + $lukaBernanah + $lukaBau + $matiRasa + $demam;
?>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <br>
                                        <br>
                                        <?php if ($TotalScore > 1 && $TotalScore <= 4) { ?>
                                            <img src="https://cdn0.iconfinder.com/data/icons/emoji-3-5/64/silence_quiet_emoji_shh-512.png" width="50%" alt="...">
                                        <?php } elseif ($TotalScore >= 5) { ?>
                                            <img src="https://cdn0.iconfinder.com/data/icons/emoji-3-5/64/scared_smiley_surprised-512.png" width="50%" alt="...">
                                        <?php } else { ?>
                                            <?php if ($lukaBerdarah == 1) { ?>
                                                <img src="https://cdn0.iconfinder.com/data/icons/emoji-3-5/64/shy_blush_emoji-512.png" width="50%" alt="...">
                                            <?php } else { ?>
                                                <img src="https://cdn0.iconfinder.com/data/icons/emoji-3-5/64/thumbup_good_emoticon-512.png" width="50%" alt="...">
                                            <?php } ?>
                                        <?php } ?>

                                    </div>
                                    <div class="col-sm-8">
                                        <?php if ($TotalScore > 1 && $TotalScore <= 4) { ?>
                                            <h4 class="mt-3 fw-bold text-warning"> Kondisi Luka Inflamasi</h4>
                                            • Makanlah makanan yang bergizi
                                            <br>
                                            • Lakukan perawatan luka setiap hari
                                            <br>
                                            • Cuci tangan sebelum dan sesudah perawatan luka
                                            <br>
                                            • Batasi aktivitas pada daerah luka
                                            <?php if ($lukaBerdarah == 1) { ?>
                                                <h4 class="mt-3 fw-bold text-danger"> Kondisi Luka Berdarah :</h4>

                                                • Tekan luka dengan kain bersih/ verban 10-15 menit
                                                <br>
                                                • Perdarahan berhenti tutup dengan verban yang lebih tebal
                                                <br>
                                                • Jika setelah 15 menit perdarahan tidak berhenti, pergi ke dokter/fasilitas kesehatan

                                            <?php }  ?>
                                        <?php } elseif ($TotalScore >= 5) { ?>

                                            <h4 class="mt-3 fw-bold text-danger"> Kondisi Luka Infeksi</h4>
                                            <hr>
                                            • Lakukan perawatan luka dan tutup luka
                                            <br>
                                            • Cuci tangan sebelum dan sesudah perawatan luka
                                            <br>
                                            • Pergi ke dokter/ fasilitas kesehatan
                                            <?php if ($lukaBerdarah == 1) { ?>
                                                <h4 class="mt-3 fw-bold text-danger"> Kondisi Luka Berdarah :</h4>

                                                • Tekan luka dengan kain bersih/ verban 10-15 menit
                                                <br>
                                                • Perdarahan berhenti tutup dengan verban yang lebih tebal
                                                <br>
                                                • Jika setelah 15 menit perdarahan tidak berhenti, pergi ke dokter/fasilitas kesehatan

                                            <?php }  ?>

                                        <?php } else { ?>
                                            <?php if ($lukaBerdarah == 1) { ?>
                                                <h4 class="mt-3 fw-bold text-danger"> Kondisi Luka Berdarah :</h4>

                                                • Tekan luka dengan kain bersih/ verban 10-15 menit
                                                <br>
                                                • Perdarahan berhenti tutup dengan verban yang lebih tebal
                                                <br>
                                                • Jika setelah 15 menit perdarahan tidak berhenti, pergi ke dokter/fasilitas kesehatan

                                            <?php } else { ?>
                                                <h4 class="mt-3 fw-bold text-success"> Kondisi Luka Baik</h4>
                                                <hr>
                                                • Lakukan perawatan luka 1-2 hari sekali
                                                <br>
                                                • Cuci tangan sebelum dan sesudah perawatan luka
                                                <br>
                                                • Jaga luka tetap bersih dan kering, jangan memegang luka
                                                <br>
                                                • Makanlah makanan yang bergizi
                                                <br>
                                                • Batasi aktivitas pada daerah luka
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col-sm-12">
                                    <a href="/spotsehat.com" class="btn btn-primary btn-block ">Cek Ulang Luka </a>
                                </div>
                            </div>
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