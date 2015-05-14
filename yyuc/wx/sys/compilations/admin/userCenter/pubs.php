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
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台!</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>" data-theme="theme-blue">
	    <div id="main">
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">

                    <div class="box">
                        <div class="box-title">
                            <div class="span6">
                                <h3><i class="icon-table"></i>管理微信公众帐号</h3>
                            </div>

                        </div>

                        <div class="box-content nozypadding">
                            <div class="row-fluid">
                                <div class="span8 control-group">
<?php if ($xe<=0){ ?>
<a class="btn" href="javascript:alert('配额不足，请升级！');"><i class="icon-plus"></i>添加公众帐号</a>
<?php }elseif ($u->isval && $xe>0){ ?>
<a class="btn" href="/admin/baseService/customPubImpower-newsub.html"><i class="icon-plus"></i>添加公众帐号</a>
<?php }else{ ?>
<a class="btn" href="/admin/baseService/customPubImpower-<?php echo $u->id; ?>.html"><i class="icon-plus"></i>添加公众帐号</a>
<?php } ?>
<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_SERVER['CHAT_JS']; ?>&site=qq&menu=yes" target="_blank" class="btn btn-warning" style="cursor:pointer">微助手</a> 
                                </div>


                            </div>

                            <div class="row-fluid dataTables_wrapper">
                             <div class="alert">
                                    <strong>温馨提示</strong>：您还有<?php echo $xe; ?>个微信公众号配额，请珍惜使用名额！ <span class="line"><?php if (!$_SERVER['IS_OEM']){ ?>聚微客交流QQ：86671718&nbsp;&nbsp;&nbsp;全国招商加盟火热进行中<?php } ?></span>
                               </div>
                                <form method="post" action="" id="listForm">
                                    <table id="listTable" class="table table-hover table-nomargin table-bordered usertable dataTable">
                                        <thead>
                                            <tr>

                                                <th width="290">公众号名称</th>
                                                <th width="150">升级级别</th>
                                                <th>创建时间/到期时间</th>
                                                <th>会员套餐</th>
                                                
                                                <th>已定义/上限</th>
                                                <th>请求数</th>
                                                <th>增值服务</th>                                                   
                                               	<th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if ($u->isval){ ?>
                                        <tr>
                                                <td style="text-align:center;">                                                   
                                                <img class="thumb_img" src="<?php echo $u->headpic; ?>" id="pic_apartpic" style="max-width:80px" /><br /> <?php echo $u->wun; ?>
                                                </td>
                                                 <td>
                                                  <?php if ($u->isdirect == 1 && $u->isfromnet == 1 && ($u->next_level_id == '' || $u->next_level_id == '1')){ ?>
                                                     	无&nbsp;&nbsp;<!-- <a href="/admin/cost/topay.html" style="color: red;">升级</a> -->
                                                  <?php }else{ ?>
                                                  <?php echo translate_level($u->next_level_id,true); ?>
                                                  <?php } ?>
                                                    
                                                </td>
                                                <td style="text-align:left;" width="160">                                                   
                                               		创建时间:<?php echo substr($u->rtime,0,10); ?><br/>
                                                   	到期时间:<?php echo substr($u->mendtime,0,10); ?>
                                                </td>
                                                <td align="center">
													<?php echo translate_level($u->level_id,true); ?>				
                                                </td>
                                                <td>
                                                   	文本：不限<br />
                                                   	图文：不限<br />
                                                   	语音：不限<br />
                                                   	LBS :  不限<br />
                                                </td>
                                               
                                                <td>
                                                    	不限
                                                </td>
                                                 <td>
                                                  	短信：0/条
                                                </td>
                                               
                                               <td>
                                                    <a href="/admin/baseService/customPubImpower-<?php echo $u->id; ?>.html" class="btn" rel="tooltip" title="编辑" style="display: block;width: 70px;"><i class="icon-edit"></i>编辑</a>
                                                    <a href="javascript:;" onclick="delchat(<?php echo $u->id; ?>,this);" class="btn" rel="tooltip" title="删除" style="display: block;margin-top: 10px;width: 70px;"><i class="icon-remove"></i>删除</a>
                                                    <a  href="javascript:;" onclick="parent.location.href='/admin/main-<?php echo $u->id; ?>.html'" class="btn" rel="tooltip" title="管理" style="display: block;margin-top: 10px;width: 70px;"><i class="icon-cog"></i>管理</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
										<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
										<tr>
                                                <td style="text-align:center;">                                                   
                                                  <img class="thumb_img" src="<?php echo $r->headpic; ?>" id="pic_apartpic" style="max-height:100px;" />  <?php echo $r->wun; ?>
                                                </td>
                                                <td style="text-align:center;">                                                   
                                                    <?php echo $r->rtime; ?>
                                                </td>
                                                <td align="center">
													<?php echo translate_level($r->level_id); ?>				
                                                </td>
                                                <td>
                                                    <?php echo $r->mendtime; ?>
                                                </td>
                                                <td>
                                                    <?php echo translate_level($r->next_level_id); ?>
                                                </td>
                                                <td>
                                                    <?php echo $r->next_mendtime; ?>
                                                </td>
                                            </tr>
										 <?php } ?>   
										 </tbody>

                                    </table>
									<div class="dataTables_paginate paging_full_numbers"><span>       </span></div>                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<script type="text/javascript">
function delchat(uid,o){
	if(confirm('您确定要删除此公众帐号吗?')){
		ajax('/admin/baseService/customPubImpower-'+uid+'-del.html',null,function(m){
			if(m=='ok'){
				tusi('公众号删除成功');
				setTimeout(function(){
					goto(location.href);
				},1500);
			}
		});
	}
}
</script>
<br/><br/><br/></body>