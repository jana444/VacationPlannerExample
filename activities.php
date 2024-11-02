<?php
$activities = [];
require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';

$pdo = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_activity'])) {
        add_activity();
    } elseif (isset($_POST['delete_activity'])) {
        delete_activity();
    }
    get_activities();
} else {
    get_activities();
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div id="bckgdimg">
        <?php include 'head.php'; ?>
        <header class="hold">
            <img class="slides slides-hidden" id="header1" src="images/1.jpg" alt="1">
            <img class="slides slides-hidden" id="header2" src="images/2.jpg" alt="2">
            <img class="slides slides-hidden" id="header3" src="images/3.jpg" alt="3">
            <img class="slides slides-hidden" id="header4" src="images/4.jpg" alt="4">
            <div class="centered">
                <h1 id="webtitle">Activities</h1>
            </div>
        </header>
        <div class="leather">
            <nav>
                <ul>
                    <li class="home"><a href="index.html">Home</a></li>
                    <li class="accomm"><a href="accommodation.php">Accommodation</a></li>
                    <li class="activ">Activities</li>
                </ul>
            </nav>
            <main class="activities">
                <p id="activPara">Add new activities and look up point of interest in a map</p>
                <div id="container">
                    <h5>Bucket List</h5>

                    <?php
                    addActivitiesForm();
                    displayActivities();
                    ?>
                </div>
                <input id="searchInput" class="controls" type="text" placeholder="Search Box">
                <div id="map"></div>
                <footer style="grid-column:1/3">Jana Krizanova CPSC2030 Project</footer>
            </main>
        </div>
    </div>
</body>

</html>