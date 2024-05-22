<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $howMuch = isset($_POST['howMuch']) ? $_POST['howMuch'] : '';
    $order = isset($_POST['order']) ? $_POST['order'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';

    $orderData = "Name: $name\nEmail: $email\nNumber: $number\nHow Much: $howMuch\nYou Order: $order\nAddress: $address\n\n";

    $file = fopen('orders.txt', 'a');
    if ($file) {
        
        fwrite($file, $orderData);
    
        fclose($file);
        echo "Данные успешно сохранены.";
    } else {
        echo "Ошибка при открытии файла для записи.";
    }
} else {
    echo "Данные не были отправлены методом POST.";
}

header("Location: index.html");
    exit;
?>
