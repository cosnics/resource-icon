function positionFooter() {
  var $footer = $('#footer');
  $footer.removeClass('fixed');
  if ($(document.body).height() < $(window).height()) {
    $footer.addClass('fixed');
  } else {
    $footer.removeClass('fixed');
  }
}

$.fn.colorHover = function (animtime,fromColor,toColor) { //link hovers color

  $(this).hover(function () {
    return $(this).css('color',fromColor).stop().animate({'color': toColor},animtime);
  }, function () {
    return $(this).stop().animate({'color': fromColor},animtime);
  });
}

/* hideout effects */
$(document).ready(function() {
		$("a[rel^='lightbox']").click(function () { return false;})
			.fancybox({
			 'zoomSpeedIn': 300, 
			 'zoomSpeedOut': 300, 
			 'overlayShow': true,
			 'padding': 0,
			 'overlayShow': true,
			 'overlayOpacity': 0.8,
			 'hideOnContentClick': true,
			 'imageScale': true
		});
		//menus
		$("ul.pulldownmenu div").hide();
		$(".pulldownmenu>li").hoverIntent(function () {
			 $("div",this).slideDown(100);
			 //console.log("div#" + x);
		}, function () {
			 $("div",this).fadeOut();
		});
		$("#sidebar-architems").hide();
		$("#logarchive").toggle(function() {
			$("#sidebar-architems").slideDown(1000);
			$(this).addClass("rollup");
		}, function () {
			$("#sidebar-architems").slideUp(100);
			$(this).removeClass("rollup");
		});

		//utterly ridiculous way to get my del.icio.us links as pinknet doesn't do PHP5
		/*	$("#menu1 a").attr("href", "http://del.icio.us/jimmac").text("Delicious");
		$("#menu1Content ul.forie-pulldownmenu").empty();
		$.ajax({
			type:	"GET",
			url:	"/inc/delicious.php",
			dataType:	"xml",
			success: function(rss) {
				$("item:lt(6)",rss).each(function(i) {
					var title = $(this).children("title").text();
					var link = $(this).children("link").text();
					var desc = $(this).children("description").text();
					var entry = "<li>";
					entry += "<a href=\"" + link + "\" title=\"";
					entry += desc + "\">" + title + "</a>";
					entry += "</li>\n";
					$("#menu1Content ul.forie-pulldownmenu").append(entry);
				});
			}
		});
		*/
		
    //get the latest tweets from http://twitter.com/statuses/user_timeline/14097648.rss
    $('#tweet').append("<h2><a href=\"http://www.twitter.com/jimmac\">Twitter</a></h2><ul></ul>\n");

    $.ajax({
			type:	"GET",
			url:	"/inc/twitter.php",
			dataType:	"xml",
			success: function(rss) {
				$("item:lt(3)",rss).each(function(i) {
					var title = $(this).children("title").text().substring(8);
          if (title.length>70) {
            title = title.substring(0,67) + '&hellip;';
          }
					var link = $(this).children("link").text();
					var desc = $(this).children("description").text();
					entry = "<li><a href=\"" + link + "\" title=\"";
					entry += desc + "\">" + title + "</a></li>\n";
          $('#tweet>ul').append(entry);
				});
			}
		});

    //BC2
    var $bc2 = $('#bc2');
    $bc2.addClass('bfbadge');
    $.ajax({
			type:	"GET",
			url:	"/inc/bc2.php",
			dataType: 'json',
			success: function(stats) {
			  //console.log(stats.players[0].rank);
			  $bc2.append('<a href="http://bfbcs.com/stats_ps3/jimmacfx"><img src="/images/bc2/r0'+stats.players[0].rank+'.png"></a>');
			  $('img',$bc2).css({width: '0', height: '0'}).animate({width: '100px',height: '100px'},1000,'easeOutBounce');
			}
		});
    //BF3
    var $bf3 = $('#bf3');
    $bf3.addClass('bfbadge');
    $.ajax({
			type:	"GET",
			url:	"/inc/bf3.php",
			dataType: 'json',
			success: function(stats) {
			  //console.log(stats.stats.rank.img_medium);
			  $bf3.append('<a href="http://bf3stats.com/stats_ps3/jimmacfx"><img src="/images/bf3/'+stats.stats.rank.img_medium+'"></a>');
			  $('img',$bf3).css({width: '0', height: '0'}).animate({width: '100px',height: '100px'},1000,'easeOutBounce');
			}
		});

		//blog stuff
		$(".commentlist a[href='http://jimmac.musichall.cz']").parents("li").addClass("jimmacComment");

    $('a').colorHover(500,'#204a87','#fcaf3e');  //bind hover to all links
    $('.pulldownmenu a, #quickmenu a, #buttonavi a').unbind(); //except these

    //google analytics
    $.gaTracker('UA-2398403-1');
    //flickr
    var flickrfeed = "http://api.flickr.com/services/feeds/photos_public.gne?id=63781227@N00&lang=en-us&format=json&size=s&display=latest&jsoncallback=?"
    $.getJSON(flickrfeed, function(data){
      //$('.jimmr .loading').hide();
      for (i=0;i<6;i++) {
        $("<img width='48' height='48'/>")
          .attr("src", data.items[i].media.m)
          .attr("title", data.items[i].title).appendTo(".jimmr")
          .wrap("<div class='flickr_badge_image' id='flickr_badge_image"+(i+1)+"'></div>")
          .wrap("<a href='" + data.items[i].link + "'></a>");
      }
    });
    
    //footer
    $(window).resize(positionFooter).resize();
});

$(window).ready(function () {
  //run _after_ images have been loaded as well.
  $(window).resize(positionFooter).resize();
});

