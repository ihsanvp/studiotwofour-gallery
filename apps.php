<?php

$apps = [
    [
        'name'   => 'tab',
        'href'   => 'app-tab',
        'target' => 'tab',
        'files'  => [
            'image/app_2_Home.jpg',
            'image/app_4_Staffs.jpg',
            'image/app_6_add_new.jpg',
            'image/app_14_Public_Programs.jpg'
        ],
        
    ],
    // [
    //     'name'   => 'mobile',
    //     'href'   => 'app-mob',
    //     'target' => 'mobile',
    //     'files'  => [
    //         'image/app_2_Home.jpg',
    //         'image/app_4_Staffs.jpg',
    //         'image/app_6_add_new.jpg',
    //         'image/app_14_Public_Programs.jpg'
    //     ]
    // ]
];

function getAppFileId($name, $index)
{
    return 'app-'.$name.'-'.$index;
}

?>

<div id="application" class="tab-pane fade">
    <div class="header sticky-top">
        <ul class="nav">

            <?php foreach($apps as $index => $value): ?>
                <li class="nav-item">
                    <a class="btn btn-warning text-capitalize <?= setActive($index); ?>" data-toggle="tab" href="#<?= $value['href']; ?>">
                        <?= $value['name'] ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="tab-content playarea">
        
        <?php foreach($apps as $index => $value): ?>

            <div id="<?= $value['href']; ?>" class="tab-pane <?= setActive($index); ?>">
                <div id="<?= $value['target']; ?>" class="device">
                    <div class="device-content"></div>
                    <div class="slides-wrapper">
                        <div class="tab-content">

                            <?php foreach($value['files'] as $fileIndex => $file): ?>
                                <div id="<?= getAppFileId($value['name'], $fileIndex); ?>" class="tab-pane <?= setActive($fileIndex); ?>">
                                    <img src="<?= $file; ?>" alt="">
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <ul class="nav ss-button">

                    <?php foreach($value['files'] as $fileIndex => $file): ?>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#<?= getAppFileId($value['name'], $fileIndex); ?>" class="btn btn-warning nav-link <?= setActive($fileIndex); ?>">
                                <?= $fileIndex + 1; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>

        <?php endforeach; ?>

    </div>
</div>