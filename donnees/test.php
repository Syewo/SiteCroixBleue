<?php

    $pdo = new PDO('sqlite:donnees.db');

    $statement = $pdo->query("SELECT * FROM identifiants");

    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    var_dump($rows);