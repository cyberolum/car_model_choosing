<?php
include 'controlArr.php';
$select = $_GET['select'];

foreach ($models as $key => $modelss) {
  if($select == 'Audi' && $modelss['name'] == 'Audi' || $select == 'Lada' && $modelss['name'] == 'Lada' || $select == 'BMW' && $modelss['name'] == 'BMW' || $select == 'Mercedes' && $modelss['name'] == 'Mercedes'){
    foreach ($modelss['models'] as $key1 => $model) {
      echo "<pre>";
      echo $model;
      echo "</pre>";
    }
  }
}
?>
