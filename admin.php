<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<style>
        body{
            background-image: url(bg5.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 15cm;
        }
        a{
        text-decoration: none;
        color: black;
        font-size: 20px;
    }
        form{
            position: relative;
            left: 37%;
            border: 5px solid;
            width: 250px;
            height: 250px;
            border-radius: 30px;
            border-color: rgb(49, 38, 33);
            background-color: rgb(71, 57, 57);
            input{
                position: relative;
                top: 30px;
                left:30px;
                height: 30px;
                width: 200px;
                border-radius: 20px;
                background-color: inherit;
                color: aliceblue;
            }
            #a{
                border-radius:0px;
            }
            button{
                position: relative;
                top: 40px;
                left:70px;
                color:white;
                background-color:inherit;
                border-radius: 20px;
                height: 35px;
                width: 100px;
            }
        }
        .a{
                position: relative;
                top: 40px;
                left:40%;
                color:inherit;
                border-color: rgb(49, 38, 33);
                background-color: rgb(71, 57, 57);
                border-radius: 10px;
                font-size: 10px;
                
                height: 35px;
                width: 100px;
            }
        h1{
            text-align:center;
        }
    </style>
<h1>Add Products</h1>
<form method="POST">
    <input type="text" name="name" placeholder="Product Name" required><br><br>
    <input type="text" name="price" placeholder="Price" required><br><br>
    <input type="file" name="image" id="a" placeholder="Image URL" required><br><br>
    <button type="submit">Add Product</button>
</form>
<button class="a"><a href="shop.html">Shop</a></button>
<button class="a"><a href="logout.html">Logout</a></button>