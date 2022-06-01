<div class="timeline-event-container">
    <div class="timeline-event">
                <span class="timeline-marker d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-school-flag"></i>
                </span>
        <div class="card timeline-card shadow-sm ms-3 ms-sm-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?=$img ?? ''?>" class="img-fluid rounded-start" alt="<?=($title ?? '') . ' image'?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body h-100">
                        <div class="row h-100">
                            <div class="col-md-8">
                                <h5 class="card-title"><?=$icon ?? ''?> <?=$title ?? ''?></h5>
                                <p class="card-text"><?=$content ?? ''?></p>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-items-center mt-md-0 mt-3
                                     flex-md-column button-container">
                                <a href="<?=$link ?? ''?>" target="_blank" class="btn btn-primary mx-3 mx-md-0 w-100 my-2 my-md-3"><i class="fa-solid fa-eye d-sm-inline-block d-none"></i> <?=$lang['roadView']?></a>
                                <?php if(!isset($last)) {
                                ?>
                                <a href="#" class="btn btn-secondary w-100 mx-3 mx-md-0 my-2 my-md-3 btn-scroll-next"><i class="fa-solid fa-arrow-down d-sm-inline-block d-none"></i> <?=$lang['roadNext']?></a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!isset($last)) {
        ?>
        <span class="timeline-line"></span>
        <?php }
        ?>
    </div>
</div>
