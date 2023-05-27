<?php
// Return a date in a specified format

function setDateFormat(String $date_str, String $format) {
  $date=date_create($date_str);
  
  if ($format == 'YYYY-MM-DD') {
    return date_format($date,"Y-m-d");
  }
  
  elseif ($format == 'YYYY/MM/DD') {
    return date_format($date,"Y/m/d");
  }
  
  elseif ($format == 'DD-MM-YYY') {
    return date_format($date,"d-m-Y");
  }
  
  elseif ($format == 'DD/MM/YYY') {
    return date_format($date,"d/m/Y");
  }
  
  elseif ($format == 'MM-DD-YYY') {
    return date_format($date,"m-d-Y");
  }
  
  elseif ($format == 'MM/DD/YYY') {
    return date_format($date,"m/d/Y");
  }
  
  elseif ($format == 'Month Day Year') {
    return date_format($date,"F j, Y");
  }
  
  elseif ($format == 'Day Month Year') {
    return date_format($date,"j F Y");
  }
  
  else {
    return null;
  }
}
