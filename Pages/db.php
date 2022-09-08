<?php

require_once('db_credentials.php');

function db_connect() {
    try {
        $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $e) {
        echo "Could not connect to database";
        exit();
    }
    return $dbh;
}

function db_disconnect() {
    global $db;
    $db = null;
}

$db = db_connect();

function password_check($name, $password) {
    global $db;
    $password_correct = FALSE;

    $sql = "SELECT password FROM Users WHERE username = ?";
    $statement = $db->prepare($sql);
    $statement->execute([$name]);

    if ($statement) {
        foreach ($statement as $row) {
            $correct_password = $row["password"];
            $password_correct = $correct_password === crypt($password, $correct_password);
        }
    }

    return $password_correct;
}

function isAdmin($name) {
    global $db;
    $sql = "SELECT admin FROM Users WHERE username = ?";
    $statement = $db->prepare($sql);
    $statement->execute([$name]);

    if ($statement) {
        foreach ($statement as $row) {
            $admin = $row["admin"];
        }
    }
    return $admin;
}

function register($name, $password, $email) {
    global $db;
    $registered = FALSE;
    try {
        $sql = "INSERT INTO Users(username, password, email, admin) VALUES (?, ?, ?, ?)";
        $statement = $db->prepare($sql);
        $params = [ $name, crypt($password), $email, $registered ];
        $statement->execute($params);
        $registered = TRUE;
    } catch (PDOException $e) {
        echo "ERROR";
        var_dump($e);
    }
    return $registered;
}
?>