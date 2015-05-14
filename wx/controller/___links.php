<?php
switch ($_GET['tt'])
{
case 1:
$url = 'http://resource.duopao.com/duopao/games/small_games/weixingame/sameclick/sameclick.htm';
break;
case 2:
$url = 'http://resource.duopao.com/duopao/games/small_games/weixingame/unitem/Unitem.htm';
break;
case 3:
$url = 'http://resource.duopao.com/duopao/games/small_games/weixingame/DreamFarmLink/DreamFarmLink.htm';
break;
case 4:
$url = 'http://resource.duopao.com/duopao/games/small_games/weixingame/bouffecookie/bouffecookie.htm';
break;
case 5:
$url = 'http://infoapp.3g.qq.com/g/s?g_f=22207&aid=astro#home';
break;
case 6:
$url = 'http://mobile.weather.com.cn/';
break;
case 7:
$url = 'http://m.xiachufang.com/';
break;
case 8:
$url = 'http://m.haodf.com/touch';
break;
case 9:
$url = 'http://m.elong.com/hotel/';
break;
case 10:
$url = 'http://loto.sina.cn/i/open.do?label=1&sid=fc055b3a-d72c-41bf-96bc-b8e436ea79ea&agentId=233258&vt=3';
break;
case 11:
$url = 'http://m.kuaidi100.com/#input';
break;
case 12:
$url = 'http://dp.sina.cn/dpool/tools/flight/index.php?vt=4';
break;
case 13:
$url = 'http://wap.tieyou.com/sina/index_yupiao.html?pos=63&vt=4';
break;
case 14:
$url = 'http://m.soufun.com/zf/linyi/?sf_source=ucbrowser04';
break;
case 15:
$url = 'http://dp.sina.cn/dpool/astro/starent/xingyun.php?pos=19&vt=4';
break;
case 16:
$url = 'http://www.aqioo.cn/free';
break;
case 17:
$url = 'http://www.aqioo.cn/dream';
break;
case 18:
$url = 'http://house.sina.cn/touch/tools/house_loan.html';
break;
case 19:
$url = 'http://finance.sina.cn/?sa=t60d13v512&pos=63&vt=4';
break;
case 20:
$url = 'http://dp.sina.cn/dpool/tools/money/single.php?city_id=1&flag=per_tax&pos=63&vt=4';
break;
case 21:
$url = 'http://dp.sina.cn/dpool/tools/money/single.php?flag=health_per&pos=63&vt=4';
break;
case 22:
$url = 'http://dp.sina.cn/dpool/tools/money/single.php?flag=old_per&pos=63&vt=4';
break;
case 23:
$url = 'http://dp.sina.cn/dpool/tools/money/single.php?flag=house_per&pos=63&vt=4';
break;
case 24:
$url = 'http://m.46644.com/tool/tel/';
break;
case 25:
$url = 'http://ast.sina.cn/?sa=t282d771v166&pos=19&vt=4';
break;
default:	
break;
}
Redirect::to($url);

?>