<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Test Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP is working!</h1>
        <p>Current time: <?php echo date('Y-m-d H:i:s'); ?></p>
        <h2>PHP Version Information:</h2>
        <p><?php echo 'PHP Version: ' . phpversion(); ?></p>
        
        <?php
        $testArray = ['Hello', 'World', '!!!'];
        echo '<p>Sample Array Output: ' . implode(' ', $testArray) . '</p>';
        ?>
    </div>
</body>
</html>