<?php
  //session_start();

  $conn = mysqli_connect('localhost','root','');

  mysqli_select_db($conn,'login');

  //$name=$_POST['user'];
  //$pass=$_POST['pass'];

  $s = "select * from users"//where name='$name'";

  $result=mysqli_query($conn,$s);

  $num=mysqli_num_rows($result);

  if ($num==1){
      echo"username already taken";

  }else{
      $reg="insert into user(name,password) values ('name','pass')";
      mysqli_query($conn,$reg);
      echo"registration succesful";
  }
<?php
/**
 * Created by PhpStorm.
 * User: SENGOX-Y
 * Date: 6/12/2019
 * Time: 1:14 PM
 */
$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'login');

if (isset($_POST['signup'])) {
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    $s = "select username from users where username='$name'";

    $result = mysqli_query($conn, $s);

    $myarray = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $num = mysqli_num_rows($myarray);

    if ($num == 1) {
        echo "username already taken";

    } else {
        $reg = "insert into user(name,password) values ('$name','$pass')";
        mysqli_query($conn, $reg);
        echo "registration succesful";
    }
}
?>










