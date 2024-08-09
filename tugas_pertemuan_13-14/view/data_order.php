<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/data_order.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Your Packages</title>
</head>
<body>
    <div class="container data_container">
        <h1 class="mb-2 text-center">ORDER LIST</h1>
        <div class="table-container">
            <table class="table table-sm table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col" rowspan="2">NO</th>
                        <th scope="col" rowspan="2">NAME</th>
                        <th scope="col" rowspan="2">PHONE</th>
                        <th scope="col" rowspan="2">ATTENDEES</th>
                        <th scope="col" rowspan="2">DURATION</th>
                        <th scope="col" colspan="3">ADDITIONAL</th>
                        <th scope="col" rowspan="2">COST</th>
                        <th scope="col" rowspan="2">BILL</th>
                        <th scope="col" colspan="2" rowspan="2">ACTION</th>  
                    </tr>
                    <tr>
                        <th scope="col">FOOD</th>
                        <th scope="col">HOT SPRING</th>
                        <th scope="col">PAINT BALL</th>  
                    </tr>
                </thead>
                <tbody>
                    <!-- RETRIEVE DATA FORM DB, DESC AND DISPLAY TABLE -->
                    <?php
                    include('../controllers/koneksi.php'); 

                    $sql = "SELECT id, name, phone, attendees, duration, food, hot_spring, paint_ball, cost, bill FROM order_wisata ORDER BY id DESC";
                    $result = $conn->query($sql);
                        
                    $conn->close();
                    if ($result->num_rows > 0) {
                        $no = 1; 
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $no++ . "</th>";
                            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['attendees']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['duration']) . "</td>";
                            echo "<td>" . ($row['food'] ? 'Yes' : 'No') . "</td>";
                            echo "<td>" . ($row['hot_spring'] ? 'Yes' : 'No') . "</td>";
                            echo "<td>" . ($row['paint_ball'] ? 'Yes' : 'No') . "</td>";
                            echo "<td>Rp. " . number_format($row['cost'], 0, ',', '.') . "</td>";
                            echo "<td>Rp. " . number_format($row['bill'], 0, ',', '.') . "</td>";
                            echo "<td><button type='button' class='btn btn-warning' data-id='" . $row['id'] . "'>Edit</button></td>";
                            echo "<td><button type='button' class='btn btn-danger' data-id='" . $row['id'] . "'>Remove</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='12' class='text-center'>No orders found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/data_order.js"></script>
</body>
</html>
