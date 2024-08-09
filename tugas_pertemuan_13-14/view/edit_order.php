<!-- RETRIVE DATA FOR EDIT FORM -->
<?php
include('../controllers/koneksi.php'); 

// RETRIEVE ID
$id = intval($_GET['id']);

// NULL HANDLER FOR RESET
$row = [
    'id' => '',
    'name' => '',
    'phone' => '',
    'attendees' => '',
    'duration' => '',
    'food' => '',
    'hot_spring' => '',
    'paint_ball' => ''
];

// RETRIEVE DATA FROM DB
$sql = "SELECT id, name, phone, attendees, duration, food, hot_spring, paint_ball FROM order_wisata WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
$stmt->close();
$conn->close();
?>

<!-- DISPLAY DATA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/form.css">
    <title>Edit Order</title>
</head>
<body>
    <div class="form_container">
        <h2 class="mb-3">
            <a href="../view/index.php"><img src="../media/arrow_left.svg" width="35"></a>  FORM ORDER
        </h2>
        <form action="../controllers/data_order_proses.php" method="post" class="form_content needs-validation" novalidate>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <div class="row">
                <div class="col mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                    <div class="invalid-feedback">
                        Please provide your name.
                    </div>
                </div>
                <div class="col">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" required>
                    <div class="invalid-feedback">
                        Please provide your phone number.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="date" class="form-label">Order Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    <div class="invalid-feedback">
                        Please provide the order date.
                    </div>
                </div>
                <div class="col">
                    <label for="duration" class="form-label">Booking Duration</label>
                    <input type="number" min="1" class="form-control" id="duration" name="duration" value="<?php echo htmlspecialchars($row['duration']); ?>" placeholder="... day" required>
                    <div class="invalid-feedback">
                        Please provide the booking duration.
                    </div>
                </div>
            </div>

            <div class="form_additional_container">
                <h5>ADDITIONAL</h5>
                <div class="row">
                    <div class="col-2">
                        <label class="form-check-label" for="food">Food</label>
                        <br>
                        <label class="form-check-label" for="hot_spring">Hot Spring</label>
                        <br>
                        <label class="form-check-label" for="paint_ball">Paint Ball</label>
                    </div>
                    <div class="col-4">
                        <label class="form-check-label" for="food">Rp. 200,000 /person</label>
                        <br>
                        <label class="form-check-label" for="hot_spring">Rp. 35,000 /person</label>
                        <br>
                        <label class="form-check-label" for="paint_ball">Rp. 135,000 /person</label>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="food" name="food" <?php echo $row['food'] ? 'checked' : ''; ?>>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="hot_spring" name="hot_spring" <?php echo $row['hot_spring'] ? 'checked' : ''; ?>>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="paint_ball" name="paint_ball" <?php echo $row['paint_ball'] ? 'checked' : ''; ?>>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <label for="attendees" class="form-label">Attendees</label>
                    <input type="number" min="1" class="form-control" id="attendees" name="attendees" value="<?php echo htmlspecialchars($row['attendees']); ?>" placeholder="... person" required>
                    <div class="invalid-feedback">
                        Please provide the number of attendees.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cost" class="form-label">Package Cost</label>
                    <input type="text" class="form-control" id="cost" name="cost" readonly>
                </div>
                <div class="mb-5">
                    <label for="bill" class="form-label">Total Bill</label>
                    <input type="text" class="form-control" id="bill" name="bill" readonly>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="">
                    <button class="btn btn-submit" type="submit" id="book" name="update">UPDATE</button>
                </div>
                <div class="">
                    <button class="btn btn-button" type="button" id="count" name="count">COUNT</button>
                    <button class="btn btn-warning" type="reset" id="reset" name="reset">RESET</button>
                </div>
            </div>
        </form>
    </div>

    <script>
    // HANDLE FORM VALIDATION
    document.addEventListener('DOMContentLoaded', function() {
        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });

        // HANDLE COST, BILL, SELECTED PACKAGES,PRICE FOR COUNT BUTTON
        document.getElementById("count").addEventListener("click", () => {
            const costField = document.getElementById("cost");
            const billField = document.getElementById("bill");
            const attendeesField = document.getElementById("attendees");
            const durationField = document.getElementById("duration");
            const hotSpringCheckbox = document.getElementById("hot_spring");
            const paintBallCheckbox = document.getElementById("paint_ball");

            // UPDATE FORM FIELD UPDATE (DISABLE FIELD) BASED ON SELECTED PACKAGES
            const packagePrice = parseInt(localStorage.getItem("selectedPackagePrice")) || 0;
            const selectedPackage = localStorage.getItem("selectedPackage") || "";

            const updateFormState = () => {
                if (selectedPackage === "HOT SPRING") {
                    durationField.disabled = true;
                    hotSpringCheckbox.disabled = true;
                    paintBallCheckbox.disabled = false;
                    paintBallCheckbox.checked = false;
                } else if (selectedPackage === "PAINT BALL") {
                    durationField.disabled = true;
                    hotSpringCheckbox.disabled = false;
                    hotSpringCheckbox.checked = false;
                    paintBallCheckbox.disabled = true;
                } else {
                    durationField.disabled = false;
                    hotSpringCheckbox.disabled = false;
                    paintBallCheckbox.disabled = false;
                }
            };

            updateFormState();

            // COST CALCULATE
            const calculateCost = () => {
                let additionalCost = 0;
                const foodPrice = 200000;
                const hotSpringPrice = 35000;
                const paintBallPrice = 135000;

                if (document.getElementById("food").checked) {
                    additionalCost += foodPrice;
                }
                if (hotSpringCheckbox.checked && selectedPackage !== "HOT SPRING") {
                    additionalCost += hotSpringPrice;
                }
                if (paintBallCheckbox.checked && selectedPackage !== "PAINT BALL") {
                    additionalCost += paintBallPrice;
                }

                const totalCost = packagePrice + additionalCost;
                costField.value = `Rp. ${totalCost.toLocaleString()}`;
            };

            // BILL CALCULATE
            const calculateBill = () => {
                const cost = parseInt(costField.value.replace(/[^0-9]/g, ""));
                const attendees = parseInt(attendeesField.value) || 0;
                const duration = parseInt(durationField.value) || 0;

                if (cost && attendees && duration) {
                    const bill = cost * duration * attendees;
                    billField.value = `Rp. ${bill.toLocaleString()}`;
                }
            };

            // INITIAL CALCULATE
            calculateCost();
            calculateBill();
        });
    });
    </script>
    <script src="../js/data_order.js"></script>
</body>
</html>
