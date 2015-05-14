<!DOCTYPE>
<html>
<head>
<title>会员卡</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/card/card.css" media="all" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="format-detection" content="telephone=no">
</head>

<body id="card" ondragstart="return false;" onselectstart="return false;">
    <section class="body">
<div id="overlay" style="position:fixed;z-index:100;"></div>
<div class="cardcenter">
<?php if ($sn ==''){ ?>
            <div class="msk">
                            <p class="explain2">
                    <a id="showcard" class="receive" href="javascript:void(0)">领取您的新会员卡</a>
                    <span><?php echo $hyk->ms; ?></span>
                </p>
                    </div>
<?php } ?>
        <div class="card">
            <img class="cardbg" src="<?php echo $hyk->pic1; ?>">
            <!-- <img id="cardlogo" class="logo" src="<?php echo $hyk->pic; ?>"> -->
            <h1 style="color: <?php echo $hyk->namecolor; ?>"><?php echo $hyk->name; ?></h1>
            <strong class="pdo verify" style="color: <?php echo $hyk->numcolor; ?>">
                <span id="cdnb" style="text-align: right;margin-top: 15px;"><em><?php echo $sn; ?></em></span>
            </strong>
        </div>
        <!--  
        <div id="masklayer" class="masklayer off" ontouchmove="return true;" onclick="$(this).toggleClass('on');">
            <script>
                var isAndroid = navigator.userAgent.toLowerCase().indexOf("android");
                document.write(isAndroid>-1?"<img src='http://stc.weimob.com/img/instruction_android.png' alt='' />":"<img src='http://stc.weimob.com/img/instruction_iphone.png' alt='' />");
            </script>
        </div>
         -->
        <p class="explain">
        <span>使用时向服务员出示此卡</span>
    </p>
</div>
<div class="cardexplain">
    <!--会员积分信息-->
    <div class="jifen-box">
        <ul class="zongjifen">
            <li>
                <a href="javascript:;">
                    <div class="fengexian">
                        <p>消费总额</p>
                        <span><?php echo $hykrecord->xf; ?>元</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="fengexian">
                        <p>剩余积分</p>
                        <span><?php echo $hykrecord->jf; ?>分</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <p>剩余金额</p>
                    <span><?php echo $hykrecord->ye; ?>元</span>
                </a>
            </li>
        </ul>
        <div class="clr"></div>
    </div>
<?php if ($sn !=''){ ?>
            <ul class="round" id="notice">
            <li>
                <a href="hykmm-tz-<?php echo $hykid; ?>.html">
                    <span>最新通知<em class="ok">1</em></span>
                </a>
                <!-- <a href="/userinfo/MemberNotice?cardid=56630&pid=33260&bid=62312&wechatid=oLKXFt_nd1c8f_G_e_jb_ZP4RR">
					<span>最新通知<em class="ok">1</em></span>
				</a> -->
            </li>
            <li>
                <a href="hykmm-tq-<?php echo $hykid; ?>.html">
                    <span>会员卡特权<em class="ok">1</em></span>
                </a>
            </li>
            <li>
                <a href="hykmm-jfhd-<?php echo $hykid; ?>.html">
                    <span>积分兑换活动<em class="ok">1</em></span>
                </a>
            </li>
            <!-- 
            <li>
                <a href="/userinfo/MemberCoupon?id=5085&memberid=47018&pid=33260&bid=62312&wechatid=oLKXFt_nd1c8f_G_e_jb_ZP4RR">
                    <span>会员优惠券<em class="error">1</em></span>
                </a>
            </li>
             
            <li>
                <a href="/userinfo/MemberGift?id=5085&memberid=47018&pid=33260&bid=62312&wechatid=oLKXFt_nd1c8f_G_e_jb_ZP4RR">
                    <span>积分换礼品<em class="ok">1</em></span>
                </a>
            </li>
            -->
        </ul>
        <!---------------------->
            <ul class="round" id="powerandgift">
            <li>
                <a href="javascript:;" id="qdzjfclick">
                   <span>签到赚积分<em class="ok"><?php if ($yjqd){ ?>今日已经签到<?php }else{ ?>今日还未签到<?php } ?></em></span>
                </a>
                            </li>
            <li>
                <a href="hykxx-<?php echo $hykrecord->id; ?>.html">
                    <span>个人资料</span>
                </a>
            </li>
        </ul>

<?php } ?>
	    <ul class="round">
        <li><a href="hykmm-sm-<?php echo $hykid; ?>.html#mp.weixin.qq.com"><span>会员卡说明</span></a></li>
        <li><a href="hykmd.html#=mp.weixin.qq.com"><span>适用门店电话及地址</span></a></li>
    </ul>
    <ul class="round">
                <li class="addr">
            <a href="<?php echo $hyurl; ?>">
                <span>地址: <?php echo $hyk->addr; ?></span>
            </a>
        </li>
        <li class="tel">
            <a href="tel:<?php echo $hyk->tel; ?>">
                <span>电话: <?php echo $hyk->tel; ?></span>
            </a>
        </li>
    </ul>
