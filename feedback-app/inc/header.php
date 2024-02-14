<?php include 'config/database.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Header</title>

</head>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .beautiful-header {
        background-color: #f1f1f1;
        padding: 20px 0;
        text-align: center;
    }

    .beautiful-header h1 {
        color: #333;
        font-size: 36px;
        margin-bottom: 20px;
    }

    .beautiful-header nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .beautiful-header nav ul li {
        display: inline-block;
        margin-right: 20px;
    }

    .beautiful-header nav ul li:last-child {
        margin-right: 0;
    }

    .beautiful-header nav ul li a {
        color: #333;
        text-decoration: none;
        font-size: 18px;
    }

    .beautiful-header nav ul li a:hover {
        color: #555;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .beautiful-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group textarea {
        height: 100px;
    }

    button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    .feedback-card {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .header {
        display: flex;
        align-items: center;
        padding: 15px;
    }

    .avatar img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .user-info {
        margin-left: 10px;
    }

    .user-info h3 {
        margin: 0;
        font-size: 18px;
    }

    .user-info p {
        margin: 0;
        font-size: 14px;
        color: #666;
    }

    .content {
        padding: 15px;
    }

    .footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-top: 1px solid #ddd;
    }

    .rating {
        color: #f90;
    }

    .footer a {
        text-decoration: none;
        color: #007bff;
    }
</style>

<body>
    <header class="beautiful-header">
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/feedback.php">FeedBack</a></li>
                <li><a href="/about.php">About</a></li>
            </ul>
        </nav>
    </header>