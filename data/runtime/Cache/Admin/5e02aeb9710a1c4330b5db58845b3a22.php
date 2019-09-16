<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body>
	<div class="wrap">
		   
		<fieldset>
			
			<div class="controls">
				<div>
					<div class="playerzmblbkjP" id="playerzmblbkjP" style="width:450px;height:600px;">
					</div>
				</div>
				<span class="form-required"></span>
			</div>

		</fieldset>
			
		
	</div>
	<script src="/public/js/common.js"></script>
	<script type="text/javascript" src="/public/js/content_addtop.js"></script>
	<script type="text/javascript" src="/public/playback/ckplayer.js" charset="utf-8"></script>
	<script type="text/javascript">
	$(function(){
			var flashvars={
				f:"<?php echo ($info['href']); ?>",//视频地址rtmp://testlive.anbig.com/5showcam/1737_1487723653
				a:'',//调用时的参数，只有当s>0的时候有效
				s:'0',//调用方式，0=普通方法（f=视频地址），1=网址形式,2=xml形式，3=swf形式(s>0时f=网址，配合a来完成对地址的组装)
				c:'0',//是否读取文本配置,0不是，1是
				t:'10|10',//视频开始前播放swf/图片时的时间，多个用竖线隔开
				y:'',//这里是使用网址形式调用广告地址时使用，前提是要设置l的值为空
				z:'',//缓冲广告，只能放一个，swf格式
				e:'8',//视频结束后的动作，0是调用js函数，1是循环播放，2是暂停播放并且不调用广告，3是调用视频推荐列表的插件，4是清除视频流并调用js功能和1差不多，5是暂停播放并且调用暂停广告
				v:'100',//默认音量，0-100之间
				p:'0',//视频默认0是暂停，1是播放，2是不加载视频
				h:'0',	//播放http视频流时采用何种拖动方法，=0不使用任意拖动，=1是使用按关键帧，=2是按时间点，=3是自动判断按什么(如果视频格式是.mp4就按关键帧，.flv就按关键时间)，=4也是自动判断(只要包含字符mp4就按mp4来，只要包含字符flv就按flv来)
				k:'32|63',//提示点时间，如 30|60鼠标经过进度栏30秒，60秒会提示n指定的相应的文字
				n:'这是提示点的功能，如果不需要删除k和n的值|提示点测试60秒',//提示点文字，跟k配合使用，如 提示点1|提示点2
				wh:'',//宽高比，可以自己定义视频的宽高或宽高比如：wh:'4:3',或wh:'1080:720'
				lv:'0',//是否是直播流，=1则锁定进度栏
				loaded:'loadedHandler',//当播放器加载完成后发送该js函数loaded
				//调用播放器的所有参数列表结束
				//以下为自定义的播放器参数用来在插件里引用的
				my_title:"<?php echo ($info['title']); ?>",
				my_url:encodeURIComponent(window.location.href)//本页面地址
				//调用自定义播放器参数结束
			};
			var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always'};									//这里定义播放器的其它参数如背景色（跟flashvars中的b不同），是否支持全屏，是否支持交互
			//var video=['http://img.ksbbs.com/asset/Mon_1605/0ec8cc80112a2d6.mp4->video/mp4'];
			var video=[''];
			CKobject.embed('public/playback/ckplayer.swf','playerzmblbkjP','ckplayer_playerzmblbkjP','100%','100%',false,flashvars,video,params);
	})
</script>

</body>
</html>