<?php include 'inc/header.php'; ?>

<?php
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST['body'])) {
        $bodyErr = "Body is required";
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
        $sql = "INSERT INTO  feedback (name,email,body) VALUES ('$name','$email','$body')";
        if (mysqli_query($conn, $sql)) {
            header('Location: feedback.php');
        } else {
            echo "Error: " . mysqli_errno($conn);
        }
    }
}
?>

<h2>Feedback</h2>
<?php echo isset($name) ? $name : ''; ?>
<p class="lead text-center">Leave feedback for Traversy Media</p>

<form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid name.
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid email.
        </div>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea name="body" class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>"></textarea>
        <div id="validationServerFeedback" class="invalid-feedback ">
            Please provide a valid feedback.
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>

<?php include 'inc/footer.php'; ?>