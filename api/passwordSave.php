<?php

/**
 * @Author: Administrator
 * @Date:   2018-04-11 08:34:23
 * @Last Modified by:   Administrator
 * @Last Modified time: 2018-04-13 09:56:55
 */
include "conn.php";
  $valid   = true;
  $message = '';

//   var_dump($_POST);
//   exit();


if (isset($_POST['send']) && $_POST['send']==1) {
	  
	if(isset($_POST['email']) AND $_POST['email']!=""){
        $email = htmlentities($_POST['email'],ENT_QUOTES,'UTF-8');
    }	

	   if(isset($_POST['oldPassword']) && $_POST['oldPassword']!=""){
		$oldPassword = sha1($_POST['oldPassword']);
		$sql = "SELECT * From ordering_users WHERE password = '$oldPassword' AND userEmail = '$email'";

			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result) == 0 ){ 
				$message = '请输入正确的原密码';
				$valid   = false;
			}
	   }else{
			$message = '原密码不能为空';
			$valid   = false;
	   }

	   
	if (isset($_POST['newPassword']) && isset($_POST['checkPassword']) && $_POST['newPassword']!="" && $_POST['checkPassword']!="") {

		$newPassword = $_POST['newPassword'];
		$checkPassword = $_POST['checkPassword'];

		if ($newPassword != $checkPassword) {
			 $message = "初始密码和确认密码不符合";
			 $valid   = false;
		}else{
			$newPassword = sha1($newPassword);
		}

	}else{
		$message = '修改密码不能为空';
		$valid   = false;
	}


// }else{
// 	$message = '登陆信息失败，请重新重登';
// 	$valid   = false;
// }


    if ($valid) {
    
        $result = mysqli_query($conn,"SELECT * From ordering_users WHERE userEmail = '$email'");  //验证是否存在
        if(mysqli_num_rows($result) == 1 ){ 

          	$sql="UPDATE ordering_users SET password='$newPassword' WHERE userEmail = '$email'";
             
             if(mysqli_query($conn,$sql)){
                $message =  '用户密码修改成功!';
              }else{
                $message =  "用户密码修改失败!".mysqli_error($conn).$sql;
                $valid   = false;
              }
        }else{
              $message =  "用户不存在,可能已经被其它管理员删除";
              $valid   = false;
        }
      }else{
            $message =  $message;
            $valid   = false; 
      }

    

}else{
	$valid   = false;
    $message = '接口不存在';
}


echo json_encode(
    array('valid' => $valid, 'message' => $message),JSON_UNESCAPED_UNICODE
);

$conn->close();

?>