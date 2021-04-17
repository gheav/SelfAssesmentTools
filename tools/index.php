<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, Infeksi!</title>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-sm-6">
            <div class="card border border-primary shadow">
                <div class="card-header fw-bold text-primary">
                    Mengenali tanda-tanda infeksi
                </div>
                <div class="card-body">
                    <form action="/spotsehat.com/result.php" method="get">
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <th>No</th>
                                <th>Tanda dan Gejala Luka</th>
                                <th>Keterangan</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1.</td>
                                    <td>Nyeri pada luka</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nyeriLuka" id="nyeriLuka1" value="1" required>
                                            <label class="form-check-label" for="nyeriLuka1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nyeriLuka" id="nyeriLuka2" value="0" required>
                                            <label class="form-check-label" for="nyeriLuka2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2.</td>
                                    <td>Kemerahan pada sekitar luka</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaMerah" id="lukaMerah1" value="1" required>
                                            <label class="form-check-label" for="lukaMerah1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaMerah" id="lukaMerah2" value="0" required>
                                            <label class="form-check-label" for="lukaMerah2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3.</td>
                                    <td>Bengkak pada daerah luka</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBengkak" id="lukaBengkak1" value="1" required>
                                            <label class="form-check-label" for="lukaBengkak1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBengkak" id="lukaBengkak2" value="0" required>
                                            <label class="form-check-label" for="lukaBengkak2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4.</td>
                                    <td>Luka Terasa panas</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaPanas" id="lukaPanas1" value="1" required>
                                            <label class="form-check-label" for="lukaPanas1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaPanas" id="lukaPanas2" value="0" required>
                                            <label class="form-check-label" for="lukaPanas2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5.</td>
                                    <td>Keluar darah dari luka</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBerdarah" id="lukaBerdarah1" value="1" required>
                                            <label class="form-check-label" for="lukaBerdarah1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBerdarah" id="lukaBerdarah2" value="0" required>
                                            <label class="form-check-label" for="lukaBerdarah2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">6.</td>
                                    <td>Terdapat nanah pada luka</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBernanah" id="lukaBernanah1" value="1" required>
                                            <label class="form-check-label" for="lukaBernanah1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBernanah" id="lukaBernanah2" value="0" required>
                                            <label class="form-check-label" for="lukaBernanah2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7.</td>
                                    <td>Bau tidak sedap pada luka</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBau" id="lukaBau1" value="1" required>
                                            <label class="form-check-label" for="lukaBau1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lukaBau" id="lukaBau2" value="0" required>
                                            <label class="form-check-label" for="lukaBau2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">8.</td>
                                    <td>Mati rasa di sekitar area luka.</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="matiRasa" id="matiRasa1" value="1" required>
                                            <label class="form-check-label" for="matiRasa1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="matiRasa" id="matiRasa2" value="0" required>
                                            <label class="form-check-label" for="matiRasa2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9.</td>
                                    <td>Demam > 38&#8451;</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="demam" id="demam1" value="1" required>
                                            <label class="form-check-label" for="demam1">Ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="demam" id="demam2" value="0" required>
                                            <label class="form-check-label" for="demam2">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary w-100">Cek Kondisi Luka</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>