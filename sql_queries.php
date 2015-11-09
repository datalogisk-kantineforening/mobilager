<?php

function UPDATE_ROW($id, $varenavn, $beholdning, $bemaerkning, $medlem , $sql_forbindelse, $tabel){
  
  global $conn;

  $timequery = $conn->query("SELECT transaction_timestamp()");
  $result = $conn->query($timequery);
  $row = $result->fetch_assoc();
  $timestamp = $row[0];

  $query = "UPDATE varer SET dato_til = {$timestamp} WHERE id = {$id}";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();

  $query = "INSERT INTO varer (varenavn, beholdning, bemaerkning, medlem, id, fra_dato, til_dato) " .
          "VALUES ({$varenavn} , {$beholdning} , {$bemaerkning} , {$medlem}, {$id} , NULL)";

  $result = $conn->query($query);

  }

?>
