<?php
include "functionsDB.php";
updateClass($_POST['class_id'], $_POST['class_number'], $_POST['class_leter'], $_POST['teacher_id']);
header("Location: website.php");
?>