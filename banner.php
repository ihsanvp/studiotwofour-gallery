<?php

$banner = [
    [
        'name' => '120x600',
        'file' => 'image/GDN/120x600/index.html'
    ],
    [
        'name' => '160x600',
        'file' => 'image/GDN/160x600/index.html'
    ],
    [
        'name' => '250x250',
        'file' => 'image/GDN/250x250/index.html'
    ],
    [
        'name' => '300x250',
        'file' => 'image/GDN/300x250/index.html'
    ],
    [
        'name' => '300x600',
        'file' => 'image/GDN/300x600/index.html'
    ],
    [
        'name' => '320x50',
        'file' => 'image/GDN/320x50/index.html'
    ],
    [
        'name' => '320x100',
        'file' => 'image/GDN/320x100/index.html'
    ],
    [
        'name' => '336x280',
        'file' => 'image/GDN/336x280/index.html'
    ],
    [
        'name' => '728x90',
        'file' => 'image/GDN/728x90/index.html'
    ],
    [
        'name' => '970x90',
        'file' => 'image/GDN/970x90/index.html'
    ],
];

?>

<div id="banner" class="tab-pane fade">
    <div class="header sticky-top">
        <ul class="nav">

            <?php foreach($banner as $key => $value): ?>
                <li class="nav-item">
                    <a class="btn btn-warning <?= setActive($key); ?>" data-toggle="tab" href="#gdn-<?= $value['name']; ?>">
                    <?= $value['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="tab-content playarea d-inline-flex">

        <?php foreach($banner as $key => $value): ?>
            <div id="gdn-<?= $value['name']; ?>" class="tab-pane <?= setActive($key); ?>">
                <div id="desktop" class="device">
                    <div class="device-content"></div>
                    <div class="slides-wrapper">
                        <div class="tab-content">
                            <div id="eng1" class="tab-pane active">
                                <iframe src="<?= $value['file']; ?>" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>