<?php include 'inc/header.php'; ?>
<div class="container">
    <h2>Feedback Form</h2>
    <form class="beautiful-form">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" placeholder="Enter your feedback" required></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
</div>
</body>

</html>