<?php include("layouts/header.php") ?>
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h3><i>Body Surface Area Calculator </i></h3>
                <hr>
                <div class="row">
                    <div class="col-sm-6  border-end">
                        <div class="form-group row">
                            <label for="height" class="col-sm-4 text-dark"><b> Height </b></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" class="form-control " id="height" name="height" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">CM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="hospitweightalization_date" class="col-sm-4 text-dark"><b> Weight </b></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="weight" name="weight" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">KG</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary float-end mt-3 btn-block" id="calculate_BSA"> Calculate BSA</button>
                    </div>
                    <div class="col-sm-6 text-center">
                        <h3 id="resultBSA"><b>Body Surface Area </b></h3>
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
                //Calculate BSA
                const bsa = Math.sqrt(body) / 60;
                const resultBSA = bsa.toFixed(2);
                $("#resultBSA").html('<b>Body Surface Area  <br>  <br> ' + resultBSA + ' m<sup>2</sup></b>');
                $("#descriptionBMI").removeAttr("hidden");
            }
        });
    });
</script>
<?php include("layouts/footer.php") ?>