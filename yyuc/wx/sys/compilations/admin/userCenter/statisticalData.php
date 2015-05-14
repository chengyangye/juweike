<!DOCTYPE html>
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
<script type="text/javascript" src="/res/FusionCharts.js"></script>
<title>欢迎</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<body>		
    <div id="main">
        <div class="row-fluid">
            <div class="span12">
                <div class="box ">
                    <div class="box-title">
                        <div class="span8">
                            <h3><i class="icon-bar-chart"></i>运营图表</h3>
                        </div>
                        <div class="span4">
                            按月份查看
                            <select class="input-small" name="periody" id="periody">
                                <option value="2013" <?php if ($nf=='2013'){ ?>selected="selected"<?php } ?> >2013年</option>
                                <option value="2014" <?php if ($nf=='2014'){ ?>selected="selected"<?php } ?>>2014年</option>
                            </select>
                            <select class="input-small" name="period" id="period">
                                <option value="01" <?php if ($yf=='01'){ ?>selected="selected"<?php } ?>>1月</option>
                                <option value="02" <?php if ($yf=='02'){ ?>selected="selected"<?php } ?>>2月</option>
                                <option value="03" <?php if ($yf=='03'){ ?>selected="selected"<?php } ?>>3月</option>
                                <option value="04" <?php if ($yf=='04'){ ?>selected="selected"<?php } ?>>4月</option>
                                <option value="05" <?php if ($yf=='05'){ ?>selected="selected"<?php } ?>>5月</option>
                                <option value="06" <?php if ($yf=='06'){ ?>selected="selected"<?php } ?>>6月</option>
                                <option value="07" <?php if ($yf=='07'){ ?>selected="selected"<?php } ?>>7月</option>
                                <option value="08" <?php if ($yf=='08'){ ?>selected="selected"<?php } ?>>8月</option>
                                <option value="09" <?php if ($yf=='09'){ ?>selected="selected"<?php } ?>>9月</option>
                                <option value="10" <?php if ($yf=='10'){ ?>selected="selected"<?php } ?>>10月</option>
                                <option value="11" <?php if ($yf=='11'){ ?>selected="selected"<?php } ?>>11月</option>
                                <option value="12" <?php if ($yf=='12'){ ?>selected="selected"<?php } ?>>12月</option>
                            </select>
                        </div>

                    </div>
                    <div id="chartdiv" class="box-content">
                    </div>

                    <div id="chartdiv2" class="box-content">
                    </div>



					<script type="text/javascript">
                        var chart = new FusionCharts("/res/MSLine1.swf", "ChartId", "100%", "400", "0", "0");
                        chart.setXMLUrl('statisticalDatares-<?php echo $nf; ?>-<?php echo $yf; ?>.html?chart=1');
                        chart.render("chartdiv");
                        var chart1 = new FusionCharts("/res/MSLine1.swf", "ChartId", "100%", "400", "0", "0");
                        chart1.setXMLUrl('statisticalDatares-<?php echo $nf; ?>-<?php echo $yf; ?>.html?chart=2');
                        chart1.render("chartdiv2");
                    </script>



                    
                </div>
            </div>
        </div>

    </div>
    <script type="text/ecmascript">
        $(function () {
            $(".input-small").change(function () {
                window.location = '/admin/userCenter/statisticalData-'+$('#periody').val()+'-'+$('#period').val()+'.html';
            })

        })
    </script>
</body>
</html>