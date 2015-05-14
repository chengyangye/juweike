<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<link rel="stylesheet" href="/res/payback.css">
<title>我的活动</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

</head>
<body>
<form action="" method="post" target="_blank" id="mqqform">
	<div class="main-title">
		<h3>会员在线支付</h3>
	</div>
	<div class="alert alert-info">
	  	<p><span class="bold">购买需知：</span></p>
	  	<p>
		 		1. 在付款前请仔细了解产品功能和资费套餐内容，一旦付款成功，不能以任何理由申请退款，敬请知悉！<br>
		 		2. 默认为非含税价格，如需开具发票(500元以上)，需要额外支付7%税费。<br>
		 		3. 使用优惠券时增值套餐不属于折扣优惠范围。<br>
		 		4. 升级或降级会员购买时，必须等到原会员类型到期才能升级或降级为新的会员类型，如需立即生效请联系客服！<br>
		 		5. 付款成功后重新登录即可升级会员成功。
	</p>
	</div>
	
	


<div class="pagination">
  
</div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width:30px;">选择</th>
					<th>会员类型</th>
					<th>购买月数</th>
					<th>包含赠送月数</th>
					<th>金额</th>
				</tr>
			</thead>
			<tbody>		
			<!-- 
			      <tr>
						<td>
						<input type="radio" name="tpapyradio" value="2" checked="checked">
						</td>
						<td>普通会员</td>
						<td>
						<select class="gmys" name="huiyuan2" style="width: 80px;">
						<?php for ($__i=1;$__i<=24;$__i++) { ?>
						<option value="<?php echo $__i; ?>"><?php echo $__i; ?></option>
						<?php } ?>
						</select>
						<span>
						限时优惠每购买6个月赠送一个月
						</span>
						</td>
						<td class="zsdys">
						0
						</td>
						<td class="hfdje" rel="2">
						<?php echo $jg_arr['2']; ?>
						</td>
				  </tr>
				   --> 
				  <tr>
						<td>
						<input type="radio" name="tpapyradio" value="3" checked="checked">
						</td>
						<td>标准会员</td>
						<td>
						<select class="gmys" name="huiyuan3" style="width: 80px;">
						<?php for ($__i=1;$__i<=24;$__i++) { ?>
						<option value="<?php echo $__i; ?>"><?php echo $__i; ?></option>
						<?php } ?>
						</select>
						<span>
						限时优惠每购买6个月赠送一个月
						</span>
						</td>
						<td class="zsdys">
						0
						</td>
						<td class="hfdje" rel="3">
						<?php echo $jg_arr['3']; ?>
						</td>
				  </tr>
				  <tr>
						<td>
						<input type="radio" name="tpapyradio" value="4">
						</td>
						<td>钻石会员</td>
						<td>
						<select class="gmys" name="huiyuan4" style="width: 80px;">
						<?php for ($__i=1;$__i<=24;$__i++) { ?>
						<option value="<?php echo $__i; ?>"><?php echo $__i; ?></option>
						<?php } ?>
						</select>
						<span>
						限时优惠每购买6个月赠送一个月
						</span>
						</td>
						<td class="zsdys">
						0
						</td>
						<td class="hfdje" rel="4">
						<?php echo $jg_arr['4']; ?>
						</td>
				  </tr>
			</tbody>
		</table>
	<div class="paytype-list">
	<h4>合计支付：￥<span style="color: red" id="hejidje"><?php echo $jg_arr['3']; ?></span></h4>
	<h4>平台支付：</h4>
		<ul class="bank-list bank-list--xpay">
                <li class="item left">
                    <input id="check-alipay" class="radio" type="radio" name="paytype" value="alipay" checked="checked">
                    <label for="check-alipay" class="bank bank--alipay"></label>
                </li>
        </ul>
	<h4>网银支付：</h4>
		<ul class="bank-list">
                    <li class="item">
                        <input type="radio" class="radio" value="ICBCB2C" id="bank-type-ICBCB2C" name="paytype">
                        <label title="中国工商银行" for="bank-type-ICBCB2C" class="bank bank--icbc"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="CMB" id="bank-type-CMB" name="paytype">
                        <label title="招商银行" for="bank-type-CMB" class="bank bank--cmb"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="CCB" id="bank-type-CCB" name="paytype">
                        <label title="中国建设银行" for="bank-type-CCB" class="bank bank--ccb"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="ABC" id="bank-type-ABC" name="paytype">
                        <label title="中国农业银行" for="bank-type-ABC" class="bank bank--abc"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="COMM" id="bank-type-COMM" name="paytype">
                        <label title="交通银行" for="bank-type-COMM" class="bank bank--boc"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="BOCB2C" id="bank-type-BOCB2C" name="paytype">
                        <label title="中国银行" for="bank-type-BOCB2C" class="bank bank--bofc"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="CIB" id="bank-type-CIB" name="paytype">
                        <label title="兴业银行" for="bank-type-CIB" class="bank bank--cib"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="CEBBANK" id="bank-type-CEBBANK" name="paytype">
                        <label title="光大银行" for="bank-type-CEBBANK" class="bank bank--cebb"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="SPDB" id="bank-type-SPDB" name="paytype">
                        <label title="上海浦东发展银行" for="bank-type-SPDB" class="bank bank--spdb"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="GDB" id="bank-type-GDB" name="paytype">
                        <label title="广东发展银行" for="bank-type-GDB" class="bank bank--gdb"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="CITIC" id="bank-type-CITIC" name="paytype">
                        <label title="中信银行" for="bank-type-CITIC" class="bank bank--zxyh"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="CMBC" id="bank-type-CMBC" name="paytype">
                        <label title="中国民生银行" for="bank-type-CMBC" class="bank bank--cmbc"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="SPABANK" id="bank-type-SPABANK" name="paytype">
                        <label title="平安银行" for="bank-type-SPABANK" class="bank bank--pingan"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="BJBANK" id="bank-type-BJBANK" name="paytype">
                        <label title="北京银行" for="bank-type-BJBANK" class="bank bank--bob"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="BJRCB" id="bank-type-BJRCB" name="paytype">
                        <label title="北京农商银行" for="bank-type-BJRCB" class="bank bank--bjrcb"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="PSBC-DEBIT" id="bank-type-PSBC-DEBIT" name="paytype">
                        <label title="中国邮政储蓄银行" for="bank-type-PSBC-DEBIT" class="bank bank--pspc"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="SHRCB" id="bank-type-SHRCB" name="paytype">
                        <label title="上海农商银行" for="bank-type-SHRCB" class="bank bank--shrcb"></label>
                    </li>
                    <li class="item">
                        <input type="radio" class="radio" value="HZCBB2C" id="bank-type-HZCBB2C" name="paytype">
                        <label title="杭州银行" for="bank-type-HZCBB2C" class="bank bank--hzcb"></label>
                    </li>
                </ul>
		<center>
		<button class="btn btn-small btn-primary" style="font-size: 26px;height: 40px;padding:10px 10px 16px 10px;" type="submit">确认支付</button>
		</center>
		
	</div>
	
</form>
<br/><br/><br/><br/>
<script type="text/javascript">
$(function(){
	window.jgjs = {};
	$('.hfdje').each(function(){
		$(this).data('jg',$.trim($(this).text()));
	});
	$('.gmys').change(function(){
		var zstd = $(this).parent().next();
		var jgtd = $(this).parent().next().next();
		var zsyf = parseInt(parseInt($(this).val())/6);
		zstd.html(!zsyf?'0':zsyf);
		jgtd.html((parseInt($(this).val())-zsyf)*parseFloat(jgtd.data('jg')));
		sethjdee();
	});
	
	$('input').click(sethjdee);
	
	$('#mqqform').submit(function(){
		$('.bank-list').hide();
		$('body').mask('充值成功后，请重新登录查看结果');
	});
});

function sethjdee(){
	var dqjg = $('input[name="tpapyradio"]:checked').parent().parent().find('.hfdje').text();
	$('#hejidje').text(dqjg);
}
</script>
<br/><br/><br/></body></html>