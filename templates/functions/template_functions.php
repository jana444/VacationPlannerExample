<?php
function addActivitiesForm(){
    echo '<form action="activities.php" method="post">
            <input type="text" id="formInput" placeholder="Add a new activity" name="activity" required>
            <button type="submit" name="add_activity">+</button>
          </form>';
}

function displayActivities(){
  global $activities;
    foreach ($activities as $row) {
        echo '<form action="activities.php" method="post">
                <ul>
                  <li style="font-size: 1rem; display:inline-block;">' . htmlspecialchars($row['activity']) . '</li>
                  <input type="hidden" name="activity_id" value="' . htmlspecialchars($row['id']) . '">
                  <button type="submit" name="delete_activity">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </ul>
              </form>';
    }
}
