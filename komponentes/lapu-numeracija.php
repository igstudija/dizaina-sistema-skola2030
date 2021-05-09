<?php
$parent = "komponentes";
$title = "Lapu numerācija ";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h1><?php echo $title;?></h1>

            <div class="bd-example">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#">Atpakaļ</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a href="#">Tālak</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="bd-example">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a href="#">Atpakaļ</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a href="#">Tālak</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="bd-example">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item ">
                            <a href="#">Atpakaļ</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled">
                            <a href="#">Tālak</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>