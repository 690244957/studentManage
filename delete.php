<?php
  include_once 'fn.php';
  $id = $_GET['id'];
  $sql = "delete from stu where id= $id";
  if(my_exec($sql)){
    echo '删除成功';
    header('location:list.php');
  }
  else{
    echo '删除成功';
  }
?>