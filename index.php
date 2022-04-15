<!-- <form action="login.php" method="get">
    <label for="email">Email (or) User ID</label><br>
    <input type="text" name="email" id="email"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="Login">
</form> -->
<!-- <form action="login.php" method="post">
    <label for="email">Email (or) User ID</label><br>
    <input type="text" name="email" id="email"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="Login">
</form> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Example</title>
</head>
<style>
    body {
        background: #efefef;
        font-family: arial;
        color: #333;
    }

    #wrap {
        width: 500px;
        padding: 20px;
        margin: 10px auto;
        border: 4px solid #ddd;
        background: #fff;
    }

    h1 {
        margin: 0 0 20px 0;
        padding: 0 0 10px 0;
        border-bottom: 1px solid #ddd;
    }

    input[type=text],
    input[type=password] {
        display: block;
        margin-bottom: 10px;
    }

    .msg {
        width: 500px;
        background: #ffd;
        border: 2px solid #dda;
        text-align: center;
        margin: 10px auto;
        font-size: 13px;
        padding: 6px;
    }

    /*nav bar*/
    #nav{
        overflow: hidden;
    }

    a {
        display: block;
        width: 150px;
        height: 50px;
        text-decoration: none;
        float: left;
        background: purple;
        color: white;        
        line-height: 50px;
        border-radius: 20px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        margin: 10px;
    }
    a:hover{
        background: white;
        color: purple;
    }
    li{
        list-style: none;
    }
</style>

<body>
    <div id="nav">
        <ul>
            <li><a href="image_upload.php">Image Upload</a></li>
            <li><a href="image_upload.php">Image Upload</a></li>
            <li><a href="">Image Upload</a></li>
        </ul>
    </div>
    <?php
    session_start();
    $auth = isset($_SESSION['auth']);
    ?>
    <div id="wrap">
        <?php if ($auth) { ?>
            <h1>Welcome to My Website</h1>
            <p>You see this because you are an authenticated user. Congratulation!</p>
            <b><?php echo $_SESSION['id'] ?></b>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <h1>You need to login</h1>
            <form action="login.php" method="post">
                <label for="id">User ID</label>
                <input type="text" name="id" id="id">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Login">
            </form>
        <?php } ?>
    </div>

</body>

</html>