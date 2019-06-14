<?php
  function getProjectLink($project) {
    $project_parts = explode("|", $project, 2);
    $project_name = $project_parts[0];
    $project_url = (count($project_parts) > 1) ? $project_parts[1] : $project_name;
    echo '<a href="' . $project_url . '.php">' . $project_name . '</a>';
  }
  $prev_project_name = "";
  $prev_project
?>
<nav class="next-prev-project">
  <li>
    <header>Previous</header>
    <?php getProjectLink($prev_project); ?>
  </li>
  <li>
    <header>Next</header>
    <?php getProjectLink($next_project); ?>
  </li>
</nav>