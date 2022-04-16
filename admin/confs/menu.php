<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        ul.menu {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #16A085;
        }

        ul.menu li {
            float: left;
            border-right: 1px solid #1ABC9C;
        }

        ul.menu a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
        }

        ul.menu a:hover {
            background: #1ABC9C;
        }
    </style>
</head>

<body>
    <ul class="menu">
        <li><a href="book-list.php">Manage Books</a></li>
        <li><a href="cat-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>

</html>