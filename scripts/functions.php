<?php
function isNullOrEmptyString($str){
  return (!isset($str) || trim($str) === '');
}

/**
 * Accepts a $project parameter to display a link where the url may be different than the name.
 * 
 * The $project parameter could be a pipe-delimited string eg: "TUTU Garden|tutu" where the first 
 * part is the $project_name and the last part is $project_url.  Or a plain string eg: "HOK" 
 * in which case the $project_name and $project_url would be the same.
 * 
 * The $project_url is converted to lowercase and appended with ".php" to form a valid url.
 */
function getProjectLink($linkText, $project) {
  if (!isNullOrEmptyString($project)) {
    $project_parts = explode('|', $project, 2);
    $project_name = $project_parts[0];
    $project_url = (count($project_parts) > 1) ? $project_parts[1] : $project_name;
    echo '<li><header>' . $linkText . '</header><a href="' . strtolower($project_url) . '.php">' . $project_name . '</a></li>';
  }
}
?>
