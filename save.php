
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $semester = $_POST["semester"];
    $college = $_POST["college"];
    $address = $_POST["address"];

    $entry = "Name: $name | DOB: $dob | Semester: $semester | College: $college | Address: $address\n";

    file_put_contents("users.txt", $entry, FILE_APPEND);
    echo "<h2>Registration Successful!</h2>";
    echo "<p><a href='index.html'>Return to Home</a></p>";
} else {
    echo "Invalid request.";
}
?>
