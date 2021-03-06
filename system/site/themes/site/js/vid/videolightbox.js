/* Start : tools.overlay-1.0.4 */
(function(b){b.tools=b.tools||{version:{}};b.tools.version.overlay="1.0.4";var c=[];function a(h,d){var r=this,q=b(window),f,n,s,i,k,m,l;var e=d.expose&&b.tools.version.expose;function p(o,t){b(r).bind(o,function(v,u){if(t&&t.call(this)===false&&u){u.proceed=false}});return r}b.each(d,function(o,t){if(b.isFunction(t)){p(o,t)}});var j=d.target||h.attr("rel");var g=j?b(j):null;if(!g){g=h}else{k=h}q.load(function(){m=g.attr("overlay");if(!m){m=g.css("backgroundImage");if(!m){throw"background-image CSS property not set for overlay element: "+j}m=m.substring(m.indexOf("(")+1,m.indexOf(")")).replace(/\"/g,"");g.css("backgroundImage","none");g.attr("overlay",m)}s=g.outerWidth({margin:true});i=g.outerHeight({margin:true});n=b('<img src="'+m+'"/>');n.css({border:0,position:"absolute",display:"none"}).width(s).attr("overlay",true);b("body").append(n);if(k){k.bind("click.overlay",function(o){r.load(o.pageY-q.scrollTop(),o.pageX-q.scrollLeft());return o.preventDefault()})}d.close=d.close||".close";if(!g.find(d.close).length){g.prepend('<div class="close"></div>')}f=g.find(d.close);f.bind("click.overlay",function(){r.close()});if(d.preload){setTimeout(function(){var o=new Image();o.src=m},2000)}});b.extend(r,{load:function(w,v){if(!n){q.load(function(){r.load(w,v)});return r}if(r.isOpened()){return r}if(d.oneInstance){b.each(c,function(){this.close()})}var u={proceed:true};b(r).trigger("onBeforeLoad",u);if(!u.proceed){return r}if(e){n.expose(d.expose);l=n.expose().load()}w=w||d.start.top;v=v||d.start.left;var o=d.finish.top;var t=d.finish.left;if(o=="center"){o=Math.max((q.height()-i)/2,0)}if(t=="center"){t=Math.max((q.width()-s)/2,0)}if(!d.start.absolute){w+=q.scrollTop();v+=q.scrollLeft()}if(!d.finish.absolute){o+=q.scrollTop();t+=q.scrollLeft()}n.css({top:w,left:v,width:d.start.width,zIndex:d.zIndex}).show();n.animate({top:o,left:t,width:s},d.speed,function(){g.css({position:"absolute",top:o,left:t});var x=n.css("zIndex");f.add(g).css("zIndex",++x);g.fadeIn(d.fadeInSpeed,function(){b(r).trigger("onLoad")})});return r},close:function(){if(!r.isOpened()){return r}var u={proceed:true};b(r).trigger("onBeforeClose",u);if(!u.proceed){return r}if(l){l.close()}if(n.is(":visible")){g.hide();var t=d.start.top;var o=d.start.left;if(k){u=k.offset();t=u.top+k.height()/2;o=u.left+k.width()/2}n.animate({top:t,left:o,width:0},d.closeSpeed,function(){b(r).trigger("onClose",u)})}return r},getBackgroundImage:function(){return n},getContent:function(){return g},getTrigger:function(){return k},isOpened:function(){return g.is(":visible")},getConf:function(){return d},onBeforeLoad:function(o){return p("onBeforeLoad",o)},onLoad:function(o){return p("onLoad",o)},onBeforeClose:function(o){return p("onBeforeClose",o)},onClose:function(o){return p("onClose",o)}});b(document).keydown(function(o){if(o.keyCode==27){r.close()}});if(d.closeOnClick){b(document).bind("click.overlay",function(o){if(!g.is(":visible, :animated")){return}var t=b(o.target);if(t.attr("overlay")){return}if(t.parents("[overlay]").length){return}r.close()})}}b.fn.overlay=function(e){var f=this.eq(typeof e=="number"?e:0).data("overlay");if(f){return f}var d=b(window);var g={start:{top:Math.round(d.height()/2),left:Math.round(d.width()/2),width:0,absolute:false},finish:{top:80,left:"center",absolute:false},speed:"normal",fadeInSpeed:"fast",closeSpeed:"fast",close:null,oneInstance:true,closeOnClick:true,preload:true,zIndex:9999,api:false,expose:null,target:null};if(b.isFunction(e)){e={onBeforeLoad:e}}b.extend(true,g,e);this.each(function(){f=new a(b(this),g);c.push(f);b(this).data("overlay",f)});return g.api?f:this}})(jQuery);
/* End : tools.overlay-1.0.4 */

jQuery(function(){
	var $=jQuery;

	if(!document.getElementById("vcontainer")){
		$("body").append($("<div id='voverlay'></div>"));
		$("#voverlay").append($("<div id = 'vcontainer'></div>"));
	}
	
	$("#videogallery a[rel]").overlay({
		api:true,

		expose: (0?{
			color:'#151410',
			loadSpeed:400,
			opacity:0
		}:null),

		onClose: function(){
			swfobject.removeSWF("video_overlay");
		},


		// create video object for overlay
		onBeforeLoad: function(){
			// check and create overlay contaner
			var c = document.getElementById("video_overlay");
			if(!c){
				var d = $("<div></div>");
				d.attr({id: "video_overlay"});
				$("#vcontainer").append(d);
			};
			
			var wmkText="";
			var wmkLink="";
			c = wmkText? $('<div></div>'):0;
			if (c) {
				c.css({
					position:'absolute',
					right:'38px',
					top:'38px',
					padding:'0 0 0 0'
				});
				$("#vcontainer").append(c);
			};

			// for IE use iframe
			if (c && document.all){
				var f = $('<iframe src="javascript:false"></iframe>');
				f.css({
					position:'absolute',
					left:0,
					top:0,
					width:'100%',
					height:'100%',
					filter:'alpha(opacity=0)'
				});
				
				f.attr({
					scrolling:"no",
					framespacing:0,
					border:0,
					frameBorder:"no"
				});
				
				c.append(f);
			};
			
			var d = c? $(document.createElement("A")):c;
			if(d){
				d.css({
					position:'relative',
					display:'block',
					'background-color':'#E4EFEB',
					color:'#837F80',
  					'font-family':'Lucida Grande,Arial,Verdana,sans-serif',
					'font-size':'11px',
					'font-weight':'normal',
  					'font-style':'normal',
					padding:'1px 5px',
					opacity:.7,
					filter:'alpha(opacity=70)',
					width:'auto',
					height:'auto',
					margin:'0 0 0 0',
					outline:'none'
				});
				d.attr({href:wmkLink});
				d.html(wmkText);
				d.bind('contextmenu', function(eventObject){
					return false;
				});
				
				c.append(d);
			}
			
			// create SWF
			var src = this.getTrigger().attr("href");
			
			if (typeof(d)!='number' && (!c || !c.html || !c.html())) return;
			
			swfobject.createSWF(
				{ data:src, width:"100%", height:"100%", wmode:"opaque" },
				{ allowScriptAccess: "always", allowFullScreen: true },
				"video_overlay");
		}
	});
});
