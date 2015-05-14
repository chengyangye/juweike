<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统首页</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/invalid.css" type="text/css" media="screen" />
<script type="text/javascript">
$(function(){
	var np = $.trim($('#fnopages').val());
	var nps = np.split(',');
	for(var i=0;i<nps.length;i++){
		$('input[name="'+nps[i]+'"]').prop('checked',false);
	}
	
	$('input[type="checkbox"]').click(function(){
		if($(this).prop('checked')){
			 remprop($(this).attr('name'));
		}else{
			addprop($(this).attr('name'));
		}
	});
	$('#Form1').submit(function(){
		var na = [];
		$('input[type="checkbox"]').each(function(){
			if(!$(this).prop('checked')){
				na[na.length] = $(this).attr('name');
			}			
		});
		$('#fnopages').val(na.join(','));
		return true;
	});
});
function remprop(name){
	var np = $.trim($('#fnopages').val());
	np = np.replace(name+',','').replace(','+name,'').replace(name,'');
	$('#fnopages').val(np);
}
function addprop(name){
	remprop(name);
	var np = $.trim($('#fnopages').val());
	if(np==''){
		np = name;
	}else{
		np = np+','+name;
	}
	$('#fnopages').val(np);
}
</script>	
</head>
<BODY>
<div class="content-box role">
	<div class="content-box-header">
		<h3>员工权限设置</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="default-tab" >
            
		<div class="searchgrid">
			<form method="post" action="" name="Form" id="Form1">
			<label>员工职务</label><?php echo $m->select($dl_arr,'typid','onchange="goto(\'yuangongquanxian-\'+$(this).val()+\'.html\')"'); ?>	
			<input type="submit" class="button" value="保存" />
			<?php echo $m->textarea('nopages',' style="display:none;"'); ?>
			</form>

		</div>
		<div class="tab-content default-tab" >
			<table>
			<?php $__i=0; foreach ((array)$pages as $k=>$m) { $__i++; ?>
			<tr><td align="left" style="text-align: left;padding-left: 20px;font-weight: bold;background-color:#164d85;color: white;">
			<?php echo $m['name']; ?>
			</td></tr>
			<tr><td align="left" style="text-align: left;padding-left: 20px;">
			<?php $__i=0; foreach ((array)$m['sub'] as $kk=>$mm) { $__i++; ?>
			<input type='checkbox' name='<?php echo $m['path']; ?>@<?php echo $mm['file']; ?>' value='1' checked="checked"/><?php echo $mm['name']; ?>;
			<?php } ?>			
			</td></tr>
			<?php } ?>
			
			
				<tfoot>
					<tr>
						<td colspan="13">
							<div class="pagination">
								
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
			
			
			</div>
		</div>
	</div>
</div>

</BODY>
</html>