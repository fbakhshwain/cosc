<h1> man </h1>
<?php
$logins = array(
    'username1' => 'password1',
    'username2' => 'password2',
    'username3' => 'password3',
);

$user = isset($_POST['user']) ? strtolower($_POST['user']) : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

if ( ! isset($logins[$user]) or $logins[$user] != $pass)
{
    showForm("Wrong Username/Password");
    exit();
}
?>
</body>
</html>