<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation backend</title>
</head>
<body>
<?php 
    $name = $email = $gender = $comment = $num = $age ="";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $comment = test_input($_POST["comment"]);
        $num = test_input($_POST["num"]);
        $age = test_input($_POST["age"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="email">Email: </label>
        <input type="Email" name="email">
        <br>
        Gender:
        <input type="radio" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label>
        <br>
        <label for="comment">Comment: </label>
        <textarea name="comment" cols="30" rows="10"></textarea>
        <br>
        <label for="number">Phone: </label>
        <input type="number" name="num">
        <br>
        <label for="age">Age: </label>
        <input type="number" name="age">
        <br>
        <input type="submit">

        <?php 
        echo '
        <h2>Your response</h2>
        Name : '. $name .'<br>Email : ' . $email . '<br>Gender: ' .$gender. '<br>Comment : ' .$comment. '<br>phone : ' .$num.'<br>age : '.$age.'';
        ?>
        
    </form>
</body>
</html>