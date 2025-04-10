<?php
$link=false;
function openDB()
{
    global $link;
    $link=mysqli_connect("localhost", "root", "", "school");
    mysqli_query($link, "SET NAMES UTF8");
}
function closeDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM classes");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function getClassByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM classes WHERE class_id=$id");
    closeDB();
    return mysqli_fetch_assoc($res);
}
function updateClass($class_id, $class_number, $class_leter, $teacher_id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "UPDATE classes SET class_number=$class_number, class_leter='$class_leter', teacher_id=$teacher_id WHERE class_id=$class_id");
    closeDB();
    return $res;
}
function getTeachers()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM teachers");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
?>