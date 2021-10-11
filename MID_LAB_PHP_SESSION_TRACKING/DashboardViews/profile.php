<?php
    session_start();
    $users = json_decode($_COOKIE['users'],true);
    $username = $_COOKIE['authUser'];
    $user = array();
    for($i=0;$i<count($users);++$i){
        if($users[$i]['username']==$username){
            $user = $users[$i];
            break;
        }
    }
?>

<label for="name">Name : </label>
<input type="text" name="name" value=<?php echo $user['name'] ?>>
<label for="username">Username : </label>
<input type="text" name="username" value=<?php echo $user['username'] ?>>
<label for="email">Email : </label>
<input type="text" name="email" value=<?php echo $user['email'] ?>>
<label for="gender">Gender : </label>
<input type="text" name="gender" value=<?php echo $user['gender'] ?>>
<label for="dateOfBirth">Date Of Birth : </label>
<input type="text" name="dateOfBirth" value=<?php echo $user['dateOfBirth'] ?>>