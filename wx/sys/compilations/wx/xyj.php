<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信">
<title></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" type="text/css" href="/res/page.css" />
<link href="/res/xym.css" rel="stylesheet" type="text/css">
<link href="/res/zwj.css" rel="stylesheet" type="text/css">
<style type="text/css">


</style>
</head>
<body>
<div class="m_ggl">
<div class="m_ylzjxx">
<table class="ggltb">
<tr>
<td class="ggltd"></td>
<td><h1><?php echo $hd->name; ?></h1></td>
<td class="ggltd"></td>
</tr>
</table>
</div>
<br/>
<div class="m_ylzjxx">
<?php if ($hdlog->has_id()){ ?>
<?php $jjj = 'j'.$hdlog->jx.'ms'; ?>
恭喜<?php echo $hdlog->tel; ?>获得<?php echo $hd->$jjj; ?>
<?php }else{ ?>
目前还没人中奖，快来试一试。
<?php } ?>
</div>

<div class="tigerslot ui-content">
<div class="machine">
                <div class="strip left">
                    <div class="box" style="background-position: 0px 0px;"></div>
                    <div class="cover"></div>
                </div>
                <div class="strip middle">
                    <div class="box" style="background-position: 0px 0px;"></div>
                    <div class="cover"></div>
                </div>
                <div class="strip right">
                    <div class="box" style="background-position: 0px 0px;"></div>
                    <div class="cover"></div>
                </div>
                <div class="gamebutton"></div>
            <div class="light l0 on"></div><div class="light l1 on"></div><div class="light l2 on"></div><div class="light l3 on"></div><div class="light l4 on"></div><div class="light l5 on"></div><div class="light l6 on"></div><div class="light l7 on"></div><div class="light l8 on"></div><div class="light l9"></div><div class="light l10 on"></div><div class="light l11 on"></div><div class="light l12 on"></div><div class="light l13 on"></div><div class="light l14 on"></div><div class="light l15 on"></div><div class="light l16 on"></div><div class="light l17 on"></div><div class="light l18 on"></div><div class="light l19 on"></div><div class="light l20 on"></div><div class="light l0 on"></div><div class="light l1"></div><div class="light l2 on"></div><div class="light l3"></div><div class="light l4 on"></div><div class="light l5"></div><div class="light l6 on"></div><div class="light l7"></div><div class="light l8 on"></div><div class="light l9"></div><div class="light l10 on"></div><div class="light l11"></div><div class="light l12 on"></div><div class="light l13"></div><div class="light l14 on"></div><div class="light l15"></div><div class="light l16 on"></div><div class="light l17"></div><div class="light l18 on"></div><div class="light l19"></div><div class="light l20 on"></div>
            
            </div>


</div>

<div class="m_yljpsm">
<div class="m_yljpsms">
<h2 style="background: url('/res/stitle.png') no-repeat; color: white;">奖项设置：</h2>
<?php if (trim($hd->j1mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j1mc; ?>： <?php echo $hd->j1ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j1sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j2mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j2mc; ?>： <?php echo $hd->j2ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j2sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j3mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j3mc; ?>： <?php echo $hd->j3ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j3sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j4mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j4mc; ?>： <?php echo $hd->j4ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j4sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j5mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j5mc; ?>： <?php echo $hd->j5ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j5sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j6mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j6mc; ?>： <?php echo $hd->j6ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j6sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j7mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j7mc; ?>： <?php echo $hd->j7ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j7sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j8mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j8mc; ?>： <?php echo $hd->j8ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j8sl;  } ?></div>
<?php } ?>
</div>
</div>
<div class="m_yljpsm">
<div class="m_yljpsms">
<h2 style="background: url('/res/stitle.png') no-repeat; color: white;">活动说明：</h2>
<div class="m_yljpsmnr">您今天还有 <span id="syjhspan"><?php echo $sycs; ?></span> 次参与机会</div>
<div class="m_yljpsmnr"><?php echo $hd->ms; ?></div>
</div>
</div>

</div>
<?php if ($sycs >0){ ?>
<script type="text/javascript">
/// <reference path="jquery-1.10.0.js" />
/// <reference path="jquery.mobile-1.3.1.js" />
(function () {
  var lastTime = 0;
  var vendors = ['ms', 'moz', 'webkit', 'o'];
  for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame']
                                 || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }

  if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function (callback, element) {
          var currTime = new Date().getTime();
          var timeToCall = Math.max(0, 16 - (currTime - lastTime));
          var id = window.setTimeout(function () { callback(currTime + timeToCall); },
            timeToCall);
          lastTime = currTime + timeToCall;
          return id;
      };

  if (!window.cancelAnimationFrame)
      window.cancelAnimationFrame = function (id) {
          clearTimeout(id);
      };
}());

