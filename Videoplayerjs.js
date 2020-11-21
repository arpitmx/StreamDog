var player = videojs("videoPlayer",{
	autoplay: 'muted',
	controls: true,
	loop:true,
	playbackRates:[0.25,0.5,0.75,1,1.25,2,4,5],
	userActions: {
		hotkeys: true
	}
});


console.log("player running!")