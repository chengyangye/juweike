<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="<?php echo $_SERVER['WEB_NAME']; ?>、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" name="Keywords">
<meta content="<?php echo $_SERVER['WEB_NAME']; ?>，国内领先的微信公众智能服务平台，<?php echo $_SERVER['WEB_NAME']; ?>八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" name="Description">
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
	
<script type="text/javascript">
$(function(){
	$('.nav-tabs').each(function(){
		var o = this;
		var id = $(this).attr('id');
		$(this).children('li').click(function(){
			$(o).children('li').removeClass('active');
			$(this).addClass('active');
			$('#'+id+'Content').children('div').hide();
			$($(this).find('a').attr('ohref')).show();
		});
	});
});

</script>
</head>
<body>
	
    <div id="main">
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span10">
                                <h3><i class="icon-edit-sign"></i>功能介绍</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>
                        <!--微活动-->
                         <div class="row-fluid">
                            <div class="box-title">
                           <h4 class="text-warning"><strong class="text-info">微活动：</strong>优惠券+刮刮卡+大转盘+幸运机+一战到底</h4>
                           <h5>微活动，强大的交互体验，极大提高了用户粘性和粉丝活跃度。</h5>

                        </div>

                       <div class="box-content">

                        <ul id="myTab" class="nav nav-tabs">
                          <li class="active"><a ohref="#Coupon" data-toggle="tab">优惠券</a></li>
                          <li class=""><a ohref="#Scratch" data-toggle="tab">刮刮卡</a></li>
                          <li class=""><a ohref="#Wheel" data-toggle="tab">大转盘</a></li>
                          <li class=""><a ohref="#Xyj" data-toggle="tab">幸运机</a></li>
						  <!-- <li class=""><a ohref="#Vote" data-toggle="tab">幸运机</a></li> -->
                          <li class=""><a ohref="#yzdd" data-toggle="tab">一站到底</a></li>
                   
                        </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane active in" id="Coupon">
                <dl>
                	<dt class="span7">
                    	<p>优惠券是用于微信上与顾客互动的一种营销方式，不仅可以展现自己的产品，更能让顾客在使用此项功能时感受到更多的乐趣。</p>
                        <h3>使用方法：</h3>
                        <p>1、新增优惠券活动：编辑活动开始的内容，包括关键词、活动名称、成功抢到说明、简介、活动起始时间、活动说明；</p>
                        <p>2、编辑活动结束内容：填写活动标题和活动说明；</p>
                        <p>3、	点击下一步，进行活动设置。设置优惠券的名称、数量，sn码生成设置、设置抽奖页面是否显示奖品数量，提交保存活动；</p>
                        <p>4、	设置活动开始；（点击开始活动后，可以修改其他活动内容,活动开启会自动生成SN码，也就是兑奖码）</p>
                        <p>5、	设置活动结束；（你设置的活动结束时间到了会自动结束活动，你也可以时间没有到直接结束活动）</p>
                        <p>6、	兑奖，查看活动粉丝中奖详情；（点击数据监测）</p>
                        <p>7、	删除活动（最好是在最后兑奖时间过了，再删除活动）　</p>
                        <p>备注：每个网友每次活动只能领取一张优惠劵。</p>
                    </dt>
                    <!-- <dd class="span5"><img src="Coupon.png"></dd> -->
                </dl>
              </div>

              <div class="tab-pane" id="Scratch">
                <dl>
                	<dt class="span7">
                    	<p>该模块可为商家提供刮刮卡抽奖服务，全网第一个可以通过微信玩刮刮卡，用户通过手机屏幕进行刮奖的游戏！</p>
                        <h3>使用方法：</h3>
                        <p>1、进入抽奖设置，设定活动时间、中奖几率、触发关键词和相应的奖品；</p>
                        <p>2、活动设定后，在规定时间到时，网友发送关键词如“抽奖”，就会发送给他一张刮刮卡，粉丝通过屏幕进行刮奖，中奖后填写用户名和手机号，商家根据手机号进行比对，确认无误后即可兑换奖品。</p>
                        <p>3、每个网友每次活动参与次数和每天刮奖的次数都可设置。</p>
                    </dt>
                    <!-- <dd class="span5"><img src="Scratch.png"></dd> -->
                </dl>
              </div>

             <div class="tab-pane" id="Wheel">
                 <dl>
                	<dt class="span7">
                    	<p>该模块可为商家提供转盘抽奖服务，商家通过设置活动时间，预计参加抽奖人数，相应奖项和触发关键词，由网友在线参与抽奖。</p>
                        <h3>使用方法：</h3>
                        <p>1、设置抽奖前需要先编辑一条图文消息，提前一天或者当天推送给所有粉丝，告知在某个时间段发某个关键词可以参与抽奖；</p>
                        <p>2、进入抽奖设置，设定活动的类别，设定活动的预热时间，已经活动的开始和结束时间，设置活动回复关键词“抽奖”，确定设置后系统会根据设定的中奖几率产生设置奖项；</p>
                        <p>3、活动设定后，在规定时间到时，网友发送关键词如“抽奖”，就可以参与次转盘，中奖后填写用户名手机号，网友到店时向商家出示手机号，商家比对后确认无误即可兑换奖品。</p>
                        <p>4、每个网友每次活动参与次数和每天刮奖的次数都可设置。</p>
                    </dt>
                    <!-- <dd class="span5"><img src="Wheel.png"></dd> -->
                </dl>
              </div>
		
			  
			  <div class="tab-pane" id="Xyj">
                <dl>
                	<dt class="span7">
                    	<p>商家采用幸运机的活动来吸引用户，与用户之间产生互动，从而促进企业营销的一种手段。</p>
                        <h3>使用方法：</h3>
                        <p>1、商家发布一个活动名称，活动开始结束时间、关键字、中奖选项中奖几率、奖品等信息；</p>
                        <p>2、设置活动的回复关键词为“幸运机”；</p>
                        <p>3、每个网友每次活动参与总次数和每天参与的次数都可设置。</p>
                    </dt>
                    <!-- <dd class="span5"><img src="Vote.png"></dd> -->
                </dl>
              </div>
			  
			  
             
              
              <div class="tab-pane" id="yzdd">
                <dl>
                	<dt class="span7">
                    	<p>该模块是以答题比赛的方式，给用户带来乐趣的一种营销性活动。如果这一季您连续参加了答题，系统会根据答题正确率和答题速度自动计算您的积分，赛季结束以后，商家会根据最终的比赛结果，评选出一二三等奖各5名，精美礼品等着您！</p>
                        <h3>使用方法：</h3>
                        <p>1、新增，进入“新建”页，编辑活动名称，活动时间，触发关键词（如：一战到底），图文封面，活动说明，活动规则，参与天数；</p>
                        <p>2、奖品设置、数量设置，根据商家需求填写，会在用户答题完毕显示； </p>
                        <p>3、保存并设置考题，进入题目设置页面，可自定义添加题目，插入行业相关问题提高用户的认知。 </p>
                        <p>备注：</p>
                        <p>（1）每天每个用户只能参加一次答题,答对加分，答错不扣分；</p>
                        <p>（2）用户参加答题需提交姓名及手机号码，商家可查询；</p>
                        <p>（3）积分累计到活动结束后，可在数据监测中查询排名顺序参与人数、答题率及用户信息。</p>
                    </dt>
                    <!-- <dd class="span5"><img src="yzdd.jpg"></dd> -->
                </dl>
              </div>
              
              
            </div>
          </div>
          </div>

                        <!--微服务-->
						<!-- 
                         <div class="row-fluid">
                            <div class="box-title">
                            <h4 class="text-warning"><strong class="text-info">微服务：</strong>微信企业应用与电子商务</h4>
                            <h5>自定义菜单、无需重新开发APP</h5>

                        </div>
              <div class="box-content ">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a ohref="#weather" data-toggle="tab">城市天气</a></li>
              <li class=""><a ohref="#bk" data-toggle="tab">百度百科</a></li>
              <li class=""><a ohref="#translate" data-toggle="tab">即时翻译</a></li>
              <li class=""><a ohref="#stock" data-toggle="tab">股票查询</a></li>
              <li class=""><a ohref="#delivery" data-toggle="tab">快递查询</a></li>
              <li class=""><a ohref="#bus" data-toggle="tab">火车查询</a></li>
              <li class=""><a ohref="#flight" data-toggle="tab">航班查询</a></li>
              <li class=""><a ohref="#rules" data-toggle="tab">星座密语</a></li>
 
              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="weather">
                <dl>
                	<dd class="span5">
                    <img src="weather.jpg">
                    </dd>
                    <dt class="span5">
                    <p>城市天气是运用于微信公众平台上让用户随时随地查询天气情况的一种功能，更能方便用户的出行。</p>
                    <h3>使用方法：</h3>
                    <p>1、开通城市天气服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需输入“所在的城市+天气“，就能查询到所在城市的天气情况。</p>
                    <p></p>
                    <p></p>
                     </dt>
                </dl>
              </div>

              <div class="tab-pane fade" id="bk">
                <dl>

                	<dd class="span5">
                    <img src="bk.jpg">
                    </dd>
                    <dt class="span5">
                    <p>百度百科利用微信为用户提供一个创造性的移动互联网平台，充分调动互联网所有用户的力量，汇聚上亿用户的头脑智慧，积极进行交流和分享，同时实现与搜索引擎的完美结合，从不同的层次上满足用户对信息的需求。</p>
                    <h3>使用方法：</h3>
                    <p>1、开通百度百科服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需输入“百科查询内容“，如”百科姚明“，就能查询到姚明的所有相关资料。</p>
                     </dt>
                </dl>
              </div>

             <div class="tab-pane fade" id="translate">
                 <dl>
                	<dd class="span5">
                    <img src="translate.jpg">

                    </dd>
                    <dt class="span5">
                    <p>即时翻译是一款基于微信平台的翻译软件，支持语音输入与文本输入及发音，目前支持汉语、英语、汉语、日语、法语、德语、意大利语、西班牙语、捷克语、俄语和土耳其语之间的互相翻译。</p>
                    <h3>使用方法：</h3>
                    <p>1、开通即时翻译服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需要输入“翻译查询内容（中文或英文）”，即可以查询到所要翻译的内容。</p>
                     </dt>
                </dl>
              </div>

              <div class="tab-pane fade" id="stock">
                <dl>
                	<dd class="span5">
                    <img src="stock.jpg">

                    </dd>
                    <dt class="span5">
                    <p>股票查询是一款基于微信平台查询股票最动态的软件，能够方便用户理财。</p>
                    <h3>使用方法：</h3>
                    <p>1、开通股票查询服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需输入"股票+数字代码 或 股票+字母缩写"，如“股票payh、股票000001”，就可以查询到股票的最新动态。</p>
                     </dt>
                </dl>
              </div>

              <div class="tab-pane fade" id="delivery">
                 <dl>

                	<dd class="span5">
                    <img src="delivery.jpg">
                    </dd>
                    <dt class="span5">
                    <p>快递用户通过进入到快递查询公众账号，持快递公司邮单号，对包裹快递过程进行跟踪查询。</p>
                    <h3>使用方法：</h3>
                    <p>1、开通快递查询服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需输入“ 快递单号”，如”查申通快递222222“，就可以查询到快递的最新动态。</p>
                     </dt>
                </dl>
              </div>

                <div class="tab-pane fade" id="bus">
                  <dl>
                	<dd class="span5">

                    <img src="bus.jpg">
                    </dd>
                    <dt class="span5">
                    <p>火车查询是一款基于微信平台的火车查询工具，用户可以通过火车查询公众平台随时随地查询火车班次时刻表。</p>
                    <h3>使用方法：</h3>
                    <p>1、开通火车查询服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需输入“ 火车车次”，如“ 火车T109“，就可以查询到火车的最新动态。</p>
                     </dt>
                </dl>
              </div>

                <div class="tab-pane fade" id="rules">
                 <dl>
                	<dd class="span5">
                    <img src="flight.jpg">

                    </dd>
                    <dt class="span5">
                    <p>航班查询是一款基于微信平台的为用户提供实时航班查询的服务，用户可以通过航班查询公众平台随时随地查询到航班的最新动态。</p>
                    <h3>使用方法：</h3>
                    <p>1、开通航班查询服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需输入“ 航班班次”，如“CZ5108“，就可以查询到航班的最新动态。</p>
                     </dt>
                </dl>
              </div>

                <div class="tab-pane fade" id="rules">
                 <dl>

                	<dd class="span5">
                    <img src="rules.jpg">
                    </dd>
                    <dt class="span5">
                    <p>星座密语是一款基于微信平台的为用户提供星座查询的服务，用户可以通过星座密语公众平台随时随地查询到星座的最新动态。</p>
                    <h3>星座密语</h3>
                    <p>1、开通星座密语服务，在状态栏选择“ON”即可；</p>
                    <p>2、用户只需输入“ 星座”，如“射手座“，就可以查询到射手座相关的星座信息。</p>
                     </dt>
                </dl>
              </div>

            </div>
          </div>
          </div>
          -->
		  
		  <div class="box">
                 <div class="box-title">
                     <h4 class="text-warning"><strong class="text-info">LBS设置：</strong>是由商家设置店铺位置，用户提交当前所在位置后，可以找到最近的商家店铺，并查看商家的促销活动。</h4>
                     </div>

                        <div class="box-content">
                          
                <dl>
                	<dt class="span7">
                        <h3>使用方法：</h3>
                        <p>1、新增，进入“新建”页，编辑商家的名称、位置、类型、电话等信息；</p>
                        <p>备注：</p>
                        <p>1、自定义LBS数据：设置商铺的地理位置即可；</p>
                        <p>2、填写标题、图文封面、电话、简介、详细页内容；</p>
                        <p>3、当前商铺有活动可进行活动融合添加，保存，生成LBS设置。</p>
                    </dt>
                    <!-- <dd class="span5"><img src="lbs.jpg"></dd> -->
                </dl>
             </div>
           </div>
						
						
		  
            <div class="box">
               <div class="box-title">
                <h4 class="text-warning"><strong class="text-info">微吧：</strong>“微吧”是一种能为商家带来巨大的社会化流量的功能。“微吧”可以粉丝发布话题，在微吧中进行讨论，商家也可以发布行业信息等话题，让粉丝参与，获取粉丝感兴趣的话题等。</h4>
                  </div>

                        <div class="box-content">
                          
                <dl>
               
                	<dt class="span7">
                        <h3>使用方法：</h3>
                        <p>1、设置关键字，设置微吧图片和说明；</p>
                        <p>2、在话题管理中发布话题或查看用户发布的话题；</p>
                    </dt>
                     <!-- <dd class="span5"><img src="wly.png"></dd> -->
                </dl>
				</div>
        </div>				
						
						
						
            <div class="row-fluid">
                            <div class="box-title">
                            <h4 class="text-warning"><strong class="text-info">微会员卡：</strong>移动时代的社会化会员管理平台</h4>
                            <h5>微会员卡
