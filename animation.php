<?php

$animation = [
    // 'image/German Design-1920x1080.mp4',
    'image/QDB_CX2.mp4',
    'image/Qinwan Sports Day.mp4',
    'image/QATAR_in.mp4',
    'image/Screensaver.mp4',
    'image/Daily720_2.mp4',
    'image/Bird_FullHd_v3.mp4',
    'image/My Vodafone App - Generic - 1920X1080_EN.mp4',
    // 'image/Mytea.mp4',
];

?>

<div id="youtube" class="tab-pane fade">
    <div class="header sticky-top">
        <ul class="nav">

            <?php foreach($animation as $index => $value): ?>
                <li class="nav-item">
                    <a class="btn btn-warning <?= setActive($index); ?>" data-toggle="tab" href="#youtube-0<?= getTabName($index); ?>">
                        <?= getTabName($index); ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="tab-content playarea">

        <?php foreach($animation as $index => $value): ?>
            <div id="youtube-0<?= getTabName($index); ?>" class="tab-pane <?= setActive($index); ?>">
                <div class="slides-wrapper">
                    <video id="video4" onclick="playAndPausefb2()" width="100%" height="100%" controls controlsList="nodownload">
                        <source src="<?= $value; ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>