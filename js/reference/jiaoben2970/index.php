<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery鼠标悬停横向时间轴代码 - 站长素材</title>

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
		<li>
			2009
			<div class="shiji">
				<h1>2009</h1>
				<p>内容描述6</p>
			</div>
		</li>
		<li>
			2013
			<div class="shiji">
				<h1>2013</h1>
				<p>内容描述7</p>
			</div>
		</li>
		<li>
			2014
			<div class="shiji">
				<h1>2014</h1>
				<p>内容描述7</p>
			</div>
		</li>
	</ul>
</div>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. </p>
<p>来源：<a href="http://sc.chinaz.com/" target="_blank">站长素材</a></p>
</div>
</body>
</html>
