﻿function play68_init() {
	updateShare(0);
}

function goHome() {
    window.location.href = "http://wx.zongyangtech.cn/games/qrcode/index.html";
}

function play68_submitScore(score) {
	updateShareScore(score);
	setTimeout( function() { show_share(); }, 1000 );
}

function updateShare(bestScore) {
    imgUrl = 'http://wx.zongyangtech.cn/games/games/jg/static/icon.png';
    lineLink = 'http://wx.zongyangtech.cn/games/games/jg/index.html';
	descContent = "来比比看谁的手指更厉害！";
	updateShareScore(bestScore);
	appid = '';
}

function updateShareScore(bestScore) {
	if(bestScore > 0) {
		shareTitle = "创意游戏《激光防线》我得了" + bestScore + "分，你的手指有我的快吗？";
	}
	else{
		shareTitle = "创意游戏《激光防线》让你用手指画出激光线！";
	}
}
