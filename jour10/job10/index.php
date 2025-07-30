<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
if ($mysqli->connect_errno) {
    printf("Db connection error: ", $mysqli->connect_error);
    exit(1);
}
try {
    $query = $mysqli->query("select * from salles order by capacite asc");
} catch (mysqli_sql_exception $e) {
    echo "query error: " . $e->getMessage();
    die();
}
$fields = $query->fetch_fields();
$rows = $query->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>job08</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php foreach ($fields as $field): ?>
                    <th>
                        <?= $field->name ?>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <?php foreach ($row as $data): ?>
                        <td>
                            <?= $data ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>