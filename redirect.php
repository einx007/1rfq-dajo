<?php
// Define the original link
$originalLink = "https://lovesolvingastrologer.com/n/?c3Y9bzM2NV8xX25vbSZyYW5kPVpYcHROVU09JnVpZD1VU0VSMDQxMjIwMjRVNDYxMjA0NDU=N0123N";

// Redirecting to the original link after a 1-second delay
header("Refresh: 1; URL=$originalLink");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <script>
        // Redirect immediately to the original link for JavaScript-enabled browsers
        window.location.href = "<?php echo $originalLink; ?>";
    </script>
</head>
<body>
    <h1>Redirecting you to the original link...</h1>
    <p>If you are not redirected automatically, <a href="<?php echo $originalLink; ?>">click here</a>.</p>
</body>
</html>
