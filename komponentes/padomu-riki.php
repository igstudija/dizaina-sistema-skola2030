<?php
$parent = "komponentes";
$title = "Padomu rīki ";
include '../includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Augšā">
                    Augšā
                </button>
            </div>
            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                    title="Pa labi">
                    Pa labi
                </button>
            </div>
            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Apakšā">
                    Apakšā
                </button>
            </div>
            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Pa kreisi">
                    Pa kreisi
                </button>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>