(function () {
  window.GameTimer = function (fn, timeout) {
      this.__fn = fn;
      this.__timeout = timeout;
      this.__running = false;
      this.__lastTime = Date.now();
      this.__stopcallback = null;
  };

  window.GameTimer.prototype.__runer = function () {
      if (Date.now() - this.__lastTime >= this.__timeout) {
          this.__lastTime = Date.now();
          this.__fn.call(this);
      }
      if (this.__running) {
          window.requestAnimationFrame(this.__runer.bind(this));
      }
      else {
          if (typeof this.__stopcallback === 'function') {
              window.setTimeout(this.__stopcallback,100);
          }
      }
  };

  window.GameTimer.prototype.start = function () {
      this.__running = true;
      this.__runer();
  };
  window.GameTimer.prototype.stop = function (callback) {
      this.__running = false;
      this.__stopcallback = callback;
  };

})();
var lhjjx = [
{ left:8, middle:8,right:8},
{ left:2, middle:2,right:2},
{ left:6, middle:6,right:6},
{ left:1, middle:1,right:1},
{ left:4, middle:4,right:4},
{ left:3, middle:3,right:3}
];
$(function () {

  var url_rndprize = '/marketing_fruit/start';//'抽奖的php地址';
  var url_getprize = '兑奖的php地址';
  
  var toLeftIndex = 0;
  var toMiddleIndex = 0;
  var toRightIndex = 0;
  var itemPositions = [
      0, //苹果
      100,//芒果
      200,//布林
      300,//香蕉
      400,//草莓
      500,//梨
      600,//桔子
      700,//青苹果
      800//樱桃
  ];

  //游戏开始
  var gameStart = function () {
      lightFlicker.stop();
      lightRandom.stop();
      lightCycle.start();


      //游戏开始，指定用户的结果，从左到右，水果编码，从0开始。
      var prize = $('#hdjxmc').val();
      var jxint = parseInt($('#hdjx').val());
      if(jxint){
    	  boxCycle.start(lhjjx[jxint-1]);
      }else{
    	  var needsjint = true;
    	  while(needsjint){
    		  var vv1 = Math.round(Math.random() * 8);
              var vv2 = Math.round(Math.random() * 8);
              var vv3 = Math.round(Math.random() * 8);
              if(vv1 == vv2 && vv2 == vv3){
            	  needsjint = true;
              }else{
            	  needsjint = false;
            	  boxCycle.start({ left:vv1, middle:vv2,right:vv3});
              }
    	  }   	  
          
      }
      
  };

  //游戏结束
  var gameOver = function (resultData) {
      lightFlicker.start();
      lightRandom.stop();
      lightCycle.stop();
      $('.machine .gamebutton').removeClass('disabled');
      
  };

  

  var $machine = $('.machine');
  var $slotBox = $('.tigerslot .box');
  var light_html = '';
  for (var i = 0; i < 21; i++) {
      light_html += '<div class="light l'+ i +'"></div>';
  }
  var $lights = $(light_html).appendTo($machine);


  
  var $gameButton = $('.machine .gamebutton').click(function () {
      var $this = $(this);
      if (!$this.hasClass('disabled')) {
          $this.addClass('disabled');
          $this.toggleClass(function (index, classname) {
              if (classname.indexOf('stop') > -1) {
                  boxCycle.stop(function (resultData) {
                      gameOver(resultData);
                      //$this.removeClass('disabled');
                  });
              } else {
                  gameStart();
                  window.setTimeout(function () {
                      $this.removeClass('disabled');
                  },1500);
              }
              return 'stop';
          });
      }
  });


  var lightCycle = new function () {
      var currIndex = 0, maxIndex = $lights.length - 1;
      $('.l0').addClass('on');
      var tmr = new GameTimer(function () {
          $lights.each(function(){
              var $this = $(this);
              if($this.hasClass('on')){
                  currIndex++;
                  if (currIndex > maxIndex) {
                      currIndex = 0;
                  }
                  $this.removeClass('on');
                  $('.l' + currIndex).addClass('on');
                  return false;
              }
          });
      }, 100);
      this.start = function () {
          tmr.start();
      };
      this.stop = function () {
          tmr.stop();
      };
  };
  var lightRandom = new function () {
      var tmr = new GameTimer(function () {
          $lights.each(function () {
              var r = Math.random() * 1000;
              if (r < 400) {
                  $(this).addClass('on');
              } else {
                  $(this).removeClass('on');
              }
          });
      }, 100);
      this.start = function () {
          tmr.start();
      };
      this.stop = function () {
          tmr.stop();
      };
  };

  var lightFlicker = new function () {
      $lights.each(function (index) {
          if ((index >> 1) == index / 2) {
              $(this).addClass('on');
          } else {
              $(this).removeClass('on');
          }
      });
      var tmr = new GameTimer(function () {
          $lights.toggleClass('on');
      }, 100);
      this.start = function () {
          tmr.start();
      };
      this.stop = function () {
          tmr.stop();
      };
  };


  var boxCycle = new function () {

      var speed_left = 0, speed_middle = 0, speed_right = 0, maxSpeed = 25;
      var running = false, toStop = false, toStopCount = 50;
      var boxPos_left = 0, boxPos_middle = 0, boxPos_right = 0;
      
      var resultData;
      
      var $box = $('.tigerslot .box'), $box_left = $('.tigerslot .strip.left .box'), $box_middle = $('.tigerslot .strip.middle .box'), $box_right = $('.tigerslot .strip.right .box');

      var fn_stop_callback = null;

      var tmr = new GameTimer(function () {
          if (toStop) {
              toStopCount--;     
              
              if (toStopCount < 0) {
                  speed_right = 0;
                  boxPos_right = -itemPositions[toRightIndex];
              }else if (toStopCount < 25) {
            	  speed_middle = 0;
                  boxPos_middle = -itemPositions[toMiddleIndex];
                  boxPos_right += speed_right;
              }else{
            	  speed_left = 0;
                  boxPos_left = -itemPositions[toLeftIndex];
                  boxPos_middle += speed_middle;
                  boxPos_right += speed_right;
              }
          } else {
              speed_left += 1;
              speed_middle += 1;
              speed_right += 1;
              if (speed_left > maxSpeed) {
                  speed_left = maxSpeed;
              }
              if (speed_middle > maxSpeed) {
                  speed_middle = maxSpeed;
              }
              if (speed_right > maxSpeed) {
                  speed_right = maxSpeed;
              }
              boxPos_left += speed_left;
              boxPos_middle += speed_middle;
              boxPos_right += speed_right;
          }          

          $box_left.css('background-position', '0 ' + boxPos_left + 'px')
          $box_middle.css('background-position', '0 ' + boxPos_middle + 'px')
          $box_right.css('background-position', '0 ' + boxPos_right + 'px')

          if (speed_left <= 0 && speed_middle <= 0 && speed_right <= 0) {
              tmr.stop();
              tellcjok('xyj');
          }
          
      }, 33);

      this.start = function (data) {
          toLeftIndex = data.left; toMiddleIndex = data.middle; toRightIndex = data.right;
          running = true; toStop = false;
          resultData = data;
          tmr.start();
      };

      this.stop = function (fn) {
          fn_stop_callback = fn;
          toStop = true;
          toStopCount = 50;
      };


      this.reset = function () {
          $box_left.css('background-position', '0 ' + itemPositions[0] + 'px');
          $box_middle.css('background-position', '0 ' + itemPositions[0] + 'px');
          $box_right.css('background-position', '0 ' + itemPositions[0] + 'px');
      };
      this.reset();
  };

	
  //初始给点欢乐
  lightFlicker.start();
  window.setTimeout(function () {
      lightFlicker.stop();
  }, 2000)

});

