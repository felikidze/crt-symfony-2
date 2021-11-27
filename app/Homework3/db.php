<?php
$host = getenv('DB_CONTAINER');
$port = getenv('DB_PORT');
$db = getenv('POSTGRES_DB');
$username = getenv('POSTGRES_USER');
$password = getenv('POSTGRES_PASSWORD');

# Создаем соединение с базой PostgreSQL с указанными выше параметрами
$dbconn = pg_connect("host=$host port=$port dbname=$db user=$username password=$password");

if (!$dbconn) {
    die('Could not connect');
} else {
    echo("Success connection");
}
$arrOfQuery = [
            "SELECT * FROM animal_classes;",
            "SELECT * FROM animals;",
            "SELECT * FROM cities;",
            "SELECT * FROM countries;"
        ];

foreach ($arrOfQuery as $el) {
    $res = pg_query($dbconn, $el);
    while ($row = pg_fetch_row($res)) {
        echo "<br/>";
        for ($i = 0; $i < count($row); $i++) {
            echo pg_field_name($res, $i) . "\t" . $row[$i] . "<br/>";
        }
    }
    echo "<br/><----------------------><br/>";
}