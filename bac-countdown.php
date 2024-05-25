<!DOCTYPE html>
<html>
<head>
    <title>Time Left Until June 10, 2024</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 24px;
            margin-bottom: 10px;
        }
    </style>
    <meta http-equiv="refresh" content="1">
</head>
<body>
    <h1>Time Left Until BAC 2024</h1>
    <?php
    $targetDate = new DateTime('2024-06-10 00:00:00');
    $currentDate = new DateTime();

    $interval = $targetDate->diff($currentDate);

    $months = $interval->m;
    $days = $interval->d;
    $hours = $interval->h;
    $minutes = $interval->i;
    $seconds = $interval->s;

    echo "<p>$months months, $days days, $hours hours, $minutes minutes, $seconds seconds</p>";
    ?>
</body>
</html>