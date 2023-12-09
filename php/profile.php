<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $contact = $_POST["contact"];

    // Validate the input (you should add more validation)
    if (empty($age) || empty($dob) || empty($contact)) {
        echo json_encode(["status" => "error", "message" => "Age, Date of Birth, and Contact are required"]);
        exit;
    }

    // Perform profile update (replace this with your actual update logic)
    // Example: Update user profile in a database
    // Example: $pdo->prepare("UPDATE profiles SET age=?, dob=?, contact=? WHERE user_id=?")->execute([$age, $dob, $contact, $userId]);

    echo json_encode(["status" => "success", "message" => "Profile updated successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
