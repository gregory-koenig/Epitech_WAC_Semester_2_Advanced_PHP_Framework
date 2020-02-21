<?php

define('BASE_URI', str_replace('\\', '/', substr(__DIR__,
    strlen($_SERVER['DOCUMENT_ROOT']))));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);

require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

$app = new Core\Core();
$app->run();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Title</title>
    <link rel="stylesheet" href="<?= BASE_URL . '/webroot/css/reset.css'; ?>" />
    <link rel="stylesheet" href="<?= BASE_URL . '/webroot/css/style.css'; ?>" />
</head>
<body>

<fieldset>
    <legend>$_GET</legend>
    <pre>
        <?php print_r($_GET); ?>
    </pre>
</fieldset>

<fieldset>
    <legend>$_POST</legend>
    <pre>
        <?php print_r($_POST); ?>
    </pre>
</fieldset>

<fieldset>
    <legend>$_SERVER</legend>
    <pre>
        <?php print_r($_SERVER); ?>
    </pre>
</fieldset>

</body>
</html>