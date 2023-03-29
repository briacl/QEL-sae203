<?php
error_reporting(E_ERROR | E_PARSE); //pas de warning sur php 8.1
function format_date($date){
  return strftime("%H:%M %A %d %B %Y",strtotime($date));
}

function has_passed($date){
  if (defined('DEBUG_PASSED')) return DEBUG_PASSED;
  return new DateTime()>= new DateTime($date);
}
 ?>
