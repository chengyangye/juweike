<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>在线预约</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/onlineBooking/style/Test-drive.css" />
</head>
<body id="onlinebooking">
	<div class="qiandaobanner">
		<img src="/res/onlineBooking/images/headLogo.jpg">
	</div>
	<div class="cardexplain">
		<ul class="round">
			<li>
				<h2>预约说明</h2>
				<div class="text">
				 <?php echo $onlineBooking->ms; ?>
				</div>
			</li>
		</ul>
		<!--后台可控制是否显示-->
		<ul class="round">
			<li class="addr">
				<a href="#"><span><?php echo $onlineBooking->addr; ?></span></a>
			</li>
			<li class="tel">
				<a href="tel:<?php echo $onlineBooking->tel; ?>">
					<span><?php echo $onlineBooking->tel; ?> 预约电话</span>
				</a>
			</li>
		</ul>
		<!--粉丝填写过的信息的，直接就显示名字电话，粉丝没有填写过信息的话，这里就直接留空让粉丝填写-->
		<?php if ($has_record == ''){ ?>
		<ul class="round">
			<li class="title mb"><span class="none">请认真填写表单</span></li>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th>联系人</th>
						<td><input name="un" type="text" class="px" id="un" value="" placeholder="请输入您的真实姓名"></td>
					</tr>
				</tbody></table>
			</li>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th>联系电话</th>
						<td><input name="tel" class="px" id="tel" value="" type="text" placeholder="请输入您的电话"></td>
					</tr>
				</tbody></table>
			</li>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th>预约日期</th>
						<td><!-- <input id='ctime' name='ctime' type="date" class="dropdown-select" /> -->
						 <?php echo $record->date('ctime',array('class'=>'dropdown-select')); ?> 
						</td>
					</tr>
				</tbody></table>
			</li>
            <li class="nob">
			    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
				    <tbody>
                        <tr>
				            <th>预订人数</th>
						    <td><input name="rs" class="px" id="rs" value="" type="text" placeholder="请输入预订人数"></td>
						</tr>
					</tbody>
                </table>
			</li>
			<?php if ($onlineBooking->type_name != ''){ ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
					    <th id="type_name"><?php echo $onlineBooking->type_name; ?></th>
						<td><?php echo $record->select($type,'type',array('class'=>'dropdown-select')); ?>
                            
                        </td>
					</tr>
				</tbody></table>
			</li>
			<?php } ?>
			<?php if ($onlineBooking->type1_name != ''){ ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
					    <th id="type1_name"><?php echo $onlineBooking->type1_name; ?></th>
						<td><?php echo $record->select($type1,'type1',array('class'=>'dropdown-select')); ?>
                            
                        </td>
					</tr>
				</tbody></table>
			</li>
			<?php } ?>
			<?php if ($onlineBooking->type2_name != ''){ ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
					    <th id="type2_name"><?php echo $onlineBooking->type2_name; ?></th>
						<td><?php echo $record->select($type2,'type2',array('class'=>'dropdown-select')); ?>
                            
                        </td>
					</tr>
				</tbody></table>
			</li>
			<?php } ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th valign="top" class="thtop">备注</th>
						<td><textarea name="remarks" class="pxtextarea" style="height: 99px;overflow-y: visible" id="remarks" placeholder="请输入备注信息"></textarea></td>
					</tr>
				</tbody></table>
			</li>
		</ul>
		<?php } ?>
		<div class="footReturn" <?php if ($has_record== 1){ ?>style="display: none;" <?php } ?>>
			<input type="button" id="showcard" class="submit" onclick="booking()" value="提交预约">
		</div>
		<!--显示已参加预订的用户信息  -->
		<?php if ($has_record == 1){ ?>
		<ul class="round">
			<li class="title mb"><span class="none">我的预订信息</span></li>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th>联系人           :</th>
						<td><?php echo $record->un; ?></td>
					</tr>
				</tbody></table>
			</li>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th>联系电话:</th>
						<td><?php echo $record->tel; ?></td>
					</tr>
				</tbody></table>
			</li>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th>预约日期:</th>
						<td><?php echo $record->ctime; ?>
						</td>
					</tr>
				</tbody></table>
			</li>
            <li class="nob">
			    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
				    <tbody>
                        <tr>
				            <th>预订人数:</th>
						    <td><?php echo $record->rs; ?></td>
						</tr>
					</tbody>
                </table>
			</li>
			<?php if ($record->type_name != ''){ ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
					    <th><?php echo $record->type_name; ?>:</th>
						<td><?php echo $record->type; ?>
                            
                        </td>
					</tr>
				</tbody></table>
			</li>
			<?php } ?>
			<?php if ($record->type1_name != ''){ ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
					    <th><?php echo $record->type1_name; ?>:</th>
						<td><?php echo $record->type1; ?>
                            
                        </td>
					</tr>
				</tbody></table>
			</li>
			<?php } ?>
		   <?php if ($record->type2_name != ''){ ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
					    <th><?php echo $record->type2_name; ?>:</th>
						<td><?php echo $record->type2; ?>
                            
                        </td>
					</tr>
				</tbody></table>
			</li>
			<?php } ?>
			<li class="nob">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
					<tbody><tr>
						<th valign="top" class="thtop">备注         :</th>
						<td><?php echo $record->remarks; ?></td>
					</tr>
				</tbody></table>
			</li>
		</ul>
		<?php } ?>
		
	</div>
 	<p class="page-url">
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
	</p>
</body>
<script type="text/javascript">
function booking(){
	var un    = $.trim($('#un').val());
	var tel   = $.trim($('#tel').val());
	var ctime = $.trim($('#online_booking_recordctime').val());
	var rs    = $.trim($('#rs').val());
	var name  = $("#type_name").text();
	var type  = $.trim($('#online_booking_recordtype').val());
	var name1  = $("#type1_name").text();
	var type1  = $.trim($('#online_booking_recordtype1').val());
	var name2  = $("#type2_name").text();
	var type2  = $.trim($('#online_booking_recordtype2').val());
	var remarks = $.trim($('#remarks').val());
	if(un=='' || tel==''|| rs=='' || type=='' ||ctime==''){
		tusi('请完善用户信息');
		return;
	}
	if(isNaN(rs)== true){
		tusi('预订人数需为数字。');
		return ;
	}
	ajax('onlineBookingOk-add.html',{ tel:tel,un:un,cid:'<?php echo $bid; ?>',ctime:ctime,rs:rs,type_name:name,type:type,type1_name:name1,type1:type1,type2_name:name2,type2:type2,remarks:remarks},function(m){
		if(m==1){
			location.href=location.href;
			tusi('预订成功');
		}
		if(m == 0){
			tusi('只能预订一次');
		}
		
	});	
}

</script>

</html>
