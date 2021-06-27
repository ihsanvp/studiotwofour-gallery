<?php

$branding =  [
    'image/branding/Earr sStationery Mockup.jpg',
    'image/branding/Fencing.jpg',
    'image/Chicking SM-02.jpg',
    // 'image/branding/Dafza_products_002.jpg',
    'image/branding/Power-collaterals.jpg',
    'image/branding/mai.jpg',
    'image/branding/Walking.jpg',
    'image/branding/Logos.jpg'
];
?>

<div id="branding" class="tab-pane active">
    <div class="header sticky-top">
        <ul class="nav">

            <?php foreach($branding as $key => $value): ?>
            <li class="nav-item">
                <a class="btn btn-warning <?= setActive($key); ?>" data-toggle="tab" href="#brand-<?= getTabName($key); ?>">
                    <?= getTabName($key); ?>
                </a>
            </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="tab-content playarea">
    
        <?php foreach($branding as $key => $value): ?>
            <div id="brand-<?= getTabName($key); ?>" class="tab-pane <?= setActive($key); ?>">
                <div class="slides-wrapper">
                    <img src="<?= $value; ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>
    
    </div>
</div>
