<!doctype html>
<html lang="en">
<?php
include 'components/lang.php';
$title = "Roberts Turks - " . $lang['navHome'];
include 'components/head.php';
?>
<body id="home">

<header>
    <?php include 'components/nav.php' ?>
    <div class="container">
        <div class="hero-text fs-1 row justify-content-center">
            <h1><?=$lang['homeTitle']?></h1>
            <h2 class="hero-subtext text-center fs-5"><?=$lang['homeSubtitle']?></h2>
        </div>
    </div>
    <div class="scroll-prompt text-white text-center"><span><?=$lang['scrollPrompt']?></span><br><i class="fa-solid fa-angles-down"></i></div>
</header>

<div id="intro_container" class="container-fluid mt-5">
    <div class="container p-3 text-center">
        <h4 class="intro-text text-marker closed mb-4"><?=$lang['homeBeforeRoad']?></h4>
        <div class="row gx-4 row-cols-md-2 row-cols-1">
            <div class="col pb-md-0 pb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h5 class="text-start"><i class="fa-solid fa-user"></i><br><?=$lang['aboutMeTitle']?></h5>
                    <p class="text-start"><?=$lang['aboutMe']?></p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h5 class="text-start"><i class="fa-solid fa-globe"></i><br><?=$lang['aboutSiteTitle']?></h5>
                    <p class="text-start"><?=$lang['aboutSite']?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="timeline_container" class="container content position-relative">
    <h4 class="text-center intro-text text-marker closed mt-5 mb-0"><?=$lang['myRoad']?></h4>
    <div class="row flex-column timeline">
        <?php
        $img = "./images/hero/md/hero_pamatskola.jpg";
        $title = $lang['roadOneTitle'];
        $icon = '<i class="fa-solid fa-school-flag"></i>';
        $content = $lang['roadOneDescription'];
        $link = 'pamatskola.php';
        include 'components/timeline-event.php';

        $img = "./images/hero/md/hero_dators.jpg";
        $title = $lang['roadTwoTitle'];
        $icon = '<i class="fa-solid fa-computer"></i>';
        $content = $lang['roadTwoDescription'];
        $link = 'dators.php';
        include 'components/timeline-event.php';

        $img = "./images/hero/md/hero_kursi.jpg";
        $title = $lang['roadThreeTitle'];
        $icon = '<i class="fa-solid fa-chalkboard-user"></i>';
        $content = $lang['roadThreeDescription'];
        $link = 'kursi.php';
        include 'components/timeline-event.php';

        $img = "./images/hero/lg/hero_projekti.jpg";
        $title = $lang['roadFourTitle'];
        $icon = '<i class="fa-solid fa-lightbulb"></i>';
        $content = $lang['roadFourDescription'];
        $link = 'projekti.php';
        include 'components/timeline-event.php';

        $img = "./images/hero/md/hero_vidusskola.jpg";
        $title = $lang['roadFiveTitle'];
        $icon = '<i class="fa-solid fa-school"></i>';
        $content = $lang['roadFiveDescription'];
        $link = 'vidusskola.php';
        include 'components/timeline-event.php';

        $img = "./images/hero/md/hero_lietotne.jpg";
        $title = $lang['roadSixTitle'];
        $icon = '<i class="fa-brands fa-android"></i>';
        $content = $lang['roadSixDescription'];
        $link = 'lietotne.php';
        include 'components/timeline-event.php';

        $img = "./images/hero/md/hero_ludf.jpg";
        $title = $lang['roadSevenTitle'];
        $icon = '<i class="fa-solid fa-graduation-cap"></i>';
        $content = $lang['roadSevenDescription'];
        $link = 'ludf.php';
        $last = true;
        include 'components/timeline-event.php';
        ?>
    </div>
</div>

<?php include 'components/footer.php'?>
</body>
</html>