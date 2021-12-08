<?php
require_once( 'exec.php' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="./scripts/core.js" defer></script>
</head>
<body>
        <form action="./exec.php" method="post" id="shell-form">
                <input type="text" name="command" id="command-param">
                <input type="submit" value="Execute">
        </form>
        <div class="output">

        </div>
</body>
</html>