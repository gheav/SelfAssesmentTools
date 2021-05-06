<?php include("layouts/header.php") ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Kalkulator Balance Cairan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 border-end">
                    <h6>Data Umum :</h6>
                    <div class="mb-3 row">
                        <label for="height" class="col-sm-4 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="height">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="weight" class="col-sm-4 col-form-label">Berat Badan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="weight">
                        </div>
                    </div>
                    <hr>
                    <h6>Cairan Masuk</h6>
                    <div class="mb-3 row">
                        <label for="inputWater" class="col-sm-4 col-form-label">Air (makan+Minum) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputWater">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputInfuse" class="col-sm-4 col-form-label">Cairan Infus </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputInfuse">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDrugInjection" class="col-sm-4 col-form-label">Therapi Injeksi </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputDrugInjection">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTransfusion" class="col-sm-4 col-form-label">Transfusi </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputTransfusion">
                        </div>
                    </div>
                    <hr>
                    <h6>Cairan Keluar</h6>
                    <div class="mb-3 row">
                        <label for="outputUrine" class="col-sm-4 col-form-label">Urine</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="outputUrine">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="outputFeces" class="col-sm-4 col-form-label">Feses</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="outputFeces" value="100">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="result"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#weight").keyup(function() {
            const weight = Number($('#weight').val());
            const resultIWL = (15 * weight) / 24;
            const resultAM = 5 * weight;
            $("#result").html('<b>Insensible Water Loss : ' + resultIWL + ' /day</b> <br> <b>Air Metabolisme  : ' + resultAM + ' /day</b>');
        });

    });
</script>

<?php include("layouts/footer.php") ?>