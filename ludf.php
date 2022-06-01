<?php
$customStyles = '<link href="css/place-style.css" rel="stylesheet">';
?>

<!doctype html>
<html lang="en">
<?php
include 'components/lang.php';
$title = $lang['myRoad'] . " - " . $lang['roadSevenTitle'];
include 'components/head.php'
?>
<body id="ludf">

<header>
    <?php include 'components/nav.php' ?>
    <div class="container">
        <div class="hero-text fs-1 row justify-content-center">
            <h1><?=$lang['roadSevenTitle']?></h1>
            <h2 class="hero-subtext text-center fs-5"><?=$lang['roadSevenSubtitle']?></h2>
        </div>
    </div>
</header>

<div id="step_container" class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <div class="text-center next-stage mt-3 mb-5 position-relative">
                <a href="lietotne.php" class="text-decoration-none">
                    <span class="timeline-marker active d-flex align-items-center justify-content-center m-auto hover">
                        <i class="fa-brands fa-android"></i>
                    </span>
                </a>
                <span class="timeline-line preview active"></span>
                <?=$lang['roadGoBack']?><br>
                <span class="fw-bold"><?=$lang['roadSixTitle']?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="timeline-event-container">
                <div class="timeline-event">
                <span class="timeline-marker active d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-graduation-cap"></i>
                </span>
                    <span class="timeline-line active"></span>
                </div>
                <div class="timeline-event">
                    <span class="timeline-marker d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-question"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-10 pb-3">
            <div class="row gx-4 row-cols-1 row-cols-md-2">
                <div class="col mb-4 mb-md-0">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <div class="step-number">
                            1.
                        </div>
                        <h5 class="text-center my-2 fw-bold"><?=$lang['road7Title1']?></h5>
                        <p class="text-start">
                            <?=$lang['road7Content1']?>
                        </p>
                    </div>
                </div>
                <div class="col mb-4 mb-md-0">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <div class="step-number">
                            2.
                        </div>
                        <h5 class="text-center my-2 fw-bold"><?=$lang['road7Title2']?></h5>
                        <p class="text-start">
                            <?=$lang['road7Content2']?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gx-4 mt-4 row-cols-1">
                <div class="col mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <div class="step-number">
                            3.
                        </div>
                        <h5 class="text-center my-2 fw-bold"><?=$lang['road7Title3']?></h5>
                        <p class="text-start">
                            <?=$lang['road7Content3']?>
                        </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <div class="step-number">
                            4.
                        </div>
                        <h5 class="text-center my-2 fw-bold"><?=$lang['road7Title4']?></h5>
                        <p class="text-start">
                            <?=$lang['road7Content4']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php include 'components/footer.php'?>
</html>