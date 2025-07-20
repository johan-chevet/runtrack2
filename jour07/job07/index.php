<?php
var_dump($_POST);
?>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Job07</title>
    </head>
    <body>
        <form method="post">
            <label for="str">Str:</label>
            <input type="text" name="str" id="str">
            <label for="fonction">Transform to:</label>
            <select name="fonction" id="fonction">
                <option selected>gras</option>
                <option>cesar</option>
                <option>plateforme</option>
            </select>
            <button type="submit">submit</button>
        </form>
    </body>
</html>