<?php
//1. Создайте объект класса User. ✓
//2. Попробуйте загрузить пользователя с помощью метода load() класса
//User. ✓
//3. Если пользователя удалось загрузить, то выполните валидацию полей
//формы с помощью класса UserFormValidator. ✓
//4. Если валидация прошла успешно, попробуйте сохранить поля формы с
//помощью метода save() класса User. ✓
//5. Если всё прошло успешно, то выведите сообщение об успешном
//сохранении формы и снова выведите форму пустой. ✓
//6. Если возникла ошибка, то выведите текст сообщения об ошибке и снова
//выведите форму, подставив в её поля введенные ранее значения. ✓
require_once 'User.php';
require_once 'UserFormValidator.php';
require_once 'login.php';

session_start();
$_SESSION["email"] = isset($_POST["email"]) ? $_POST["email"] : "";
$_SESSION["age"] = isset($_POST["age"]) ? $_POST["age"] : "";
$_SESSION["name"] = isset($_POST["name"]) ? $_POST["name"] : "";
$_SESSION["id"] = isset($_POST["id"]) ? $_POST["id"] : "";

if (!empty($_POST)) {
    try {
        $user = new User((int)$_POST["id"], $_POST["name"], (int)$_POST["age"], $_POST["email"]); // создаем инстанс
        $user->load($user->getId());
        $userValidate = new UserFormValidator(); // инициализируем валидатор
        $userValidate->validate([$user]);
        if($user->save([$user])){
            echo "EVERYTHING OKAY, FORM WAS SAVED ;)<br/>";
            clearSession(); // очищаем поля если все норм сохранилось
        } else {
            throw new Error("I can't save user, I'm so sorry :(");
        }

    } catch (Error $e) {
        echo $e->getMessage();
    }
}

function clearSession(){
    $_SESSION["email"]="";
    $_SESSION["age"]="";
    $_SESSION["name"]="";
    $_SESSION["id"]="";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <p>Ваш id: <input type="text" name="id" value="<?php echo $_SESSION['id']; ?>"/></p>
    <p>Ваше имя: <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"/></p>
    <p>Ваш возраст: <input type="text" name="age" value="<?php echo $_SESSION['age']; ?>"/></p>
    <p>Ваш email: <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"/></p>
    <p><input type="submit"/></p>
</form>
</body>
</html>