<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- myslim si, ze browser je mozilla --><head><meta name="verify-v1" content="ZNxDOfKvWX4aVo87gsPqjshGuba68EH0Exh6Y/Fi38o=">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta charset="UTF-8"><link rel="openid.server" href="http://server.myid.net/server">
<link rel="openid.delegate" href="http://jimmac.myid.net/">
<meta http-equiv="X-XRDS-Location" content="http://jimmac.myid.net/xrds">
<link rel="stylesheet" type="text/css" href="1_files/global.css" title="Default"><link rel="prefetch alternate stylesheet" type="text/css" href="1_files/darkness.css" title="Darkness" media="screen"><link rel="icon" type="image/png" href="http://jimmac.musichall.cz/images/icons/clapboard.png"><link rel="icon" type="image/png" href="http://jimmac.musichall.cz/images/icons/clapboard.png"><link rel="shortcut icon" type="image/x-icon" href="http://jimmac.musichall.cz/favicon.ico"><link rel="stylesheet" href="1_files/jquery.css" type="text/css" media="screen"><title>Icons: Work in Progress</title>
<link rel="stylesheet" type="text/css" href="1_files/mozilla.css">
<script type="text/javascript" src="1_files/jquery_002.js"></script>
<script type="text/javascript" src="1_files/jquery_007.js"></script>
<script type="text/javascript" src="1_files/jquery.js"></script>
<script type="text/javascript" src="1_files/iutil.js"></script>
<script type="text/javascript" src="1_files/jquery_004.js"></script>
<script type="text/javascript" src="1_files/jquery_006.js"></script>
<script type="text/javascript" src="1_files/jquery_008.js"></script>
<script type="text/javascript" src="1_files/jquery_003.js"></script>
<script type="text/javascript" src="1_files/jquery_005.js"></script>
<script type="text/javascript" src="1_files/hideouteffects.js"></script>
</head>
<body>
<div id="topstripe"><div id="rollupmenu"><ul class="pulldownmenu">
<li><a>music</a>
<div class="submenu">
<ul class="forie-pulldownmenu"><li><a href="http://jimmac.musichall.cz/organic.php">Organic</a></li>
<li><a href="http://jimmac.musichall.cz/sonic.php">Sonic pain</a></li>
<li><a href="http://jimmac.musichall.cz/trackertunes.php">Ancient Pieces</a></li>
</ul>
</div>
</li>
<li><a>photo</a>
<div class="submenu">
<ul class="forie-pulldownmenu"><li><a href="http://jimmac.musichall.cz/photos.php">Picks</a></li>
<li><a href="http://www.flickr.com/photos/jakubsteiner/">flickr</a></li>
<li><a href="http://jimmac.musichall.cz/original.php">O.R.I.G.I.N.A.L.</a></li>
</ul>
</div>
</li>
<li><a>portfolio</a>
<div class="submenu">
<ul class="forie-pulldownmenu"><li><a href="http://jimmac.musichall.cz/blender.php">3D</a></li>
<li><a href="http://jimmac.musichall.cz/guimockups.php">UI Design</a></li>
<li><a href="http://jimmac.musichall.cz/icons.php">Icon</a></li>
<li><a href="http://jimmac.musichall.cz/logos.php">Logo</a></li>
<li><a href="http://jimmac.musichall.cz/themesets.php">Skin</a></li>
<li><a href="http://jimmac.musichall.cz/splash.php">Splash</a></li>
</ul>
</div>
</li>
<li><a>JakubSteiner</a>
<div class="submenu">
<ul class="forie-pulldownmenu"><li><a href="http://jimmac.musichall.cz/">Home</a></li>
<li><a href="http://jimmac.musichall.cz/about.php">About</a></li>
<li><a href="http://jimmac.musichall.cz/log/">Journal</a></li>
<li><a href="http://jimmac.musichall.cz/contact.php">Contact</a></li>
</ul>
</div>
</li>
</ul>
</div></div>
<div id="maincontainer">
<div id="splash" style="background: transparent url('images/artsplash.jpg') top left no-repeat;">
<a style="display: block; width: 98%; height: 90%;" href="http://jimmac.musichall.cz/"></a></div>
<script type="text/javascript">
/* <![CDATA[ */
(function($){var menu,shadow,trigger,content,hash,currentTarget;var defaults={menuStyle:{listStyle:'none',padding:'1px',margin:'0px',backgroundColor:'#fff',border:'1px solid #999',width:'100px'},itemStyle:{margin:'0px',color:'#000',display:'block',cursor:'default',padding:'3px',border:'1px solid #fff',backgroundColor:'transparent'},itemHoverStyle:{border:'1px solid #0a246a',backgroundColor:'#b6bdd2'},eventPosX:'pageX',eventPosY:'pageY',shadow:true,onContextMenu:null,onShowMenu:null};$.fn.contextMenu=function(id,options){if(!menu){menu=$('<div id="jqContextMenu"></div>').hide().css({position:'absolute',zIndex:'500'}).appendTo('body').bind('click',function(e){e.stopPropagation()})}if(!shadow){shadow=$('<div></div>').css({backgroundColor:'#000',position:'absolute',opacity:0.2,zIndex:499}).appendTo('body').hide()}hash=hash||[];hash.push({id:id,menuStyle:$.extend({},defaults.menuStyle,options.menuStyle||{}),itemStyle:$.extend({},defaults.itemStyle,options.itemStyle||{}),itemHoverStyle:$.extend({},defaults.itemHoverStyle,options.itemHoverStyle||{}),bindings:options.bindings||{},shadow:options.shadow||options.shadow===false?options.shadow:defaults.shadow,onContextMenu:options.onContextMenu||defaults.onContextMenu,onShowMenu:options.onShowMenu||defaults.onShowMenu,eventPosX:options.eventPosX||defaults.eventPosX,eventPosY:options.eventPosY||defaults.eventPosY});var index=hash.length-1;$(this).bind('contextmenu',function(e){var bShowContext=(!!hash[index].onContextMenu)?hash[index].onContextMenu(e):true;if(bShowContext)display(index,this,e,options);return false});return this};function display(index,trigger,e,options){var cur=hash[index];content=$('#'+cur.id).find('ul:first').clone(true);content.css(cur.menuStyle).find('li').css(cur.itemStyle).hover(function(){$(this).css(cur.itemHoverStyle)},function(){$(this).css(cur.itemStyle)}).find('img').css({verticalAlign:'middle',paddingRight:'2px'});menu.html(content);if(!!cur.onShowMenu)menu=cur.onShowMenu(e,menu);$.each(cur.bindings,function(id,func){$('#'+id,menu).bind('click',function(e){hide();func(trigger,currentTarget)})});menu.css({'left':e[cur.eventPosX],'top':e[cur.eventPosY]}).show();if(cur.shadow)shadow.css({width:menu.width(),height:menu.height(),left:e.pageX+2,top:e.pageY+2}).show();$(document).one('click',hide)}function hide(){menu.hide();shadow.hide()}$.contextMenu={defaults:function(userDefaults){$.each(userDefaults,function(i,val){if(typeof val=='object'&&defaults[i]){$.extend(defaults[i],val)}else defaults[i]=val})}}})(jQuery);$(function(){$('div.contextMenu').hide()});
	$(document).ready(function () {
		$(".icongallery img").contextMenu("nocopy", {
				bindings: {
          'license': function(t) {
            alert('The images displayed here are not public domain. Most probably they are available under the terms of the GNU GPL, some are Creative Commons Attribution Share Alike.\n\n Make sure you identify particular project license and understand and comply with the terms of the license.');
          }
				}
			});
	});

	/* ]]> */
