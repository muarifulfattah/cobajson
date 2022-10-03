<?php
// ambil data json
$data = file_get_contents("data.json");

// Ubah tipe konten ke json
header('Content-Type: application/json; charset=utf-8');

print_r($data);
