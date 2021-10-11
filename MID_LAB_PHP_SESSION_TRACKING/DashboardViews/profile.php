<?php
session_start();
$users = json_decode($_COOKIE['users'], true);
$username = $_COOKIE['authUser'];
$user = array();
for ($i = 0; $i < count($users); ++$i) {
    if ($users[$i]['username'] == $username) {
        $user = $users[$i];
        break;
    }
}
?>

<table>
    <tr>
        <td>
            <label for="name">Name : </label>
        </td>
        <td>
            <input type="text" name="name" value=<?php echo $user['name'] ?>>
        </td>
    </tr>
    <tr>
        <td>
            <label for="username">Username : </label>
        </td>
        <td>
            <input type="text" name="username" readonly value=<?php echo $user['username'] ?>>
        </td>
    </tr>
    <tr>
        <td>
            <label for="email">Email : </label>
        </td>
        <td>
            <input type="email" name="email" value=<?php echo $user['email'] ?>>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male" <?php echo $user['gender'] == "Male" ? 'checked' : '' ?>>Male
                <input type="radio" name="gender" value="Female" <?php echo $user['gender'] == "Female" ? 'checked' : '' ?>>Female
                <input type="radio" name="gender" value="Other" <?php echo $user['gender'] == "Others" ? 'checked' : '' ?>>Other
            </fieldset>
        </td>
    </tr>
    <tr>
        <td>
            <label for="dateOfBirth">Date Of Birth : </label>
        </td>
        <td>
            <input type="text" name="dateOfBirth" value=<?php echo $user['dateOfBirth'] ?>>
        </td>
    </tr>
</table>