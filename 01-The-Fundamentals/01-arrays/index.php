<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?= 
        $books = [
            "Androids crazys",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        }
        ?>
    </ul>

    <h1> HomeWork</h1>

    <h2>Top Performing Users</h2>
    <ul>
        <?php
            $stopPerformingUsers = [
                "Marcos",
                "Bela",
                "Anna"
            ];

            foreach ($stopPerformingUsers as $user){
                echo "<li>$user</li>";
            }
        ?>
    </ul>
</body>
</html>