<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/album.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_switch.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
    <div id="main">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span12">
                                <h3><i class="icon-cog"></i>微信墙管理</h3>
                            </div>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" class="form-horizontal form-validate">
								<input type="hidden" name="aid" id="aid" value="33260"/>
                                <div class="control-group">
                                    <label class="control-label" for="keyword">上墙关键词:</label>
                                    <div class="controls">
                                    <?php echo $set->text('sqgjz','class="input-xlarge" required="required"'); ?>
                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="keyword">上墙回复语:</label>
                                    <div class="controls">
                                    <?php echo $set->text('res_word','class="input-xlarge"'); ?>
                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="keyword">网站标题:</label>
                                    <div class="controls">
                                    <?php echo $set->text('site_name','class="input-xlarge"'); ?>
                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="keyword">公众号名称:</label>
                                    <div class="controls">
                                    <?php echo $set->text('wechat_name','class="input-xlarge"'); ?>
                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>                                <div class="control-group">
                                    <label class="control-label" for="cover">二维码图片</label>
									  <div class="controls">
										<img class="thumb_img" src="<?php echo $set->pic; ?>" id="pic_pic" style="max-height:100px;" />
										<?php echo $set->hidden('pic');?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_pic','micro_wall_configpic');">选择二维码</button>
											<span class="help-inline">建议尺寸：宽400像素，高400像素,图片大小不超过300K</span>
										</span>
									</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">定时刷新间隔(秒):</label>
                                    <div class="controls">
		 							 <?php echo $set->text('ref_time','class="input-xlarge" '); ?>
                                     <span class="maroon">*</span>
                                    </div>
                                </div>
<!--                             
                                <div class="control-group">
                                    <label class="control-label" for="title">投票关键字:</label>
                                    <div class="controls">
		 							 <?php echo $set->text('tpgjz','class="input-xlarge" '); ?>
                                     <span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">投票名称:</label>
                                    <div class="controls">
		 							 <?php echo $set->text('vote_name','class="input-xlarge" '); ?>
                                     <span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="brief">投票列表:</label>
                                    <div class="controls">
										<?php echo $set->textarea('vote_list','class="input-large" style="height:80px;width:380px;"'); ?>	
                                        <span class="maroon">*</span>
                                        <span class="maroon"><br>以 “|”分割投票选项 如 王力宏|李云迪|林志颖|郭德纲|路人甲</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">投票方式:</label>
                                    <div class="controls">
		 							 <?php echo $set->text('vote_key','class="input-xlarge" '); ?>
                                     <span class="maroon">默认：#投票#+选手编号 (无需修改)</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">允许重复投票间隔(秒) 为0则不限制。:</label>
                                    <div class="controls">
		 							 <?php echo $set->text('vote_time','class="input-xlarge" '); ?>
                                     <span class="maroon">*</span>
                                    </div>
                                </div>
                              -->
                                <div class="control-group">
                                    <label class="control-label" for="brief">随机颜色列表:</label>
                                    <div class="controls">
										<?php echo $set->textarea('items_color','class="input-large" style="height:80px;width:380px;"'); ?>	
                                        <span class="maroon">*</span>
                                        <span class="maroon"><br>
										每条上墙信息随机颜色(css)列表数组，json格式，如果不清楚，请不要随意修改。
										默认："rgba(93,181,11,.8)","rgba(229,182,0,.8)","rgba(239,112,39,.8)","rgba(10,106,54,.8)","rgba(0,175,215,.8)"</span>
                                    </div>
                                </div>
								<div class="control-group">
								    <table class=" table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>功能开关</th>
                                                <th>状态</th>
                                            </tr>
                                        </thead>
                                        <tbody>
								                                            <tr>
                                                <td><span class="maroon">进入页面即自动刷新</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="run" val="<?php echo $set->run; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp1" value="1"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                           
											<tr>
                                                <td><span class="maroon">进入页面显示以前的内容（最多20条）</span></td>
                                               
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="show_last" val="<?php echo $set->show_last; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp2" value="2"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="maroon">进入页面显示二维码</span></td>
                                              
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="init_qrcode" val="<?php echo $set->init_qrcode; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
<!--                                          
                                            <tr>
                                                <td><span class="maroon">开启抽奖功能(若关闭，微信回复不显示抽奖代码)</span></td>
                                              
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="open_luck" val="<?php echo $set->open_luck; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="maroon">已抽到的人（中奖列表中）可再次参加抽奖</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="re_luck" val="<?php echo $set->re_luck; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="14"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td><span class="maroon">开启审核，上墙的内容需要通过后台审核才能显示</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="need_check" val="<?php echo $set->need_check; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="14"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                                                                   
                                            <tr>
                                                <td><span class="maroon">开启用户投票</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="open_vote" val="<?php echo $set->open_vote; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="14"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="maroon">投票内容也上墙</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="vote_pub" val="<?php echo $set->vote_pub; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="14"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="maroon">柱状图自动增高(更易直观分辨相近条目)</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="vote_auto_zoom" val="<?php echo $set->vote_auto_zoom; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="14"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
											
-->				
                                          
                                        </tbody>
                                    </table>
									</div>
                                 <div class="control-group">
                                    <label class="control-label" for="brief">链接地址</label>
                                    <div class="maroon">
										<?php echo Conf::$http_path; ?>wall/index.html?wid=<?php echo Session::get('wid'); ?>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="47">
                                <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
	<script type="text/javascript">
$(function(){
	$('.switch').each(function(){
		if($(this).attr('val')=='1'){
			$(this).children('div').removeClass('switch-off').addClass('switch-on');
		}else{
			$(this).children('div').removeClass('switch-on').addClass('switch-off');
		}
	});
	
	$('.switch').click(function(){
		var state = $(this).attr('val');
		if($(this).find('.switch-off').size()>0){
			$(this).find('.switch-off').removeClass('switch-off').addClass('switch-on');
			state = '1';
		}else if($(this).find('.switch-on').size()>0){
			$(this).find('.switch-on').removeClass('switch-on').addClass('switch-off');
			state = '0';
		}
		
		ajax('set.html',{ rel:$(this).attr('rel'),val:state},function(m){
			
		});
	});
});
</script>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
