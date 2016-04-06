<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery鼠标悬停横向时间轴代码 </title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery1.10.2.js"></script>
<script type="text/javascript">
$(function(){
	
	//首页大事记
	$('.course_nr2 li').hover(function(){
		$(this).find('.shiji').slideDown(600);
	},function(){
		$(this).find('.shiji').slideUp(400);
	});
	
});
</script>

</head>

<body>

<div class="clearfix course_nr">
	<ul class="course_nr2">
		<li>
			1993
			<div class="shiji">
				<h1>1993</h1>
				<p>内容描述1。</p>
			</div>
		</li>
		<li>
			1999
			<div class="shiji">
				<h1>1999</h1>
				<p>内容描述2；</p>
			</div>
		</li>
		<li>
			2003
			<div class="shiji">
				<h1>2003</h1>
				<p>内容描述3</p>
			</div>
		</li>
		<li>
			2007
			<div class="shiji">
				<h1>2007</h1>
				<p>内容描述4</p>
			</div>
		</li>
		<li>
			2008
			<div class="shiji">
				<h1>2008</h1>
				<p>内容描述5</p>
			</div>
		</li>
	</ul>
</div>

</body>
</html>
