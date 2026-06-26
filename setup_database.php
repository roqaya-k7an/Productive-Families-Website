<?php
/*
 |--------------------------------------------------------------------------
 | One-time database setup
 |--------------------------------------------------------------------------
 |
 | Visit this page ONCE in your browser after deploying online, e.g.:
 |     https://your-app.up.railway.app/setup_database.php
 |
 | It creates all the tables and inserts the sample data from profamily.sql.
 | After it says "Done", delete this file (or it is harmless to leave).
 |
 */

require __DIR__ . '/config.php';

$sqlFile = __DIR__ . '/profamily.sql';
if (!file_exists($sqlFile)) {
    die('profamily.sql not found next to this script.');
}

$sql = file_get_contents($sqlFile);

echo "<h2>Productive Families &mdash; Database Setup</h2>";

if (mysqli_multi_query($con, $sql)) {
    // flush all result sets
    do {
        if ($res = mysqli_store_result($con)) {
            mysqli_free_result($res);
        }
    } while (mysqli_more_results($con) && mysqli_next_result($con));

    if (mysqli_errno($con) === 0) {
        echo "<p style='color:green;font-weight:bold'>✅ Done! Tables created and sample data inserted.</p>";
        echo "<p>You can now open <a href='index.php'>the website</a>.</p>";
        echo "<p>Sample admin login &rarr; username: <b>admin</b> &nbsp; password: <b>123456</b></p>";
        echo "<p style='color:#888'>For tidiness you may delete this file (setup_database.php).</p>";
    } else {
        echo "<p style='color:orange'>Finished with a notice: " . htmlspecialchars(mysqli_error($con)) . "</p>";
    }
} else {
    echo "<p style='color:red'>❌ Error: " . htmlspecialchars(mysqli_error($con)) . "</p>";
}
?>
