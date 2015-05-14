<?php
$qjid = Request::get(1);
$qj = new Model('micro_car_chexing_full_view');
$qj->find($qjid);
$xml = ('<krpano version="1.16" title="微想漫游" onstart="startup();">

	<include url="skin/skin-'.$qjid.'.html" />

	<!-- set skin settings: bingmaps? gyro? thumbnail controlling? tooltips? -->
	<skin_settings bingmaps="false"
	               bingmaps_key=""
	               bingmaps_zoombuttons="false"
	               gyro="true"
	               thumbs_width="120" thumbs_height="80" thumbs_padding="10" thumbs_crop="0|40|240|160"
	               thumbs_opened="false"
	               thumbs_text="false"
	               thumbs_dragging="true"
	               thumbs_onhoverscrolling="false"
	               thumbs_scrollbuttons="false"
	               thumbs_scrollindicator="false"
	               tooltips_thumbs="false"
	               tooltips_hotspots="false"
	               tooltips_mapspots="false"
	               controlbar_offset="20"
	               />

	<!-- set optional skin logo url -->
	<layer name="skin_logo" url="" scale="0.25" opened_onclick="openurl(\'...\',_blank);" />


	<action name="startup">
		if(startscene === null, copy(startscene,scene[0].name));
		loadscene(get(startscene), null, MERGE);
		if(device.windows,delayedcall(introimage, 8.0, if(layer[introimage], hideintroimage() ); );set(layer[introimage].visible,true););
	</action>
	
	<layer name="introimage"
	   url="skin/introimage.png"
	   align="center"
	   onclick="hideintroimage();"
	   keep="true"
	   visible="false"
	   />
	
	<action name="hideintroimage">
		if(layer[introimage].enabled,
			set(layer[introimage].enabled,false);
			tween(layer[introimage].alpha, 0.0, 0.5, default, removelayer(introimage));
		  );
	</action>	
	
	<scene name="scene_20070701car2-xgll6" title="'.$qj->name.'" onstart="" thumburl="example/thumb.jpg" lat="" lng="" heading="">

		<view hlookat="0" vlookat="0" fovtype="MFOV" fov="120" maxpixelzoom="2.0" fovmin="70" fovmax="140" limitview="auto" />

		<preview url="example/preview.jpg" />

		<image>
			<cube url="fullview/'.$qjid.'/pano_%s.jpg" />
			<mobile>
				<cube url="fullview/'.$qjid.'/pano_%s.jpg" />
			</mobile>
		</image>

		<!-- place your scene hotspots here -->

	</scene>


</krpano>');
Response::write($xml,Mime::$xml);