<?php
$file = "Asasasas16323@gmaildsd.com";
if(is_dir($file)) {
  echo ("$file is a directory");
} else {
  echo ("$file is not a directory");
  mkdir($file);
}
?>