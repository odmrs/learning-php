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
        [
            'name' => 'Androids crazys',
            'auth' => 'Etc K. Dick',
            'purchaseUrl' => 'www.example.com',
            'date' => '05/02/2004'
        ],
        [
            'name' => 'Project Hail Mary',
            'auth' => 'somebody1',
            'purchaseUrl' => 'www.example1.com',
            'date' => '07/12/2004'
        ],
        [
            'name' => 'Andy Weir',
            'auth' => '2 Somebody',
            'purchaseUrl' => 'www.3example.com',
            'date' => '15/07/2004'
        ]
    ];
    ?>

    <h1>Recommended Books</h1>

    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li>{$book['name']} - {$book['date']}</li>";
        }
        ?>
    </ul>



    <!-- <h1> HomeWork</h1>

    <h2>Top Performing Users</h2>
    <ul>
        <?php
        $stopPerformingUsers = [
            "Marcos",
            "Bela",
            "Anna"
        ];

        // foreach ($stopPerformingUsers as $user){
        //     echo "<li>$user</li>";
        // }

        ?>
    </ul> -->
</body>

</html>