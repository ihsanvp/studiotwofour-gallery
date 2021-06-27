<?php

$instagram = [
    [
        'name'   => 'feed',
        'device' => 'feed-mob',
        'file'   => 'image/feed_eng.mp4',
        'click'  => 'playPause()'
    ],
    [
        'name'   => 'story',
        'device' => 'story-mob',
        'file'   => 'image/Snapchat - Sign Off QM Logo.mp4',
        'click'  => 'playAndPause()'
    ]
]

?>

<div id="instagram" class="tab-pane fade">
    <div class="header sticky-top">
        <ul class="nav">
            <li class="nav-item"><a class="btn btn-warning active" data-toggle="tab" href="#insta-feed">Feed</a></li>
            <li class="nav-item"><a class="btn btn-warning" data-toggle="tab" href="#insta-story">Story</a>
            </li>
        </ul>
    </div>
    <div class="tab-content playarea">
        <div id="insta-feed" class="tab-pane active">
            <div id="feed-mob" class="device">
                <div class="device-content"></div>
                <div class="slides-wrapper">
                    <!-- <img src="image/instapost_sample.jpg" alt=""> -->
                    <video id="video1" onclick="playPause()" width="100%" height="100%">
                        <source src="image/feed_eng.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div>
                <button class="btn btn-warning" onclick="playPause()">Play/Pause</button>
            </div>
        </div>
        <div id="insta-story" class="tab-pane fade">
            <div id="story-mob" class="device">
                <div class="device-content"></div>
                <div class="slides-wrapper">
                    <!-- <img src="image/insta_story_sample.jpg" alt=""> -->
                    <video id="video2" onclick="playAndPause()" width="100%" height="100%">
                        <source src="image/Snapchat - Sign Off QM Logo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div>
                <button class="btn btn-warning" onclick="playAndPause()">Play/Pause</button>
            </div>
        </div>
    </div>
</div>