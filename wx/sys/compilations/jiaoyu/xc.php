<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <TITLE>相册</TITLE>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/reset.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/photo.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/back.css" media="all" />
		<script type="text/javascript" src="<?php echo $JS; ?>mwm/estate/share.js"></script>
		<script type="text/javascript" src="<?php echo $JS; ?>mwm/estate/common.js"></script>
		<script type="text/javascript" src="<?php echo $JS; ?>mwm/estate/picshow.js"></script>
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
  <style type="text/css">
	#popFail .bk{ background-color:rgba(194,194,194,0.5);}
	.pop_photo{ height:100%;}
	.pop_photo .photo li{ float:left;height:100%;}
	.photo_show img{ background:#202020 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAAAYCAMAAABnVuv4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NUJCMjQ0QzVEMEI3MTFFMjkzMTg5MzNDOTA1MTA5QjAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NUJCMjQ0QzZEMEI3MTFFMjkzMTg5MzNDOTA1MTA5QjAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1QkIyNDRDM0QwQjcxMUUyOTMxODkzM0M5MDUxMDlCMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1QkIyNDRDNEQwQjcxMUUyOTMxODkzM0M5MDUxMDlCMCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgGdvqYAAAAzUExURT8/PyYmJkFBQTAwMCMjI0NDQzc3NygoKDs7OzIyMjk5OS0tLSsrKz09PTQ0NEVFRSAgIP6uubIAAAERSURBVHja7JTbjoMwDERN7oTY4///2rXTitUWtUUVD/vQkYJMsA+T4EB6oegL+w+wWl+kVK66jHQaxvwiZWCo2LgM9omzpQHNlrxxBq82kVrObLBoCZFXyn2x2ZVArbyBpYDWkZMKiTA21QAWmstUG7kXdA9C6ZnfwCLW+8VdQnT1eOwwc9WDKujJzvyBCapDmqYeAIMVr/+FzRStKOdgvs1g5VzGMBhDj7AxrZ+ARa8tOt89ndUjzK1b4XMYDdcCisP3O4QxmsEieNvCA8z8stiX0Vv3ieWpL2OHYcqKTeYuZiD4c7GAHmFJQu70FLZrMXuzScb9gKXb/UEJ5ZqDHpvM5rsGZn0Ttu+f9hL9CDAAnbBqw3t+r9QAAAAASUVORK5CYII=) no-repeat center center;}
	.pop_photo .photo li{ background:url(data:image/gif;base64,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) no-repeat center center;}
	.pop_photo .photo li.noLoading{ opacity:0;*filter:alpha(opacity=0);}
	.pop_photo .photo li img{ border-radius:5px;}
</style>
</head>
<body onselectstart="return true;" ondragstart="return false;">
        

<div class="wrapper">
	<!-- start -->
		<div class="photo_area" id="scroller" style="opacity:0;"><!--  photo_wide -->
			<ul class="photo_show" id="scrollList" style="left:0;"></ul><!-- 由于每个li的宽度不固定，需要用js来获取ul的宽度 -->
			<ul class="nav_photo" id="scrollTips"></ul>
		</div>
		<div class="pop_photo" id="scroller1" style="display:none;">
			<ul class="photo"  id="scrollPic"></ul>
			<div class="info"  id="picName"></div>
			<a href="javascript:void(0);" id="photoClick" class="btn_show_close" style="z-index:9999;"><span>关闭</span></a>
		</div>
	<!-- end -->
</div>
<div id="popFail" style="">
	<div class="bk"></div>
	<div class="cont">
		<img src="data:image/gif;base64,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" alt="loading...">
		正在加载...
	</div>
</div>
<div class="pop_tips" id="popTips" style="display:none;">
	<div class="oval"></div>
	<div class="pop_show">
		<h4 id="tipsTitle">温馨提示</h4>
		<div class="pop_info" id="tipsMsg">
			<p></p>
		</div>
		<div class="pop_btns">
			<a href="javascript:void(0);" id="tipsOK">确定</a>
			<a href="javascript:void(0);" style="display:none;" id="tipsCancel">取消</a>
		</div>
	</div>
</div>
<div class="pop_mask" id="popMask" style="display:none;"></div>
<script type="text/template" id="template1"><!--缩略图-->
	<% for(var i=0,il=data.length;i < il;i++){ var idx = i%9 + 1;%>
		<li class="color_<%=idx%>" id="picshow<%=idx%>">
			<%
			for(var ps=1;ps<3;ps++){
				var psdata = data[i]['ps'+ps];
                %>
                <div class="ps_<%=ps%>">
					<% for(var j=0,jl=psdata.length;j<jl;j++){
						if(psdata[j].type == 'title'){
							%>
							<div class="ps_1_0" style="width:<%=psdata[j].width%>px;max-width:<%=psdata[j].width%>px;overflow:hidden;"><h3><%=psdata[j].title%></h3><p><%=psdata[j].subTitle%></p></div>
						<% }else if(psdata[j].type == 'img'){ %>
							<div style="max-width:<%=psdata[j].size[0]*(150/psdata[j].size[1])%>px;"><img id="thubImg<%=psdata[j].idx%>"
																										  onclick="PICSHOW.slidePics(this,<%=psdata[j].idx%>);"
																										  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
																										  osrc="<%=psdata[j].img%>" alt="<%=psdata[j].name%>"
																										  width="<%=psdata[j].size[0]*(150/psdata[j].size[1])%>" height="150"/></div>
						<% }else if(psdata[j].type == 'text'){ %>
							<div class="ps_2_0" style="width:<%=psdata[j].width%>px;max-width:<%=psdata[j].width%>px;"><!-- 根据文字的多少计算层的宽度 -->
								<p><%=psdata[j].content%></p>
							</div>
						<% } /*end of psdata[j].type*/
                    } /*end of psdata loop*/
                    %>
				</div>
                <%
                } /* end of ps for*/
                %>
		</li>
	<%  } /* end of data.leng */
        %>
</script>
<script type="text/tempalte" id="template2"><!-- 数据-->
	<% for(var i=0,il=data.length;i<il;i++){ var cidx = i+start, cls = (i == idx) ? ' class="current"':''; %>
            <li><a href="javascript:void(0);"<%=cls%> onclick="sTo(<%=cidx%>);return false;"><%=data[i]%></a></li>
        <% }%>
</script>
<script type="text/template" id="template3"><!--大图浏览-->
	<% for(var i=0,il=data.length;i<il;i++){ %><li style="width:<%=R.w%>px;" class="noLoading" id="bLi<%=data[i].idx%>">
		<img id="bImg<%=data[i].idx%>" load="false" width="<%=R.w%>" height="<%=R.h%>" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
		</li><% } %>
</script>


<a href="javascript:history.go(-1);" class="back360" style="">&nbsp;</a>        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
					</div>
	</body>
</html>