</script>
	<div id="nocopy" style="background-color: #666; color: white;display: none">
	<ul>
		<li id="license">Licensing Information</li>
		</ul>
	</div>
	<div id="sidebar">
<div class="smallbuttons">
<a id="GIMP" href="http://www.gimp.org/">&nbsp;</a><a id="Blender" href="http://www.blender3d.com/">&nbsp;</a><a id="Inkscape" href="http://www.inkscape.org/">&nbsp;</a><a id="Fedora" href="http://www.fedoraproject.org/">&nbsp;</a><a id="GNOME" href="http://www.gnome.org/">&nbsp;</a><a id="Firefox" href="http://www.getfirefox.com/">&nbsp;</a></div>
			<!-- Start of Flickr Badge -->
<p id="jimmrhead"><img alt="jimmr" src="1_files/jimmr.png" height="32" width="83"></p>

			<p class="jimmr">
			</p>
			<!-- End of Flickr Badge -->
			
			<!-- BC2 -->
			<div id="bc2"></div>
			
			<!-- BF3 -->
			<div id="bf3"></div>
						
      <!-- Twitter box -->
      <div id="tweet"></div>
</div>
<div id="body">
<h1>Tango Applications
</h1>
<div>
<p>Following the <a href="http://tango.freedesktop.org/Tango_Icon_Theme_Guidelines">Tango Icon Style

