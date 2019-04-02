<?php
  header('content-type:text/html;charset=utf-8');
  define('HOST','127.0.0.1');
  define('PWD','root');
  define('UNAME','root');
  define('DB','test01');
  define('PORT',3306);
  function my_exec($sql){
    $link = mysqli_connect(HOST,UNAME,PWD,DB,PORT);
    if(!$link){
      echo '连接失败';
      return false;
    }
    $res = mysqli_query($link,$sql);
    if($res){
      mysqli_close($link);
      return true;
    }
    else{
      echo mysqli_error($link);
      mysqli_close($link);
      return false;
    }
  }
  function my_query($sql){
    $link = mysqli_connect(HOST,UNAME,PWD,DB,PORT);
    if(!$link){
      echo '连接失败';
      return false;
    }
    $res = mysqli_query( $link, $sql );  

    // 3. 分析结果
    if ( !$res ) {
      // 执行失败
      echo mysqli_error( $link );
      mysqli_close( $link );   // 关闭连接
      return false;
    }
    $arr=[];
    while($row = mysqli_fetch_assoc($res)){
      $arr[] = $row;

    }
    mysqli_close($link);
    return $arr;
  }

?>