<?php include 'inc/header.php' ?>
<?php
$feedbacks = array(
    array(
        "id" => 1,
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "body" => "This product is amazing! I love its features and ease of use.",
    ),
    array(
        "id" => 2,
        "name" => "Jane Smith",
        "email" => "janesmith@example.com",
        "body" => "The product is good, but it could be improved with a few additional features.",
    ),
    array(
        "id" => 3,
        "name" => "Mike Jones",
        "email" => "mikejones@example.com",
        "body" => "I'm not satisfied with the product. It's not user-friendly and has several bugs.",
    ),
);
?>

<div class="feedback-card">
    <div class="header">
        <div class="user-info">
            <h3>John Doe</h3>
            <p>johndoe@example.com</p>
        </div>
    </div>
    <div class="content">
        <p>This product is amazing! I love its features and ease of use. Highly recommended!</p>
    </div>
</div>