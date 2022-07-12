<?php

require __DIR__ . "/../db/db_disk.php";

header("Content_Type: application/json");

echo json_encode([
    "pagina" => 1,
    "tot_pagine" => 1,
    "dati" => $db_disks
  ]);
?>