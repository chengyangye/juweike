<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>代理充值</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">

</head>
<body style=" text-algin:center">
<h3>为代理充值</h3>
  <form id="pay" action="" method="post">
  代理用户 ：<?php echo $u->un; ?><br/>
 
 <!-- 当前级别 ：  <?php echo translate_level($level_id); ?>   <br /><br />
  购买级别：<?php echo $admin_pay->select($level,'level_id'); ?><br /><br />
  购买月数：<?php echo $admin_pay->text('buy_months'); ?><br/>  -->
  
 充值金额：<?php echo $admin_pay->text('money'); ?> <br/>
 
 
   <button type="submit" class="btn btn-primary" id="submitbtn">保存</button>
   <button type="button" class="btn"  onclick="javascript:history.go(-1)">返回</button>
  </form>
</body>
</html>