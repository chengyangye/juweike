<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK rel=stylesheet type=text/css href="<?php echo $CSS; ?>ht/member.css"/>
<title></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<style type="text/css">
BODY 
{
    background:none;
    overflow: hidden;
}
</style>
<body style="margin:20px;padding:0px;">
<form name="clientForm" method="post" action="recharge.aspx" id="clientForm">
<div>
</div>
<table cellSpacing="0" cellPadding="0" width="100%" border="0">
   <tr>
        <td colspan="2" align="right" height="15">账面余额：</td>
        <td colspan="2" align="left" height="15">￥<span id="wdyespan" style="color: red;"><?php echo $ma->yue; ?></span>
        <?php if (!$mu->isyg && $mu->isdirect){ ?>
		&nbsp;&nbsp;折合：￥<span style="color: red;"><?php echo $zsjiagebiao; ?></span>
		<?php } ?>
        </td>
    </tr>
    <tr>
		<td height="35" width="68" align="right">续费类型：</td>
        <td valign="middle">
        <?php echo $m->select($yhlx_arr,'lx'); ?>
        </td>
       	<td height="35" width="68" align="right">月费用：</td>
        <td valign="middle">
        <span id="dlzkspan" style="color:red;"><?php echo $m->select($prc_arr,'fy'); ?></span>元
        </td>
    </tr>
    <tr>
		<td height="35" width="68" align="right">续费月数：</td>
        <td valign="middle"><?php echo $m->select($ys,'buy_months'); ?>月</td>
       	<td height="35" width="68" align="right">实际花费：</td>
        <td valign="middle"><input type="text" id="sjhfje" style="width:60px" readonly="readonly"/>元</td>
    </tr>
	<tr>
        <td height="35" width="68" align="right">
            备注：        </td>
        <td colspan="3" valign="middle">
            <input id="bz" style="width:220px" maxlength="200" type="text"/>
        </td>
    </tr>
</table>
<div id="jd_dialog_m_t"><span>
<input id="jd_submit" class="button" value="&nbsp;提 交 &nbsp;" type="button" onclick="tocz();"/>
说明：每续费六个月赠送一个月 
</span>
</div>
</form>
<script language="javascript" type="text/javascript">
$(function(){
	fyjs();
	$('#flx').on('change',function(){
		$('#ffy').val($(this).val());
		fyjs();
	});
	$('#ffy').on('change',function(){
		$('#flx').val($(this).val());
		fyjs();
	});
	$('#fbuy_months').on('change',function(){
		fyjs();
	});
});
function fyjs(){
	var myfy = parseInt($('#ffy').find('option:selected').text());
	var ys = parseInt($('#fbuy_months').val());
	var zsys = parseInt(ys/6);
	var zfy = myfy*(ys-zsys);
	$('#sjhfje').val(zfy);
}

function tocz(){
	var czje = parseInt($('#sjhfje').val());
	var syje = parseInt($('#wdyespan').text());
	if(czje>syje){
		alert('你的账户余额不足，请填写少于此数值的金额或者联系充值');
		return;
	}
	ajax(location.href,{ ys:$('#fbuy_months').val(),lx:$('#flx').val(),bz:$('#bz').val()},function(m){
		if(m=='no'){
			alert('该用户已经续费成功，无法再次续费');
		}
		if(m=='ok'){
			tusi('充值成功');
		}
		setTimeout(function(){
			parent.location.href = parent.location.href;
		},1500);
	});
}
</script>
</body>
</html>