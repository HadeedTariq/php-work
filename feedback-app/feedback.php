<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Past Feedback</h2>
<?php if (empty($feedbacks)) : ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedbacks as $feedback) : ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <div class="text-secondary mt-2">
                <?php echo $feedback['body'] . "<br>" . "By" . '<h4>' . $feedback['name'] . '</h4>' . '<strong>' . "On " . date('d-m-Y', strtotime($feedback['date'])) . '</strong>'; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>