</script>
<input type="hidden" id="hdid" value="<?php echo $hd->id; ?>"/>
<input type="hidden" id="hdjx" value="<?php echo $jx; ?>"/>
<input type="hidden" id="hdjxmc" value="<?php echo $jxmc; ?>"/>
<?php } ?>
<script src="/res/hammer.js"></script>
<script src="/res/wx.js"></script>
<div id="zjtzdiv" style="display: none;position: fixed;width: 100%; bottom: 0px;z-index:9999;">
<div class="Pop-upbox" id="usermsg" >
        <div class="upbox_top">
            <h1>恭喜中奖：</h1>
            <a href=""><div class="close" style="display: none;"></div></a>
        </div>
        <div class="upbox_cens">
        <div>
恭喜获得奖品:<?php echo $jxmc; ?>。
请留下你的手机号码作为领奖依据。<br/>
姓名：<input type="text" id="un" value="<?php echo htmlspecialchars(($op->un),ENT_QUOTES); ?>" class="sinput">
        </div>
     <div style="margin-top: 5px;">
 电话：<input type="text" id="tel" value="<?php echo htmlspecialchars(($op->tel),ENT_QUOTES); ?>" class="sinput">
     </div>
   <div style="margin-top: 5px;">
 微信用户名：<input type="text" id="wxun" value="<?php echo htmlspecialchars(($op->wxun),ENT_QUOTES); ?>" class="sinput">
     </div>    
        
        </div>
        <div class="upbox_cen">
            <a href="javascript:tellcjxxok('xyj')"><div class="button_1"><span>确认信息</span></div></a>
        </div>
</div>
</div>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
</div>
<!--
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
</div>
 -->
<script>
/**
$(function(){
	if($('body').height()<$(window).height()){
		$('body').height($(window).height());
		$('#wxgjfooter').css('position','fixed').css('bottom','0px');
	}
});
**/
</script>
</body></html>