Guidelines</a>, here's a list of random application icons.</p>

</div>
<p>Note this artwork is <em>not</em> public domain.</p><div class="icongallery">
<img src="1_files/file-roller2.png" alt="#" height="16" width="16">
<img src="1_files/file-roller_003.png" alt="#" height="16" width="16">
<img src="1_files/gimp-app-16.png" alt="#" height="16" width="16">
<img src="1_files/gnome.png" alt="#" height="16" width="16">
<img src="1_files/ooo-impress_004.png" alt="#" height="16" width="16">
<img src="1_files/icemon_003.png" alt="#" height="16" width="16">
<img src="1_files/f-spot_003.png" alt="#" height="16" width="16">
<img src="1_files/evince-16.png" alt="#" height="16" width="16">
<img src="1_files/blender.png" alt="#" height="16" width="16">
<img src="1_files/banshee.png" alt="#" height="16" width="16">
<img src="1_files/blender2.png" alt="#" height="16" width="16">
<img src="1_files/compiz.png" alt="#" height="16" width="16">
<img src="1_files/mouse-tracker.png" alt="#" height="16" width="16">
<img src="1_files/ooo-base_003.png" alt="#" height="16" width="16">
<img src="1_files/ooo-calc.png" alt="#" height="16" width="16">
<img src="1_files/tomboy_004.png" alt="#" height="16" width="16">
<img src="1_files/tomboy-old_003.png" alt="#" height="16" width="16">
<img src="1_files/totem_004.png" alt="#" height="16" width="16">
<img src="1_files/xgl-icon-16.png" alt="#" height="16" width="16">
<img src="1_files/yast-shell_002.png" alt="#" height="16" width="16">
<img src="1_files/xgl.png" alt="#" height="16" width="16">
<img src="1_files/tasks.png" alt="#" height="16" width="16">
<img src="1_files/tangerine.png" alt="#" height="16" width="16">
<img src="1_files/ooo-writer_003.png" alt="#" height="16" width="16">
<img src="1_files/ooo-draw.png" alt="#" height="16" width="16">
<img src="1_files/ooo-math.png" alt="#" height="16" width="16">
<img src="1_files/ooo-web.png" alt="#" height="16" width="16">
<img src="1_files/resapplet_003.png" alt="#" height="16" width="16">
<img src="1_files/diva-icon-16.png" alt="#" height="16" width="16">
<img src="1_files/istanbul_003.png" alt="#" height="16" width="16">
</div>
<br>
<div class="icongallery">
<img src="1_files/istanbul.png" alt="#" height="22" width="22">
<img src="1_files/ooo-gulls_002.png" alt="#" height="22" width="22">
<img src="1_files/icemon_002.png" alt="#" height="22" width="22">
<img src="1_files/totem_002.png" alt="#" height="22" width="22">
<img src="1_files/tasks_004.png" alt="#" height="22" width="22">
<img src="1_files/xgl-icon-22.png" alt="#" height="22" width="22">
<img src="1_files/ooo-base.png" alt="#" height="22" width="22">
<img src="1_files/ooo-impress_003.png" alt="#" height="22" width="22">
<img src="1_files/ooo-math_003.png" alt="#" height="22" width="22">
<img src="1_files/ooo-printeradmin_002.png" alt="#" height="22" width="22">
<img src="1_files/ooo-draw_003.png" alt="#" height="22" width="22">
<img src="1_files/ooo-calc_002.png" alt="#" height="22" width="22">
<img src="1_files/gnome_002.png" alt="#" height="22" width="22">
<img src="1_files/gimp-app-22.png" alt="#" height="22" width="22">
<img src="1_files/tomboy_002.png" alt="#" height="22" width="22">
<img src="1_files/blender_003.png" alt="#" height="22" width="22">
<img src="1_files/banshee_002.png" alt="#" height="22" width="22">
<img src="1_files/diva-icon-22.png" alt="#" height="22" width="22">
<img src="1_files/tomboy-old_002.png" alt="#" height="22" width="22">
<img src="1_files/blender2_002.png" alt="#" height="22" width="22">
<img src="1_files/compiz_004.png" alt="#" height="22" width="22">
<img src="1_files/file-roller.png" alt="#" height="22" width="22">
<img src="1_files/file-roller2_004.png" alt="#" height="22" width="22">
<img src="1_files/f-spot_002.png" alt="#" height="22" width="22">
<img src="1_files/evince-22.png" alt="#" height="22" width="22">
<img src="1_files/mouse-tracker_004.png" alt="#" height="22" width="22">
<img src="1_files/xgl_002.png" alt="#" height="22" width="22">
<img src="1_files/ooo-writer_004.png" alt="#" height="22" width="22">
<img src="1_files/resapplet.png" alt="#" height="22" width="22">
<img src="1_files/tangerine_003.png" alt="#" height="22" width="22">
<img src="1_files/yast-shell.png" alt="#" height="22" width="22">
<img src="1_files/ooo-web_004.png" alt="#" height="22" width="22">
</div>
<br>
<div class="icongallery">
<img src="1_files/ooo-web_003.png" alt="#" height="32" width="32">
<img src="1_files/ooo-printeradmin_003.png" alt="#" height="32" width="32">
<img src="1_files/ooo-impress.png" alt="#" height="32" width="32">
<img src="1_files/ooo-math_004.png" alt="#" height="32" width="32">
<img src="1_files/tasks_002.png" alt="#" height="32" width="32">
<img src="1_files/yast-shell_004.png" alt="#" height="32" width="32">
<img src="1_files/totem.png" alt="#" height="32" width="32">
<img src="1_files/tomboy_003.png" alt="#" height="32" width="32">
<img src="1_files/ooo-draw_004.png" alt="#" height="32" width="32">
<img src="1_files/ooo-writer.png" alt="#" height="32" width="32">
<img src="1_files/ooo-base_002.png" alt="#" height="32" width="32">
<img src="1_files/f-spot.png" alt="#" height="32" width="32">
<img src="1_files/compiz_003.png" alt="#" height="32" width="32">
<img src="1_files/blender_002.png" alt="#" height="32" width="32">
<img src="1_files/file-roller_004.png" alt="#" height="32" width="32">
<img src="1_files/mouse-tracker_002.png" alt="#" height="32" width="32">
<img src="1_files/file-roller2_002.png" alt="#" height="32" width="32">
<img src="1_files/music-player-banshee-32.png" alt="#" height="32" width="32">
<img src="1_files/ooo-calc_004.png" alt="#" height="32" width="32">
<img src="1_files/istanbul_004.png" alt="#" height="32" width="32">
<img src="1_files/icemon_004.png" alt="#" height="32" width="32">
</div>
<br>
<div class="icongallery">
<img src="1_files/banshee_003.png" alt="#" height="48" width="48">
<img src="1_files/ooo-impress_002.png" alt="#" height="48" width="48">
<img src="1_files/xgl_003.png" alt="#" height="48" width="48">
<img src="1_files/resapplet_002.png" alt="#" height="48" width="48">
<img src="1_files/ooo-web_002.png" alt="#" height="48" width="48">
<img src="1_files/compiz_002.png" alt="#" height="48" width="48">
<img src="1_files/tangerine_002.png" alt="#" height="48" width="48">
<img src="1_files/tasks_003.png" alt="#" height="48" width="48">
<img src="1_files/yast-shell_003.png" alt="#" height="48" width="48">
<img src="1_files/xgl-icon.png" alt="#" height="48" width="48">
<img src="1_files/tomboy.png" alt="#" height="48" width="48">
<img src="1_files/tomboy-old.png" alt="#" height="48" width="48">
<img src="1_files/ooo-printeradmin.png" alt="#" height="48" width="48">
<img src="1_files/ooo-math_002.png" alt="#" height="48" width="48">
<img src="1_files/gimp-app.png" alt="#" height="48" width="48">
<img src="1_files/file-roller2_003.png" alt="#" height="48" width="48">
<img src="1_files/mouse-tracker_003.png" alt="#" height="48" width="48">
<img src="1_files/evince.png" alt="#" height="48" width="48">
<img src="1_files/ooo-draw_002.png" alt="#" height="48" width="48">
<img src="1_files/icemon.png" alt="#" height="48" width="48">
<img src="1_files/istanbul_002.png" alt="#" height="48" width="48">
<img src="1_files/ooo-gulls.png" alt="#" height="48" width="48">
<img src="1_files/ooo-calc_003.png" alt="#" height="48" width="48">
<img src="1_files/ooo-base_004.png" alt="#" height="48" width="48">
</div>
<br>
<div class="icongallery">
<img src="1_files/artrage.png" alt="#" height="100" width="400">
<img src="1_files/desktop-navigator.png" alt="#" height="100" width="400">
<img src="1_files/tasky.png" alt="#" height="100" width="400">
</div>
<br>
<div class="icongallery">
<img src="1_files/blender_004.png" alt="#" height="300" width="400">
<img src="1_files/pidgin.png" alt="#" height="300" width="400">
<img src="1_files/evolution.png" alt="#" height="300" width="400">
<img src="1_files/ooo-shell.png" alt="#" height="300" width="400">
<img src="1_files/moonshine.png" alt="#" height="300" width="400">
<img src="1_files/abrt.png" alt="#" height="300" width="400">
<img src="1_files/firefox-updater.png" alt="#" height="300" width="400">
<img src="1_files/twitter.png" alt="#" height="300" width="400">
<img src="1_files/inkscape.png" alt="#" height="300" width="400">
<img src="1_files/gimp.png" alt="#" height="300" width="400">
<img src="1_files/netspeed.png" alt="#" height="300" width="400">
<img src="1_files/web-slices.png" alt="#" height="300" width="400">
<img src="1_files/tasque.png" alt="#" height="300" width="400">
<img src="1_files/empathy.png" alt="#" height="300" width="400">
<img src="1_files/seahorse.png" alt="#" height="300" width="400">
<img src="1_files/totem_003.png" alt="#" height="300" width="400">
<img src="1_files/headpin-idontthinkmostpeopleevenseenwhatcandlepinis.png" alt="#" height="300" width="400">
<img src="1_files/ooo-writer_002.png" alt="#" height="300" width="400">
<img src="1_files/file-roller_002.png" alt="#" height="300" width="400">
<img src="1_files/f-spot_004.png" alt="#" height="300" width="400">
<img src="1_files/headpin.png" alt="#" height="300" width="400">
<img src="1_files/katello.png" alt="#" height="300" width="400">
<img src="1_files/sound-juicer.png" alt="#" height="300" width="400">
<img src="1_files/shotwell.png" alt="#" height="300" width="400">
<img src="1_files/glade.png" alt="#" height="300" width="400">
<img src="1_files/virtman.png" alt="#" height="300" width="400">
<img src="1_files/eclipse.png" alt="#" height="300" width="400">
<img src="1_files/gimp-devel.png" alt="#" height="300" width="400">
</div>
<br class="clear">
<p>© Jakub Steiner, © Novell, Inc.</p><p>[ <a href="http://jimmac.musichall.cz/i.php">Return to Index</a> ]</p>
</div></div>
<div id="footer">
<div id="footercontainer">
<div class="copy"><p>© 1994–2011 Jakub 'jimmac' Steiner <span class="mail">&lt;jimmac @ gmail . com&gt;</span>.
All Rights Reserved.<br>
Page last edited on Sep 15, 2009</p>
</div>
</div>
</div>




</body></html>