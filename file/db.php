<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo-list";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("كاين خطا في  تعؤيف اللاتصال بالبيانات". $conn->connect_error);
} else {
    echo" ";
}