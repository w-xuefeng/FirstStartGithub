<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言&#8226;天商计科1501</title>
    <meta name="keywords" content="计算机科学与技术专业1501班" />
    <meta name="description" content="天津商业大学信息工程学院计算机科学与技术专业1501班,We are family!" />
    <link rel="shortcut icon" type="iamge/x-png" href="../img/favicon.png" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/nav.css">    
<style type="text/css">
body{margin: 0;padding: 0;
	background-color:rgba(24,35,44,1);
	color:#fff;}
	 a{text-decoration: none;color: #fff;}
   a:hover{color: orange;}
	.D{margin: 20px auto;height: 360px;width: 500px;border:2px solid #CCCCCC;padding: 10px;background:rgba(255,255,255,0.2);}
	.right{float: right;margin: 15px;}
	.left{margin: 15px;}
	#Content{margin: 0 auto;height: 150px;width: 500px;background:rgba(255,255,255,0.15);}
	.error {color: #FF0000;}
</style>

</head>
<body>
<center>
  <h1 style="margin-top:50px ">留言板</h1>
 <a href="message-index.php">留言首页</a> | <a href="liuyan.php">我要留言</a>
</center>
<div class="D">
<form name="form1" method="post" action="">
  <p>
    姓名：
    <input name="name" type="text" id="name">    
    <span class="error" id="nameErr">*</span>    
  </p><br/>
  <p>Email：<input type="test" name="email" id="email">
   <span class="error" id="emailErr">*</span>
  </p><br/>
  <p>
    留言：
  </p>
  <br/>
  <p>
  		<textarea name="content" id="content"></textarea>	
  </p>
  <span class="error" id="contentErr">*</span>
  <p>
    <input type="submit" name="button" id="button" onmousedown="tijiao()" value="提交">
    <input type="reset" name="button2" id="button2" value="重置">
  </p>
</form>

</div>
<div id="bottom" style="position: fixed;bottom: 0px;left: 0px">
      <div id="foot">
        <div id="foottext">
          天津市津霸公路东口 &nbsp;&#8226;&nbsp;
          <a target="_blank" href="http://www.tjcu.edu.cn/" title="天津商业大学">天津商业大学</a> &nbsp;&#8226;&nbsp;
          <a href="http://xxxy.tjcu.edu.cn/" title="天津商业大学信息工程学院">信息工程学院</a> &nbsp;&#8226;&nbsp;
          <a href="../index.html" title="天商计科1501">计算机科学与技术专业1501班</a>
          <br />Copyright&copy;2016&nbsp;
          <a href="../index.html" title="天商计科1501">天津商业大学计科1501班</a> &
          <a target="_blank" href="http://www.youngon.com/" title="天津商业大学阳光网站">阳光网站</a> &nbsp;All&nbsp;Right&nbsp;Reserved
        </div>
      </div>
      <div id="footimg">
        <a href="../index.html" title="天商计科1501">
          <img src="../img/favicon.png" width="45px" height="45px" style="float:left" /></a>
        <a target="_blank" href="http://www.youngon.com/" title="天津商业大学阳光网站">
          <img src="../img/youngonLogo.png" width="90px" height="45px" style="float:right" /></a>
      </div>
    </div> 
</body>
<script language="JavaScript"> 

function tijiao(){
if (
	document.getElementById("name").value == ""||document.getElementById("email").value == ""||document.getElementById("content").value == "") 
{
 if (document.getElementById("name").value == "") {
     document.getElementById("nameErr").innerHTML = "*姓名是必填的";

   } ;
   
   if (document.getElementById("email").value == "") {
     document.getElementById("emailErr").innerHTML = "*电邮是必填的";
   } ;

   if (document.getElementById("content").value == "") {
     document.getElementById("contentErr").innerHTML = "*留言不能为空";

   } ;
}
else 
{
document.form1.action="post.php"; 
document.form1.submit();
}
}
</script> 










</html>

