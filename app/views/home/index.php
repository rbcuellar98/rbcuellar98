<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of items</title>
</head>
<body>
    <h1>Item list</h1>
    <a href="/home/create">Add an item</a>
    <ul>
        <?php
            foreach($data['items'] as $item){
                echo"<li>$item->name</li>";
            }
        ?>
    </ul>
</body>
</html>
