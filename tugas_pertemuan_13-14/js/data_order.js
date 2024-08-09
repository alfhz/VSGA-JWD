// HANDLE RETRIVE AND DISPLAY ORDER DATA ON ORDER LIST TABLE
document.querySelectorAll(".nav-link").forEach(function (link) {
  link.addEventListener("click", function (event) {
    var section = this.getAttribute("data-section");

    if (section !== "yourpackages") {
      event.preventDefault();
      window.location.href = "index.php?section=" + section;
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // HANDLE EDIT BUTTON
  document.querySelectorAll(".btn-warning").forEach((button) => {
    button.addEventListener("click", function () {
      const itemId = this.getAttribute("data-id");
      window.location.href = `edit_order.php?id=${itemId}`;
    });
  });

  // HANDLE DELETE BUTTON
  document.querySelectorAll(".btn-danger").forEach((button) => {
    button.addEventListener("click", function () {
      const itemId = this.getAttribute("data-id");
      if (confirm("Are you sure you want to remove this order?")) {
        fetch("../controllers/data_order_proses.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            delete: true,
            id: itemId,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              alert(data.message);
              location.reload(); 
            } else {
              alert(data.message);
            }
          });
      }
    });
  });

  // HANDLE COST, BILL, SELECTED PACKAGES,PRICE
  const costField = document.getElementById("cost");
  const billField = document.getElementById("bill");
  const attendeesField = document.getElementById("attendees");
  const durationField = document.getElementById("duration");
  const hotSpringCheckbox = document.getElementById("hot_spring");
  const paintBallCheckbox = document.getElementById("paint_ball");

    // UPDATE FORM FIELD UPDATE (DISABLE FIELD) BASED ON SELECTED PACKAGES
  const packagePrice =
    parseInt(localStorage.getItem("selectedPackagePrice")) || 0;
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

  // HANDLE COUNT BUTTON
  document.getElementById("count").addEventListener("click", () => {
    calculateCost();
    calculateBill();
  });

  // INITIAL CALCULATED
  calculateCost();
  calculateBill();
});
