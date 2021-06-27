<?php

$screen = [
    'image/Dia Azzawi_Villagio_A.mp4',
    'image/Dia Azzawi_Villagio_E.mp4'
];

?>

<div id="computer" class="tab-pane fade">
    <div class="header sticky-top">
        <ul class="nav">

            <?php foreach($screen as $index => $value): ?>
                <li class="nav-item">
                    <a class="btn btn-warning <?= setActive($index); ?>" data-toggle="tab" href="#digital-0<?= getTabName($index); ?>">
                        <?= getTabName($index); ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="tab-content playarea">

        <?php foreach($screen as $index => $value): ?>
            <div id="digital-0<?= getTabName($index); ?>" class="tab-pane <?= setActive($index); ?>">
                <div id="gdn-bg" class="device">
                    <div class="device-content"></div>
                    <div class="slides-wrapper">
                        <video id="video4" onclick="playAndPausefb2()" width="100%" height="100%" controls controlsList="nodownload">
                            <source src="<?= $value; ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>