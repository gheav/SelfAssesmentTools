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
<?php include("layouts/header.php") ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-center">
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
                    <a href="/infectionChecker.php" class="btn btn-primary w-100 mt-3">Cek Ulang </a>
                </div>
                <div class="col-sm-8">
                    <?php if ($TotalScore > 1 && $TotalScore <= 4) { ?>
                        <h4 class="mt-3 fw-bold text-warning">Skor Penilaian : <?= $TotalScore; ?> | Kondisi Luka Inflamasi</h4>
                        <hr>
                        • Makanlah makanan yang bergizi
                        <br>
                        • Lakukan perawatan luka setiap hari
                        <br>
                        • Cuci tangan sebelum dan sesudah perawatan luka
                        <br>
                        • Batasi aktivitas pada daerah luka
                        <?php if ($lukaBerdarah == 1) { ?>
                            <h4 class="mt-3 fw-bold text-danger">Skor Penilaian : <?= $TotalScore; ?> | Kondisi Luka Berdarah :</h4>

                            • Tekan luka dengan kain bersih/ verban 10-15 menit
                            <br>
                            • Perdarahan berhenti tutup dengan verban yang lebih tebal
                            <br>
                            • Jika setelah 15 menit perdarahan tidak berhenti, pergi ke dokter/fasilitas kesehatan

                        <?php }  ?>
                    <?php } elseif ($TotalScore >= 5) { ?>

                        <h4 class="mt-3 fw-bold text-danger">Skor Penilaian : <?= $TotalScore; ?> | Kondisi Luka Infeksi</h4>
                        <hr>
                        • Lakukan perawatan luka dan tutup luka
                        <br>
                        • Cuci tangan sebelum dan sesudah perawatan luka
                        <br>
                        • Pergi ke dokter/ fasilitas kesehatan
                        <?php if ($lukaBerdarah == 1) { ?>
                            <h4 class="mt-3 fw-bold text-danger">Skor Penilaian : <?= $TotalScore; ?> | Kondisi Luka Berdarah :</h4>

                            • Tekan luka dengan kain bersih/ verban 10-15 menit
                            <br>
                            • Perdarahan berhenti tutup dengan verban yang lebih tebal
                            <br>
                            • Jika setelah 15 menit perdarahan tidak berhenti, pergi ke dokter/fasilitas kesehatan

                        <?php }  ?>

                    <?php } else { ?>
                        <?php if ($lukaBerdarah == 1) { ?>
                            <h4 class="mt-3 fw-bold text-danger">Skor Penilaian : <?= $TotalScore; ?> | Kondisi Luka Berdarah :</h4>

                            • Tekan luka dengan kain bersih/ verban 10-15 menit
                            <br>
                            • Perdarahan berhenti tutup dengan verban yang lebih tebal
                            <br>
                            • Jika setelah 15 menit perdarahan tidak berhenti, pergi ke dokter/fasilitas kesehatan

                        <?php } else { ?>
                            <h4 class="mt-3 fw-bold text-success">Skor Penilaian : <?= $TotalScore; ?> | Kondisi Luka Baik</h4>
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
        </div>
    </div>
</div>
<?php include("layouts/footer.php") ?>