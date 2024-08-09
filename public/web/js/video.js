document.addEventListener('DOMContentLoaded', function() {
    const videoPlayer = document.getElementById('videoPlayer');
    const videoSource = document.getElementById('videoSource');
    
    
    let currentVideoIndex = 0;
    let switching = false; // Prevent multiple switches at the same time

    function playNextVideo() {
        currentVideoIndex = (currentVideoIndex + 1) % videoPaths.length;
        videoSource.setAttribute('src', videoPaths[currentVideoIndex]);
        videoPlayer.load();
        videoPlayer.play();
    }

    videoPlayer.addEventListener('timeupdate', function() {
        // Check if the current time is close to the end of the video
        if (videoPlayer.currentTime >= videoPlayer.duration - 0.5 && !switching) {
            switching = true;
            playNextVideo();
        }
    });

    videoPlayer.addEventListener('ended', function() {
        switching = false; // Reset the switching flag
        playNextVideo();   // Ensure next video plays when current video ends
    });

    videoPlayer.addEventListener('loadedmetadata', function() {
        switching = false; // Ensure switching flag is reset after loading a new video
    });

    // Set initial video source and start playback
    videoSource.setAttribute('src', videoPaths[currentVideoIndex]);
    videoPlayer.load();
    videoPlayer.play();
});
