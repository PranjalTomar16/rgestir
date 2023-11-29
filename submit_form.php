<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $dob = test_input($_POST["dob"]);
    $grade = test_input($_POST["grade"]);
    $contact = test_input($_POST["contact"]);

    // You can customize the format of the message sent to you
    $message = "New Registration:\n\nName: $name\nDate of Birth: $dob\nGrade: $grade\nContact: $contact";

    // Replace 'your-email@example.com' with your actual email address
    $to = "pranjaltomare@gmail.com";
    $subject = "New School Registration";

    // Send the email
    mail($to, $subject, $message);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
