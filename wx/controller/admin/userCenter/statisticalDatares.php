<?php

$nf = Request::get(1);
$yf = Request::get(2);
if(trim($nf)==''){
	$nf = date('Y');
}

if(trim($yf)==''){
	$yf = date('m');
}

$dates = new Model(data_statistics);
$dds = $dates->where(array('wid'=>Session::get('wid'),'ctime@>='=>($nf.'-'.$yf.'-01'),'ctime@<='=>($nf.'-'.$yf.'-31')))->list_all();
$ts = 30;
switch ($yf){
	case '01':
	case '03':
	case '05':
	case '07':
	case '08':
	case '10':
	case '12':
		$ts = 31;
		break;
	default:
		$ts = 30;
		break;		
}
$hxzb = '';
$arrs = array();
$arrs[1]= array();//关注
$arrs[2]= array();//文字
$arrs[3]= array();//菜单
$arrs[4]= array();//位置
$arrs[5]= array();//取消
for($i=1;$i<=$ts;$i++){
	$hxzb = $hxzb."<category label='{$i}日'/>";
	foreach ($dds as $d){
		if(date('Y-m-j',strtotime($d->ctime))== ($nf.'-'.$yf.'-'.$i)){
			$arrs[$d->type][$i] = intval($arrs[$d->type][$i])+1;
		}
	}
}

$zs_str = $kw_str = $zz_str = $qx_str = $cl_str = $lc_str = $gz_str = '';

for($i=1;$i<=$ts;$i++){
	$gz_str = $gz_str."<set value='".intval($arrs[1][$i])."' />";
	$qx_str = $qx_str."<set value='".intval($arrs[5][$i])."' />";
	$zz_str = $zz_str."<set value='".(intval($arrs[1][$i])-intval($arrs[5][$i]))."' />";
	$kw_str = $kw_str."<set value='".intval($arrs[2][$i])."' />";
	$lc_str = $lc_str."<set value='".intval($arrs[4][$i])."' />";
	$cl_str = $cl_str."<set value='".intval($arrs[3][$i])."' />";
	$zs_str = $zs_str."<set value='".(intval($arrs[2][$i])+intval($arrs[3][$i])+intval($arrs[4][$i]))."' />";
}

$c1 = "<?xml version='1.0' encoding='utf-8' ?>
<chart caption='{$nf}-{$yf}月用户曲线' subcaption=' ' lineThickness='4' showValues='0'
formatNumberScale='0' anchorRadius='4' divLineAlpha='15' divLineColor='666666'
divLineIsDashed='1' showAlternateHGridColor='1' alternateHGridColor='666666'
shadowAlpha='40' labelStep='2' numvdivlines='5' chartRightMargin='35' bgColor='FFFFFF,FFFFFF'
bgAngle='270' bgAlpha='10,10' alternateHGridAlpha='5' legendPosition='RIGHT '
baseFontSize='12' baseFont='Microsoft YaHei,Helvitica,Verdana,Arial,san-serif'
canvasBorderThickness='1' canvasBorderColor='888888' showShadow='1' animation='1'
showBorder='0' showToolTip='1' adjustDiv='1' setAdaptiveYMin='1' defaultAnimation='1'>
    <categories>{$hxzb}</categories>
    <dataset seriesName='关注数' color='99ccff' anchorBorderColor='99ccff' anchorBgColor='ffffff'>{$gz_str}</dataset>
    <dataset seriesName='取消关注数' color='d3d3d3' anchorBorderColor='d3d3d3'anchorBgColor='ffffff'>{$qx_str}</dataset>
    <dataset seriesName='净增长数' color='cc0000' anchorBorderColor='cc0000' anchorBgColor='ffffff'>{$zz_str}</dataset>
    <styles>
        <definition>
            <style name='CaptionFont' type='font' size='12' />
        </definition>
        <application>
            <apply toObject='CAPTION' styles='CaptionFont' />
            <apply toObject='SUBCAPTION' styles='CaptionFont' />
        </application>
    </styles>
</chart>";


$c2 = "<?xml version='1.0' encoding='utf-8' ?>
<chart caption='{$nf}-{$yf}月请求曲线' subcaption=' ' lineThickness='4' showValues='0'
formatNumberScale='0' anchorRadius='4' divLineAlpha='15' divLineColor='666666'
divLineIsDashed='1' showAlternateHGridColor='1' alternateHGridColor='666666'
shadowAlpha='40' labelStep='2' numvdivlines='5' chartRightMargin='35' bgColor='FFFFFF,FFFFFF'
bgAngle='270' bgAlpha='10,10' alternateHGridAlpha='5' legendPosition='RIGHT '
baseFontSize='12' baseFont='Microsoft YaHei,Helvitica,Verdana,Arial,san-serif'
canvasBorderThickness='1' canvasBorderColor='888888' showShadow='1' animation='1'
showBorder='0' showToolTip='1' adjustDiv='1' setAdaptiveYMin='1' defaultAnimation='1'>
    <categories>{$hxzb}</categories>
    <dataset seriesName='文本回复' color='3d87c9' anchorBorderColor='3d87c9' anchorBgColor='ffffff'>{$kw_str}</dataset>
    <dataset seriesName='菜单点击' color='66cc00' anchorBorderColor='66cc00' anchorBgColor='ffffff'>{$cl_str}</dataset>
    <dataset seriesName='位置请求' color='ffcc00' anchorBorderColor='ffcc00'anchorBgColor='ffffff'>{$lc_str}</dataset>
    <dataset seriesName='总请求数' color='cc66ff' anchorBorderColor='cc66ff' anchorBgColor='ffffff'>{$zs_str}</dataset>
    <styles>
        <definition>
            <style name='CaptionFont' type='font' size='12' />
        </definition>
        <application>
            <apply toObject='CAPTION' styles='CaptionFont' />
            <apply toObject='SUBCAPTION' styles='CaptionFont' />
        </application>
    </styles>
</chart>";

if(Request::get('chart')=='1'){
	Response::write($c1,Mime::$xml);
}else if(Request::get('chart')=='2'){
	Response::write($c2,Mime::$xml);
}
