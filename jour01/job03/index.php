<?php
$str = "Contenu de la variable";
$int = 42;
$pi = 3.14;
$bool = true;

$varDic = [
    "str" => $str,
    "int" => $int,
    "pi" => $pi,
    "bool" => $bool,
]
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th> Type des variables</th>
                <th> Nom des variables </th>
                <th> Valeurs </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($varDic as $key => $value): ?>
                <tr>
                    <td><?php echo gettype($value); ?></td>
                    <td><?php echo $key; ?></td>
                    <td>
                        <?php if (is_bool($value)) {
                            echo $value ? "true" : "false";
                        } else {
                            echo htmlspecialchars((string) $value);
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>