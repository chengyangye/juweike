<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <TITLE>政务全景</TITLE>
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/3dview.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/back.css" media="all" />
		<script type="text/javascript" src="<?php echo $JS; ?>mwm/estate/3dskin.js"></script>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <script type="text/javascript">
        $(function(){
        	
        });
        </script>
    </head>
<body onselectstart="return true;" ondragstart="return false;">
<div id="container" style="width:100%;height:100%;">
	系统版本过低，请升级。
</div>
<script type="text/javascript">
	if (ggHasHtml5Css3D() || ggHasWebGL()) {
		pano=new pano2vrPlayer("container");
		skin=new pano2vrSkin(pano);
		pano.readConfigUrl('3Dview-<?php echo $qid; ?>.html');
	} else{
		alert("不支持360度全景");
	}
</script>
<div class='view_change'><a href='javascript:history.go(-1);'>全景切换</a></div>

<a href="javascript:history.go(-1);" class="back360" style="">&nbsp;</a>        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
					</div>
	</body>
</html>
</html>