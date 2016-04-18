<?php 
require_once '../include.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TEST PAGE</title>
</head>
<body>                 
                    <form action="doAction.php" method="post" enctype="multipart/form-data">

                    <br>点击输入回忆时间 &nbsp：        
                    <input name="date" type="text" id="datetimepicker" placeholder="点击选择日期" />
                    <br>请输入您的主题（<13个字）：       
                    <input name="title" cols="50" rows="1" placeholder="请输入主题" />  

                    <br>请输入您的内容（150个字）   ：       
                    <textarea name="context" cols="50" rows="3" placeholder="请输入内容"></textarea>                   

                    <A style="color: rgb(0, 142, 173);" href="#"> 请选择上传图片：</A>
                    <input type="file" name="myfile" id="myfile" accept="image/jpeg,image/gif,image/png,image/jpg"/>              

                    <input type="submit" value="完成上传" /> 
                </form>

</body>
</html>