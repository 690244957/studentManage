<?php
  include_once 'fn.php';
  $id = $_GET['id'];
  $sql = "select * from stu where id=$id";
  $res = my_query($sql)[0];
  print_r($res);
 
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- 引入样式 -->
  <link rel="stylesheet" href="./css/form.css">
</head>

<body>
  <form action = 'updatesave.php' method='post' enctype='multipart/form-data'>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    姓名:<input type="text" name="username" value="<?php echo $res['name']?>";>
    昵称:<input type="text" name="nickname" value="<?php echo $res['nickname'];?>">
    年龄:<input type="text" name="age" value="<?php echo $res['age'];?>">
    电话：<input type="text" name="tel" value="<?php echo $res['tel'];?>"> 
    性别：
    <input type="radio" name="sex" value="m" <?php echo $res['sex']==='m'?'checked':'';?>>男
    <input type="radio" name="sex" value="f" <?php echo $res['sex']==='f'?'checked':'';?>>女
    
    <br> 
    班级：
    <select name="class">
      <option value="1" <?php echo $res['classid']==='1'?'selected':''?>>黑马20期</option>
      <option value="2" <?php echo $res['classid']==='2'?'selected':''?>>黑马21期</option>
      <option value="3" <?php echo $res['classid']==='3'?'selected':''?>>黑马22期</option>
      <option value="4" <?php echo $res['classid']==='4'?'selected':''?>>黑马23期</option>
      <option value="5" <?php echo $res['classid']==='5'?'selected':''?>>黑马24期</option>
     
    </select>
    头像：
    <input type="file" name="photo">
      <img src="<?php echo $res['photo'] ?>" alt="" style="width:100%">
      <input type="submit" value="保存信息">

  </form>
</body>

</html>