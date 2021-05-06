<?php include("layouts/header.php") ?>
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h3>Kalkulator <i>Body Surface Area</i> & <i>Body Mass Index</i></h3>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="height" class="col-sm-4 "><b> Tinggi Badan </b></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="height" name="height" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">CM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="hospitweightalization_date" class="col-sm-4"><b> Berat Badan </b></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="weight" name="weight" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">KG</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block float-end mt-4" id="calculate_BSA"> Hitung BSA & BMI</button>
                        <br>
                        <h3 id="resultBMI"></h3>
                    </div>
                    <div class="col-sm-6 ">

                        <div id="descriptionBMI" hidden>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th> Kategori :</th>
                                            <th> Perempuan :</th>
                                            <th> Laki-laki :</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kurus</td>
                                            <td>
                                                &lt; 17 kg/m2 </td>
                                            <td>
                                                &lt; 18 kg/m2 </td>
                                        </tr>
                                        <tr>
                                            <td>Normal</td>
                                            <td>
                                                17 - 23 kg/m2 </td>
                                            <td>
                                                18 - 25 kg/m2 </td>
                                        </tr>
                                        <tr>
                                            <td>Kegemukan</td>
                                            <td>
                                                23 - 27 kg/m2 </td>
                                            <td>
                                                25 - 27 kg/m2 </td>
                                        </tr>
                                        <tr>
                                            <td>Obesitas</td>
                                            <td>
                                                &gt; 27 kg/m2 </td>
                                            <td>
                                                &gt; 27 kg/m2 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <small>Sumber : Pedoman praktis terapi gizi medis Departemen Kesehatan RI 2003</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#calculate_BSA").click(function() {
            const height = $("#height").val();
            const weight = $("#weight").val();
            if (height == '') {
                swal({
                    title: 'Tinggi Badan Harus Di isi !',
                    type: 'warning',
                    padding: '2em'
                });
            } else if (weight == '') {
                swal({
                    title: 'Berat Badan Harus Di isi !',
                    type: 'warning',
                    padding: '2em'
                });
            } else {
                const body = height * weight;
                //calculate BMI
                const height_meter = height / 100;
                const height2 = height_meter * height_meter;
                const bmi = weight / height2;
                const resultBMI = bmi.toFixed(2);
                $("#resultBMI").html('<b>Body Mass Index : ' + resultBMI + '  kg/m<sup>2</sup></b>');
                $("#descriptionBMI").removeAttr("hidden");
            }
        });
    });
</script>
<?php include("layouts/footer.php") ?>