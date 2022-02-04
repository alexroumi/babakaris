<?php
    if (!file_exists("users.db")) {
        $db_file = fopen("users.db", "w");
        fclose($db_file);
    }
    $db = new SQLite3('users.db');
    $db->exec("CREATE TABLE IF NOT EXISTS live_users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ip VARCHAR(27) NOT NULL
);");
    switch ($_POST['type']) {
        case 'register':
            $db->exec("INSERT INTO live_users (ip) VALUES ('" . $_POST['ip'] . "');");
            break;
        case 'unload':
            $db->exec("DELETE FROM live_users WHERE ip = '" . $_POST['ip'] . "';");
            break;
    }


    $res = $db->query('SELECT * FROM live_users');
    while ($row = $res->fetchArray()) {
        echo "{$row['id']} {$row['ip']} <br />";
    }

    $db->close();
    ?>