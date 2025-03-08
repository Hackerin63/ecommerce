<?php
include 'db.php';

header('Content-Type: application/json');

$result = $conn->query("SELECT * FROM products");

$products = [];

while ($row = $result->fetch_assoc()) {
    $products[] = [
        "id" => $row["id"],
        "name" => $row["name"],
        "price" => $row["price"],
        "image" => $row["image"]
    ];
}

echo json_encode($products);
?>