<form actiom ="nav.php" method="post">
    email :
    <input type="email" name="email">
    password :
    <input type="password" name="password">
    <input type="submit" name="kirim" value="login">


</form>

<?php

if ( isset($_post['email']) ){
    $email =$_post ['email'];
    $password =$_post ['password'];

    echo $email;
    echo '<br>';
    echo $password;
}

?>
