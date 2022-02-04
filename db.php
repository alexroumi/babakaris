<html>
<?php
$page_title = "Σχεδιασμός και Ανάπτυξη Διαδικτυακών Εφαρμογών - 2021-2022 - ΓΠΛ1";
include("utils.php");
include("header.php");
?>

<body onbeforeunload="fnUnloadHandler()">

    <?php
    $db = new SQLite3('db/users.db');
    $db->exec("CREATE TABLE IF NOT EXISTS live_users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ip VARCHAR(27) NOT NULL
);");
    $db->exec("INSERT INTO live_users (ip) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "');");
    if ($_POST['type'] == 'unload') {
        $db->exec("DELETE FROM live_users WHERE ip = '" . $_POST['ip'] . "';");
    }

    $res = $db->query('SELECT * FROM live_users');
    while ($row = $res->fetchArray()) {
        echo "{$row['id']} {$row['ip']} <br />";
    }

    $db->close();
    ?>
</body>

</html>