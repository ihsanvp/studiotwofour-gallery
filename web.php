<?php

$web = [
    [
        'name'  => 'desktop',
        'href'  => 'home',
        'files' => [
            'image/ss-printon-web.jpg',
            'image/website/01_wow.jpg',
            'image/website/02_sanjoe.jpg',
            'image/website/03_qaemah.jpg',
            'image/website/04_alliance.jpg'
        ]
    ],
    [
        'name'  => 'laptop',
        'href'  => 'menu1',
        'files' => [
            'image/ss-printon-web.jpg',
            'image/website/01_wow.jpg',
            'image/website/02_sanjoe.jpg',
            'image/website/03_qaemah.jpg',
            'image/website/04_alliance.jpg'
        ]
    ],
    [
        'name'  => 'tab',
        'href'  => 'menu2',
        'files' => [
            'image/ss-printon-web.jpg',
            'image/website/01_wow.jpg',
            'image/website/02_sanjoe.jpg',
            'image/website/03_qaemah.jpg',
            'image/website/04_alliance.jpg',
        ]
    ],
    [
        'name'  => 'mobile',
        'href'  => 'menu3',
        'files' => [
            'image/ss-printon-mob.jpg',
            'image/website/01_wow_mpb.jpg',
            'image/index3.jpg',
            'image/index.jpg'
        ]
    ],

];

function getFileId($name, $index)
{
    return $name.'-'.$index;
}

?>



<div id="website" class="tab-pane fade">
    <div class="header sticky-top">
        <ul class="nav">

            <?php foreach($web as $index => $value): ?>
                <li class="nav-item">
                    <a class="btn btn-warning text-capitalize <?= setActive($index); ?>" data-toggle="tab" href="#<?= $value['href']; ?>">
                        <?= $value['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="tab-content playarea">

        <?php foreach($web as $index => $value): ?>

            <div id="<?= $value['href']; ?>" class="tab-pane <?= setActive($index); ?>">
                <div id="<?= $value['name']; ?>" class="device">
                    <div class="device-content"></div>
                    <div class="slides-wrapper">
                        <div class="tab-content">

                            <?php foreach($value['files'] as $fileIndex => $file): ?>
                                <div id="<?= getFileId($value['name'], $fileIndex); ?>" class="tab-pane <?= setActive($fileIndex); ?>">
                                    <img src="<?= $file; ?>" alt="">
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
                <ul class="nav ss-button">

                    <?php foreach($value['files'] as $fileIndex => $file): ?>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#<?= getFileId($value['name'], $fileIndex); ?>" class="btn btn-warning nav-link <?= setActive($fileIndex); ?>">
                                <?= $fileIndex + 1; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        <?php endforeach; ?>

    </div>
</div>