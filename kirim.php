<?php
require_once("config.php");

$id_user = $_POST['id_user'];
$timeline = $_POST['timeline'];

// var_dump($timeline);
// die;
$query = "INSERT INTO `timeline` (`id_timeline`, `id_user`, `isi_timeline`) VALUES (NULL, :id_user, :timeline)";
$execute = $db->prepare($query);

$params = array(
  ":id_user" => $id_user,
  ":timeline" => $timeline
);

$save = $execute->execute($params);

if ($save) {
  header("location:timeline.php");
}else {
  echo "gagal terkirim";
}
?>