通过在<?php echo $_SERVER['WEB_NAME']; ?>平台内植入会员卡，帮助企业建立新一代的移动会员管理系统。清晰记录企业用户的消费行为并进行数据分析;还可根据用户特征进行精细分类，从而实现各种模式的精准营销。</h5>

                        </div>

                        <!--微信会员卡
(SCRM)-->
                         <div class="box-content">
                          <ul id="hmyTab" class="nav nav-tabs">
                          <li class="active"><a ohref="#cardset" data-toggle="tab">会员卡设置</a></li>
                          <li class=""><a ohref="#cardman" data-toggle="tab">会员管理</a></li>
                          <li class=""><a ohref="#consumeman" data-toggle="tab">消费管理</a></li>
                          <!--<li class=""><a ohref="#statistics" data-toggle="tab">数据统计</a></li> -->
                          <!-- <li class=""><a ohref="#storeset" data-toggle="tab">门店管理</a></li> -->
             
                          
                        </ul>
                       
                        <div id="hmyTabContent" class="tab-content">
                        
                        	<div class="tab-pane fade active in" id="cardset">
                            <dl>
                               
                                <dt class="span7">
                                <p>会员卡设置是指商家通过在<?php echo $_SERVER['WEB_NAME']; ?>平台内植入会员卡，对会员卡的设置来管理会员。</p>
                                <h3>使用方法：</h3>
                             <p>  1、	设置商家信息，包括商家名称、触发关键词、商户所在地、商家类别、商家详细地址、联系方式。</p>
                            <p>2、	设置卡片信息。包括会员卡名称、会员卡logo，会员卡正反面图标、首页提示文字等。</p>
                            <p>3、	添加会员特权信息、通知信息、说明信息。</p>
                            <p>4、	领取后会显示会员卡号。</p>

                                 </dt>
                                 
                               <!-- <dd class="span5">
                                <img src="cardset.png"> 
                                </dd> -->
                            </dl>
             				 </div>
                             
                             <div class="tab-pane" id="cardman">
                            <dl>
                                 <dt class="span7">
                                <p>会员管理是指商家可以通过<?php echo $_SERVER['WEB_NAME']; ?>平台后台查看到用户领取会员卡的记录。</p>
                                <h3>使用方法：</h3>
                                  <p>1、商家可以通过输入用户名或者手机号码查询已经领取会员卡的用户信息，包括：会员卡号、姓名、手机号码、领卡时间、状态。</p>
                                  <p>2、商家可以点击操作对用户进行充值、消费的设置。</p>
                                 </dt>
                            
                                <!-- <dd class="span5">
                                <img src="cardman.png"> 
                                </dd>  -->
                               
                            </dl>
             				 </div>
                             
                             
                             <div class="tab-pane" id="consumeman">
                            <dl>
                            <dt class="span7">
                                <p>消费管理是指商家可以通过<?php echo $_SERVER['WEB_NAME']; ?>平台后台查看到用户消费管理的信息。</p>
                                <h3>使用方法：</h3>
                            <p>1、商家可以通过输入会员卡号查询特权消费用户的信息。</p>
                            
                                 </dt>
                               <!-- <dd class="span5">
                                <img src="consumeman.png"> 
                                </dd> -->
                                
                            </dl>
             				 </div>
                             
                             <!--
                             <div class="tab-pane fade" id="statistics">
                            <dl>
                              
                                <dt class="span7">
                                <p>数据统计是指商家可以通过<?php echo $_SERVER['WEB_NAME']; ?>后台查询最近一个月新增会员的趋势和最近一个月消费次数趋势的走向图。</p>
                                <h3>使用方法：</h3>
                                <p> 1、商家可以通过点击最近一个月新增会员的趋势图横坐标上的小圆点，查看到当天新增会员的人数。</p>
                                <p>2、同时可以通过查看右侧新增会员的区域，查看到今日新增会员人数、昨日新增会员人数和目前总会员人数。</p>
                                <p>3、商家还可以点击最近一个月消费次数的趋势图横坐标上的小圆点，查看到当天消费的人数。</p>
                                <p>4、同样的通过右侧消费次数的区域内，可以查看到今日消费次数、昨日消费次数数和目前总消费次数。</p>

                                 </dt>
                                   <dd class="span5">
                                <img src="statistics.png"> 
                                </dd> 
                            </dl>
             				 </div>
                             -->
                                 <div class="tab-pane" id="storeset">
                            <dl>
                               
                                <dt class="span7">
                                <p>门店设置是指商家通过<?php echo $_SERVER['WEB_NAME']; ?>平台设置自己的商铺信息，从而让用户更加详细的了解商家的确切资料</p>
                                <h3>使用方法：</h3>
                                <p>1、进入门店设置，如果之前设置过LBS，则LBS中的商家店面信息会显示在里面，将LSB标记设置成门店标记，可以在优惠券、抽奖、预约、团购等活动中指定门店消费</p>
                                <p>2、填写门店简介。</p>
                                <p>3、点击保存即可。</p>
                                 </dt>
                                  <!-- <dd class="span5">
                                <img src="storeset.png">
                                </dd> -->
                            </dl>
             				 </div>
                             
                         
                        </div>
                      </div>
               </div>
                       <!--微官网-->
                         <div class="box">
                                <div class="box-title">
                                  <h4 class="text-warning"><strong class="text-info">微官网：</strong>五分钟打造超炫微网站</h4>
                                </div>

                          <div class="box-content">
                            <dl>
                                <!-- <dd class="span5">
                                <img src="microwebsite.png">
                                 </dd>  -->
                                <dt class="span6">
                                 <p><?php echo $_SERVER['WEB_NAME']; ?>全国首创微网站，用户只要通过简单的设置，就能快速生成属于您自己的微网站，并且支持顶部导航、各种精美模板，供您选择，可以设计出自己的风格，让您的粉丝有种惊艳的感觉。</p>
                                    <p>1、微官网设置：商家可以设置微官网的标题、触发关键词、匹配模式、图文消息标题、上传图文消息封面、编辑图文消息简介，设置完全符合商家需求的个性化网站。</p>
                                    <p>2、微官网页面跳转设置：选中首页的某个内容块，出现标题、目标等字样，在目标下拉框中选择您要跳转的页面即可；</p>
									<p>3、设置完后点击保存。</p>
                                </dt>
                            </dl>
                          </div>

                      </div>

					  <!--
                       
                         <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微商城：</strong>打造微信移动电商</h4>
                              </div>

                        <div class="box-content">
                            <dl>
                                <dt class="span5">
                                    <p>“微商城”（又名Vshop）是由上海晖硕信息科技有限公司推出的，一款基于移动互联网的商城应用服务产品，以时下最热门的互动应用微信为媒介，配合微信5.0微信支付功能，实现商家与客户的在线互动，即时推送最新商品信息给微信用户，实现微信在线的购物功能。</p>
                                    <p>其主要功能包括：支持商品管理、支持会员管理、支持购物车、支持商品分类管理、支持订单管理、支持店铺设置、支持支付方式管理、支持配送方式管理。</p>
                                </dt>
                                <dd class="span5"><img src="micromall.png"></dd>
                            </dl>
                          </div>
                        </div>

                       
                         <div class="box">
                                <div class="box-title">
                                  <h4 class="text-warning"><strong class="text-info">微酒店：</strong></h4>
                                </div>

                          <div class="box-content">
                            <dl>
                                 <dt class="span1"></dt>
                                <dd class="span4">
                                <img src="microhote.png">
                                 </dd>
                                <dt class="span6">
                                 <p>“微酒店”是一款基于移动互联网的酒店应用服务产品，提供最全面的互联网营销解决方案，深谙客户需求、了解行业动向，并且具有强大的媒体资源控制力，代理着国内主流酒店网络媒体广告，调动一切资源，帮助酒店实现利益最大化。</p>
                                    <p>现已涵盖了五大模块包括：</p>
                                    <p>1、消息管理：包含自动消息回复和功能性消息编辑功能，优化对用户的消息服务，提升用户体验。</p>
                                    <p>2、营销管理：主要对群发消息进行管理，这里特别提一下，酒店可以根据不同营销需求精准推送消息给用户。</p>
                                    <p>3、门店管理：即对门店详情页面显示内容进行管理。</p>
                                    <p>4、用户管理：用户信息管理模块，给每个用户打上各种标签，为精准营销提供服务。</p>
                                    <p>5、数据统计;各式各样的数据为后期运营提供重要帮助。</p>

                                </dt>
                            </dl>
                          </div>

                      </div>

                      
                         <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微推送(LSP)：</strong>微信附近的人——精准营销</h4>
                              </div>

                        <div class="box-content">
                            <dl>
                                <dt class="span5">
                                    <p>Location Surround Push(基于附近的人的消息推送)微信中基于LBS(基于位置的服务)的功能插件“查看附近的人”便可以使更多陌生人看到这种强制性广告。</p>
                                    <p>用户点击“查看附近的人”后，可以根据自己的地理位置查找到周围的微信用户。在这些附近的微信用户中，除了显示用户姓名等基本信息外，还会显示用户签名档的内容。所以用户可以利用这个免费的广告位为自己的产品打广告。</p>
                                    <p>营销人员在人流最旺盛的地方后台24小时运行微信，如果“查看附近的人”使用者足够多，这个广告效果也会不断随着微信用户数量的上升，可能这个简单的签名栏也会变成会移动的“黄金广告位”。</p>
                                </dt>
                                <dd class="span5"><img src="micropush.jpg"></dd>
                            </dl>
                          </div>
                        </div>
                        
                        
                        
                        <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微医疗：</strong>是指通过<?php echo $_SERVER['WEB_NAME']; ?>平台实现在线挂号、内容设置、预约查询、预约统计的一整套服务体系，能够有效解决患者挂号难、排队累、就医不方便等一系列难题。</h4>
                              </div>

                        <div class="box-content">
                            <dl>
                               <dd class="span5"><img src="micromed.png"></dd>
                                <dt class="span7">
                                    <p>微医疗是指通过<?php echo $_SERVER['WEB_NAME']; ?>平台实现在线挂号、内容设置、预约查询、预约统计的一整套服务体系，能够有效解决患者挂号难、排队累、就医不方便等一系列难题。</p>
                                    <p>1、挂号设置：商家通过设置触发关键字、图文封面标题、上传图文封面、挂号页头部图片、编辑图文简介，来设置一整套挂号体系。</p>
                                    <p>2、内容设置：第一步，设置字段类型，包括：单行文字、性别选择、时间选择、多行文字、科室选择、专家选择、病种选择；第二步，设置字段名称，包括：患者姓名、性别、年龄、联系电话、预定日期、联系地址、预约科室、预约专家、预约病种等信息；第三步、设置初始内容：对应着字段名称填写对应的信息；第四步，操作：设置是否显示。</p>
                                    <p>3、预约查询：可以通过输入预约号、电话、姓名、预约科室、预约专家、预约病种或者预约日期的关键词，来查询到患者的基本信息。</p>
                                    <p>4、微医疗数据统计：通过点击“最近一月新增预约趋势图”横坐标上的圆点可以查询到当天的预约人数，在右边的新增预约板块可以查看到今日新增预约人数和昨日新增预约人数以及目前预约总人数；通过点击“最近一月到诊人数趋势图“横坐标上的圆点可以查询到当天的到诊人数，在右边的到诊人数板块可以查询到今日到诊人数和昨日到诊人数以及目前到诊总人数。</p>
                                </dt>
                                
                            </dl>
                          </div>
                        </div>
							-->
                            
                            
                        
                        <!-- 
                        <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微相册：</strong>微相册作为<?php echo $_SERVER['WEB_NAME']; ?>平台的一项主打基本功能，为<?php echo $_SERVER['WEB_NAME']; ?>用户提供图片的存储和展示服务，同时拓展成为基于图片兴趣分享的社区型产品。在微相册里，你可以方便的创建相册，轻松地发布你的照片，方便你与家人、朋友分享快乐、感动和成长…还可以拓展为商家开展活动的一种展现方式。</h4>
                              </div>

                        <div class="box-content">
                          
                <dl>
                 <dd class="span5"><img src="wxc.png"></dd>
                	<dt class="span7">
                        <h3>使用方法：</h3>
                        <p>1、	相册设置：上传相册头部图片，选择相册的展现方式，点击保存。</p>
                        <p>2、相册管理：创建相册，添加图片，拖拽图片可排序(图片大小不超过300k,50张上限)，点击保存即可。</p>
                     
                    </dt>
                   
                </dl>
           
                          </div>
                        </div>
                        
                        -->
                      
                       
					   
					     <div class="box">
                                <div class="box-title">
                                  <h4 class="text-warning"><strong class="text-info">微投票：</strong>移动时代的投票管理平台</h4>
                                </div>

                          <div class="box-content">
                            <dl>
                                <!-- <dd class="span5">
                                <img src="microwebsite.png">
                                 </dd>  -->
                                <dt class="span6">
                                 <p>微投票 通过在<?php echo $_SERVER['WEB_NAME']; ?>平台内植入微投票，商家采用投票的活动来吸引用户，与用户之间产生互动，从而促进企业营销的一种手段。</p>
								 <p>使用方法：</p>
                                    <p>1、商家发布一个活动名称，例如：“您觉得我们的微官网哪里做的不足？”；</p>
									<p>2、商家可以设置两到四个选项：比如界面、功能、速度、质量等，每个用户只能选择一个选项；</p>
									<p>3、设置活动的回复关键词为“投票”；</p>
									<p>4、编辑活动说明，例如：“每位参与投票的朋友都将获得商家送出的尊贵礼品，同时你还将参加抽奖，有机会获得iphone5等大奖。</p>
									<p>5、设置活动的起开始时间和活动的结束时间、活动的宣传部图片。</p>
                                </dt>
                            </dl>
                          </div>

                      </div>
					  
					  
					  
                       
                        <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微调研：</strong>是一种以问卷调查的方式，基于<?php echo $_SERVER['WEB_NAME']; ?>平台而展现出的一种新的在线调研应用方式，您可以在调研您相关行业的知名度、您想调研的任何行业认知度，具备有对微信用户进行生活形态研究的能力，受到行业客户的一致认可。</h4>
                              </div>

                        <div class="box-content">
                          
                <dl>
                <!-- <dd class="span5"><img src="wdy.png"></dd> -->
                	<dt class="span7">
                        <h3>使用方法：</h3>
                        <p>1、进入微调研界面，新建微调研：设置微调研名称、微调研时间、回复关键词；</p>
                        <p>2、选择图文封面，设置开始说明，调研开始时间、结束时间；</p>
                        <p>4、设置活动结束说明，编辑活动的结束语。</p>
                        <p>5、保存并设置题目。</p>
                        <p>6、进入题库管理：设置题目名称、编辑选项、设置题目答案(至少2项)，点击保存即可。</p>

                    </dt>
                    
                </dl>
           
                          </div>
                        </div>
						
						
						 <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微预约：</strong>是一种在线预约的方式，基于<?php echo $_SERVER['WEB_NAME']; ?>平台而展现出的一种新的预订方式，您可以在线预订医院、商场、影院等各个领域 ，方便快捷，受到微信用户的一致好评。</h4>
                              </div>

                        <div class="box-content">
                          
                <dl>
                <!-- <dd class="span5"><img src="wdy.png"></dd> -->
                	<dt class="span7">
                        <h3>使用方法：</h3>
                        <p>1、进入在线预约界面，新建预约：设置微预约名称、微预约时间、回复关键词；</p>
                        <p>2、选择图文封面，设置开始说明，预约开始时间、结束时间；</p>
                        <p>4、设置预约的商品，上传商品的图片，可以添加商品的描述，最多添加3项描述，比如预约宝马试驾，在名称描述中添加“宝马车型”，在描述中填写“宝马X3”，如果有多款车型供选择，可以在描述中用英文逗号间隔开如“宝马X3,宝马X5”等。</p>
                        <p>5、保存设置。</p>
                        <p>6、进入数据监测查看粉丝预约情况。</p>

                    </dt>
                    
                </dl>
           
                          </div>
                        </div>
						
                       
					   <!--
                       <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微喜帖：</strong>颠覆传统方式，让庆典更时尚环保</h4>
                                        <h4>微喜帖是针对结婚庆典而推出的一款行业产品，主要是为计划结婚的用户们，通过使用微喜帖应用来向亲朋好友传播自己即将结婚的动态，可以展现用户想要表达的话、结婚日期、地址、导航、接待电话，同时亲朋好友可以在微喜帖平台上提交赴宴通知、送上祝福，并且转发喜帖。</h4>
                              </div>

                        <div class="box-content">
                          
                <dl>
             
                	<dt class="span7">
                        <h3>使用方法：</h3>
                        <p>1、进入喜帖管理界面，点击添加喜帖，设置喜帖标题、触发关键词、上传喜帖封面、开场动画、缩略图；</p>
                        <p>2、填写新郎名字、新娘名字、选择新郎和新娘名字排列顺序；</p>
                        <p>3、填写联系电话、婚宴日期、宴席地址、添加喜帖视频、选择背景音乐、上传喜帖图片；</p>
                        <p>4、设置密码，可以通过微信查看来宾名单，编辑想要说的话，限200个字以内，点击保存。</p>
                    </dt>
                      <dd class="span5"><img src="wxt.png"></dd> 
                </dl>
           
                          </div>
                        </div>
                          
                        <div class="box">
                             <div class="box-title">
                                        <h4 class="text-warning"><strong class="text-info">微汽车：</strong>一键在线预约</h4>
                                        <h4>微汽车采用<?php echo $_SERVER['WEB_NAME']; ?>平台进行汽车的销售管理、预约保养、预约试驾、保险计算、车贷计算、车型比较、违章查询等功能，整个过程非常便捷，省时省力省心，并通过与<?php echo $_SERVER['WEB_NAME']; ?>平台有交互能力的手机客户端，快速便捷的实现了商家的销售管理与预约过程，同时也实现了客户无需进入4s店就能进行预约保养和试驾的功能。 </h4>
                              </div>

                        <div class="box-content">
                          
                <dl>
             
                	<dt class="span7">
                        <h3>使用方法：</h3>
                        <p>1、	进入微汽车设置界面，设置触发关键词、标题、上传图文封面、编辑图文消息简介，点击保存；</p>
                        <p>2、	进入品牌管理界面，添加品牌：编辑品牌名称、官方网站地址、上传logo标识、设置显示顺序、品牌简介，点击保存；</p>
                        <p>3、	进入车系管理界面，添加车系：选择品牌、编辑车系名称、车系简称、上传车系图片、设置显示顺序、编辑车系亮点，点击保存；</p>
                        <p>4、	进入车型管理界面，添加车型：编辑车型名称、选择品牌和车系、年款、设置显示顺序、设定指导价、经销商报价、上传图片（50张以内）、设置排量、档位个数、选择变速箱，点击保存；</p>
                        <p>5、销售管理：添加销售顾问，输入姓名、上传头像、填写电话号码、设置显示顺序、选择类型（售前/售后）、编辑简介，点击保存；</p>
                        <p>6、预约保养：点击新增预约，设置触发关键词、图文消息标题、上传图文封面、填写预约地址、设置地图标识、填写预约电话、上传订单页头部图片、编辑订单详情、设置重命名订单、重命名订单说明、重命名订单电话、订单接收设置、填写订单的起始和结束时间，设置订单内容，点击保存；</p>
                        <p>7、预约试驾：基本流程与预约保养一样，用户只需按照流程步骤来操作即可完成预约试驾功能，点击保存；</p>
                        <p>8、使用工作：保险计算、车贷计算、全款计算、车型比较，商家可以根据需求，设置打开功能。</p>
                        <p>9、点击“微官网”，进入微官网界面</p>
                        <p>　　a、设置“首页幻灯片”：添加几张您的微汽车首页的幻灯片，并做简短的描述；</p>
                        <p>　　b、“微官网”--“分类管理”：请建立6个状态为“显示”的分类（分别是最新资讯全部车型、销售管理、预约保养、预约试驾、实用工具），依次在“回复类型”中选择调用“微汽车”下的6个功能模块；</p>
                        <p>　　c、“微官网”--“模板管理”中选择我们为您精心设计的微汽车模板“模板0”以及“图文列表模板风格”中选择“列表0”；</p>
                        <p>　　d、“素材库”--“图文回复”：中添加新闻资讯内容，并将分类设置为“最新资讯”。</p>
                    </dt>
                      <dd class="span5"><img src="wqc.png"></dd> 
                </dl>
           
                          </div>
                        </div>
                        -->
                        
                        
                        

                      </div>


                        </div>
                    </div>
                </div>

            </div>
        
    
    <div id="footer">
        <p>
            Copyright © 2011-2013 <?php echo $_SERVER['WEB_NAME']; ?>. All Rights Reserved
        </p>
        <a href="" class="gototop"><i class="icon-arrow-up"></i></a>
    </div>







<div id="fallr-overlay"></div></body></html>