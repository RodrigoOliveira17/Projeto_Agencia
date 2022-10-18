<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=db_formulario','root','');
    } catch (PDOException $e) {
        $e->getMessage();
    }  