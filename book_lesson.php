<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $student_id = $_POST['student_id'];
  $instructor_id = $_POST['instructor_id'];
  $lesson_date = $_POST['lesson_date'];
  $lesson_time = $_POST['lesson_time'];

  $sql = "INSERT INTO lessons (student_id, instructor_id, lesson_date, lesson_time) VALUES ('$student_id', '$instructor_id', '$lesson_date', '$lesson_time')";

  if ($conn->query($sql) === TRUE) {
    echo "Lesson booked successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<form method="post">
  Student ID: <input type="text" name="student_id"><br>
  Instructor ID: <input type="text" name="instructor_id"><br>
  Lesson Date: <input type="date" name="lesson_date"><br>
  Lesson Time: <input type="time" name="lesson_time"><br>
  <input type="submit" value="Book Lesson">
</form>
