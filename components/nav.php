<?php
function getLangUrl($value)
{
    $params = $_GET;
    unset($params['lang']);
    $params['lang'] = $value;
    return basename($_SERVER['PHP_SELF']).'?'.http_build_query($params);
}


?>

<nav class="navbar navbar-expand-md navbar-dark navbar-opaque">
    <div class="nav-overlay position-fixed w-100 h-100 top-0 left-0"></div>
    <div class="container">
        <div class="col col-md-4 d-md-block d-flex align-items-center justify-content-center">
            <div id="mobile_menu" class="position-absolute d-md-none d-block">
                <i class="fa-solid fa-bars text-white fs-2"></i>
            </div>
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="/images/icons/logo.png" alt="Website's icon" height="50" class="d-inline-block align-text-top">
                <span class="ms-2 fs-6">Roberts Turks</span>
            </a>
        </div>
        <div class="col col-md-8 d-md-flex d-none nav-buttons justify-content-end">
            <div>
                <div class="d-flex d-md-none pt-4 pb-3 align-items-center ps-3 text-white">
                    <img src="/images/icons/logo.png" alt="Website's icon" height="40"
                         class="d-inline-block align-text-top">
                    <span class="ms-2 fs-6">Roberts Turks</span>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><?=$lang['navHome']?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?=$lang['myRoad']?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="pamatskola.php"><i class="fa-solid fa-arrow-turn-down fa-flip-horizontal"></i> <?=$lang['roadOneTitle']?></a></li>
                            <li><a class="dropdown-item" href="dators.php"><i class="fa-solid fa-arrow-turn-down fa-flip-horizontal"></i> <?=$lang['roadTwoTitle']?></a></li>
                            <li><a class="dropdown-item" href="kursi.php"><i class="fa-solid fa-arrow-turn-down fa-flip-horizontal"></i> <?=$lang['roadThreeTitle']?></a></li>
                            <li><a class="dropdown-item" href="projekti.php"><i class="fa-solid fa-arrow-turn-down fa-flip-horizontal"></i> <?=$lang['roadFourTitle']?></a></li>
                            <li><a class="dropdown-item" href="vidusskola.php"><i class="fa-solid fa-arrow-turn-down fa-flip-horizontal"></i> <?=$lang['roadFiveTitle']?></a></li>
                            <li><a class="dropdown-item" href="lietotne.php"><i class="fa-solid fa-arrow-turn-down fa-flip-horizontal"></i> <?=$lang['roadSixTitle']?></a></li>
                            <li><a class="dropdown-item" href="ludf.php"><i class="fa-solid fa-flag-checkered"></i> LU DF</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?=$lang['navLang']?> (<?=strtoupper($locale ?? "LV")?>)
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="langDropdown">
                            <li><a class="dropdown-item" href="<?=getLangUrl('lv')?>"><?=$lang['navLangLv']?> (LV)</a></li>
                            <li><a class="dropdown-item" href="<?=getLangUrl('en')?>"><?=$lang['navLangEn']?> (EN)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-flex align-items-center ms-md-3 ms-2 mt-3 mt-md-0">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="themeSwitch">
                            <label for="themeSwitch"><?=$lang['navDark']?></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>