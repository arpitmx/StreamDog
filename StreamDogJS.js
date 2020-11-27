

var player = videojs("videoPlayer",{
	autoplay: true,
	controls: true,
	loop:true,
    fluid:true,
    aspectRatio:'4:3',
	liveui :true,
	playbackRates:[0.25,0.5,0.75,1,1.25,2,4,5],
	userActions: {
		hotkeys: true
	}
});


