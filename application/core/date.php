<?php
function format_date($date){
  return strftime("%H:%M %A %d %B %Y",strtotime($date));
}

function has_passed($date){
  if (defined('DEBUG_PASSED')) return DEBUG_PASSED;
  return new DateTime()>= new DateTime($date);
}
 ?>
