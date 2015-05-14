<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/card/card.css" media="all" />
<title>适用门店</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="format-detection" content="telephone=no">
</head>

<body id="cardaddr" ondragstart="return false;" onselectstart="return false;">
<section class="body">
<div class="qiandaobanner">
    <img src="/res/symd.jpg">
</div>
<div class="cardexplain">
<?php $__i=0; foreach ((array)$mdres as $r) { $__i++; ?>
<h2><?php echo $r->name; ?></h2>
        <ul class="round">
            <li class="addr"><a href="http://api.map.baidu.com/marker?location=<?php echo $r->wd; ?>,<?php echo $r->jd; ?>&title=<?php echo $r->name; ?>&name=<?php echo $r->address; ?>&content=<?php echo $r->address; ?>&output=html&src=weiba|weiweb" /><span><?php echo $r->address; ?></span></a></li>
            <li class="tel"><a href="tel:<?php echo $r->tel; ?>"><span><?php echo $r->tel; ?></span></a></li>
        </ul>
<?php } ?>
</div>
</section>
</body>
</html>