</div>

<div class="plugback">
    <a href="javascript:history.back(-1)">
        <div class="plugbg themeStyle">
            <span class="plugback"></span>
        </div>
    </a>
</div>
<!--输入框-->
<div class="window" id="windowcenter" style="height:auto!important;max-height:1000px!important;bottom:inherit!important;">
    <div id="title" class="wtitle">领卡信息<span class="close" id="alertclose"></span></div>
    <div class="content">
        <div id="txt">填写真实的姓名以及电话号码，即可获得会员卡，享受会员特权。</div>
        <script>
            var navg = navigator.userAgent.toLowerCase(), html = '';
            if(navg.match(/(ipad)|(iphone)/i)){
                html = '<p><input name="truename" value="" class="px" id="un" type="text" placeholder="请输入您的姓名" ontouchstart="event.preventDefault();this.focus();this.select();" /></p>\
						<p><input name="tel" class="px" id="tel" value="" type="tel" placeholder="请输入您的电话" ontouchstart="event.preventDefault();this.focus();this.select();" /></p>\
												';
            }else{
                html = '<p><input name="truename" value="" class="px" id="un" type="text" placeholder="请输入您的姓名" /></p>\
						<p><input name="tel" class="px" id="tel" value="" type="tel" placeholder="请输入您的电话" /></p>\
												';
            }
            document.write(html);
        </script>
        <input type="button" value="确 定" name="确 定" class="txtbtn" id="windowclosebutton">
    </div>
</div>



<style>
    .masklayer{
        display:none;
        position:fixed;
        top:0;
        left:0;
        z-index:2000;
        width:100%;
        height:100%;
        background-color:rgba(0,0,0,0.5);
        text-align:right;
    }
    .masklayer.on{
        display:block;
    }
    .masklayer img{
        margin-top:10px;
        margin-right:30px;
        width:160px;
    }
</style>
    </section>
    <script type="text/javascript">
    $(function(){
    	$('#alertclose').click(function(){
    		$('#windowcenter').hide();
    	});
    	$("#showcard").click(function () {
    		$('#windowcenter').slideDown();
        });
    	$('#windowclosebutton').click(function(){
    		var un = $.trim($('#un').val());
    		var tel = $.trim($('#tel').val());
    		if(un=='' || tel==''){
    			tusi('请完善用户信息');
    			return;
    		}
    		ajax('hykok-add.html',{ tel:tel,un:un,id:'<?php echo $hykid; ?>'},function(m){
    			if(m=='rep'){
    				location.reload(true);
    			}
    			tusi('领取成功');
    			//window.location.reload();
    			//$('#applyBtn').show().find('a').html('会员卡SN：'+m).attr('href','javascript:;');
    			//$('#xxsjdiv').hide();
    			location.reload(true);
    		});	
    	});
		$('#qdzjfclick').click(function(){
			ajax('hykmm-qdl-<?php echo $hykid; ?>.html',{ rid:'<?php echo $hykrecord->id; ?>'},function(m){
				if(m=='ok'){
					tusi('签到成功,积分+<?php echo $hyk->jf; ?>');
					setTimeout(function(){
						location.reload(true); 
					},888);
					
				}else if(m=='not'){
					tusi('你还不是会员');
				}
			});	
		});
    });


</script>
</body>
</html>