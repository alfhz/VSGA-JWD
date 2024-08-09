<!-- EVENT ON FORM ORDER -->
<?php
include("koneksi.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$duration = $_POST['duration'];
$attendees = $_POST['attendees'];
$food = isset($_POST['food']) ? 1 : 0;
$hot_spring = isset($_POST['hot_spring']) ? 1 : 0;
$paint_ball = isset($_POST['paint_ball']) ? 1 : 0;
$cost = preg_replace('/[^0-9]/', '', $_POST['cost']);
$bill = preg_replace('/[^0-9]/', '', $_POST['bill']);

//CREATE ORDER
$sql = "INSERT INTO order_wisata(name, phone, date, duration, attendees, food, hot_spring, paint_ball, cost, bill)
VALUES ('$name', '$phone', '$date', '$duration', '$attendees', '$food', '$hot_spring', '$paint_ball', '$cost', '$bill')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Order placed successfully'); window.location.href='../view/index.php';</script>";
} else {
    echo "<script>alert('Error: " . $conn->error . "'); window.location.href='../view/index.php';</script>";
}

$conn->close();
?>
