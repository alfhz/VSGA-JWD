<!-- EVENT ON TABLE ORDER LIST -->
<?php
include('koneksi.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update'])) {
        // UPDATE ORDER
        $id = intval($_POST['id']);
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $attendees = intval($_POST['attendees']);
        $duration = $_POST['duration'];
        $food = isset($_POST['food']) ? 1 : 0;
        $hot_spring = isset($_POST['hot_spring']) ? 1 : 0;
        $paint_ball = isset($_POST['paint_ball']) ? 1 : 0;
        $cost = preg_replace('/[^0-9]/', '', $_POST['cost']);
        $bill = preg_replace('/[^0-9]/', '', $_POST['bill']);

        $sql = "UPDATE order_wisata SET name = ?, phone = ?, attendees = ?, duration = ?, food = ?, hot_spring = ?, paint_ball = ?, cost = ?, bill = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssiiiisisi', $name, $phone, $attendees, $duration, $food, $hot_spring, $paint_ball, $cost, $bill, $id);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Order updated successfully']);
            echo "<script>alert('Order updated successfully'); window.location.href='../view/index.php?page=yourpackages';</script>";
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to update order']);
            echo "<script>alert('Failed to update order'); window.location.href='../view/index.php?page=yourpackages';</script>";
        }

        $stmt->close();
    } elseif (isset($_POST['delete'])) {
        // DELETE ORDER
        $id = intval($_POST['id']);

        $sql = "DELETE FROM order_wisata WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Order deleted successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete order']);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request']);
    }

    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
