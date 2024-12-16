<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5a Q2</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
        $students = [
            [
            "name" => 'Nadhirah',
            "program" => 'BIM',
            "age" => 21
            ],
            [
            "name" => 'Syakirah',
            "program" => 'BIW',
            "age" => 22
            ],
            [
            "name" => 'Nabilah',
            "program" => 'BIP',
            "age" => 23
            ]
        ];

        foreach ($students as $name => $details) {
            echo "<tr>";
            echo "<td>{$details['name']}</td>";
            echo "<td>{$details['program']}</td>";
            echo "<td>{$details['age']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
