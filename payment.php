<?php
include 'config.php';

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
  $student_id = $_POST['student_id'];
  $payment_date = $_POST['payment_date'];
  $amount = $_POST['amount'];

  $sql = "INSERT INTO payments (student_id, payment_date, amount) VALUES ('$student_id', '$payment_date', '$amount')";

  if ($conn->query($sql) === TRUE) {
    echo "Payment made successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<form method="post">
  Student ID: <input type="text" name="student_id"><br>
  Payment Date: <input type="date" name="payment_date"><br>
  Amount: <input type="number" name="amount"><br>
  <input type="submit" value="Make Payment">
</form>
