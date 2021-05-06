<?php include("layouts/header.php") ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="text-center">Hello World, Welcome to Self Assesment Tools</h3>
        </div>
        <div class="card-body">
            <div class="list-group">
                <a href="/infectionChecker.php" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Wound Infection Checker</h5>
                        <small class="text-muted">General Tools</small>
                    </div>
                </a>
                <a href="/BSACalculator.php" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Body Surface Area Calculator</h5>
                        <small class="text-muted">General Tools</small>
                    </div>
                </a>
                <a href="/BMICalculator.php" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Body Mass Index Calculator</h5>
                        <small class="text-muted">General Tools</small>
                    </div>
                </a>
                <a href="/IWLCalculator.php" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Insensible Water Loss Calculator</h5>
                        <small class="text-muted">Medic Tools</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include("layouts/footer.php") ?>