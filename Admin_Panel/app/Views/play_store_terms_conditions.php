<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width'>
        <title>Terms Conditions</title>
        <style> body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; padding:1em; } </style>
    </head>
    <body>
        <?php
        if ($setting) {
            foreach ($setting as $value) {
                echo $value->message;
            }
        }
        ?>
    </body>
</html>
