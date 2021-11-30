<?php

   define("DB_SERVER", "localhost");
   define("DB_USER", "root");
   define("DB_PASSWORD", "");
   define("DB_NAME", "margalapis");

   $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
   if($mysqli->connect_error) {
      echo "Atsiprašome, svetainė susidūrė su keblumais, prisijungti nepavyko.\n";
      echo 'Klaida: ' . $mysqli->connect_error . '\n';
      exit();
   }
