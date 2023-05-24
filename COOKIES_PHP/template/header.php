<head>
    <link rel="stylesheet" href="./template/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP - REQUIREMENTS</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <?php 
                if(isset($_COOKIE['name'])) {
                    $name = $_COOKIE['name'];
                    echo "<h2>.$name</h2>";
                }
                ?>
                <a href='./index.php'>HTTP/(GET-POST)</a>
            </div>
        </nav>
    </header>
</body>
</html>