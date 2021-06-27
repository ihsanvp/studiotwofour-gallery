<?php 

$facebook = [
    [
        'device' => 'feed-mob',
        'file'   => 'image/feed_eng.mp4',
        'click'  => 'playPause()'
    ],
];

?>

<div id="facebook" class="tab-pane fade">
    <div class="header sticky-top">
        <ul class="nav">
            <li class="nav-item"><a class="btn btn-warning active" data-toggle="tab" href="#fb-01">01</a>
            </li>
            <li class="nav-item"><a class="btn btn-warning" data-toggle="tab" href="#fb-02">02</a></li>
        </ul>
    </div>
    <div class="tab-content playarea">
        <div id="fb-01" class="tab-pane active">
            <div class="device">
                <div class="device-content"></div>
                <div class="slides-wrapper">
                    <video id="video3" onclick="playPausefb1()" width="100%" height="100%">
                        <source src="image/Final_comp_5.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div>
                <button class="btn btn-warning" onclick="playPausefb1()">Play/Pause</button>
            </div>
        </div>
        <div id="fb-02" class="tab-pane fade">
            <div class="device">
                <div class="device-content"></div>
                <div class="slides-wrapper">
                    <!-- <img src="image/insta_story_sample.jpg" alt=""> -->
                    <video id="video4" onclick="playAndPausefb2()" width="100%" height="100%">
                        <source src="image/Final_comp_5 (2).mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div>
                <button class="btn btn-warning" onclick="playAndPausefb2()">Play/Pause</button>
            </div>
        </div>
    </div>
</div>