<?php include './config/database.php' ?>
<?php include './config/cors.php' ?>
<?php
echo "connected";
header('Access-Control-Allow-Origin: http://localhost:5173');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($name) || empty($email) || empty($body)) {
        echo json_encode(['message' => "Please fill all the fields"]);
    } else {
        $sql = "INSERT INTO feedback (name,email,body) VALUES ($name,$email,$body)";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(['message' => "Feedback created successfully"]);
        } else {
            echo json_encode(['message' => 'Something went wrong'] . mysqli_errno($conn));
        }
    }
}
