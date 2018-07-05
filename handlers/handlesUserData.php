<?php
$host = $_SERVER['SERVER_NAME'];
function clean_date($value)
{
    $value = trim($value); // убираем пробелы
    $value = stripslashes($value); //удаление экранированных символов
    $value = strip_tags($value); // удаление html и php тегов
    $value = htmlspecialchars($value); //спецсимволы в html сущности
    return $value;
}
if ((!empty($_GET['u_id']) && !empty($_GET['u_case'])))
{
$id = clean_date($_GET['u_id']);
$case = clean_date($_GET['u_case']);
switch ($case){
  case "enter": 
  $case = 'вход';
  break;
  case "view": 
  $case = 'просмотр';
  break;
  case "edit": 
  $case = 'редактирование';
  break;
  case "publication": 
  $case = 'публикация';
  break;
  case "exit": 
  $case = 'выход';
  break;
  default:
  header("Location: http://{$host}/");
  exit();
}
$res = $pdo->query("SELECT users.id, users.name, users.last_name, users.patronymic, users.gender, users.birthday, useCase.id as id_case, useCase.name_case, useCase.time_case FROM users
INNER JOIN useCase ON users.id = useCase.id_u WHERE useCase.id_u='$id' AND useCase.name_case='$case'");
$res = $res->FETCHALL(PDO::FETCH_ASSOC);
$res_count = $pdo->query("SELECT COUNT(useCase.name_case) FROM useCase WHERE useCase.id_u='$id' AND useCase.name_case='$case'");
$res_count = $res_count->FETCH(PDO::FETCH_ASSOC);
$res_count = $res_count["COUNT(useCase.name_case)"];
} 
  if(!empty($_GET['u_id']) && empty($_GET['u_case'])) 
  {
  $id = clean_date($_GET['u_id']);
  $res = $pdo->query("SELECT users.id, users.name, users.last_name, users.patronymic, users.gender, users.birthday, useCase.id as id_case, useCase.name_case, useCase.time_case FROM users
  INNER JOIN useCase ON users.id = useCase.id_u WHERE useCase.id_u='$id'");
  $res = $res->FETCHALL(PDO::FETCH_ASSOC);
  $res_count = $pdo->query("SELECT COUNT(useCase.name_case) FROM useCase WHERE useCase.id_u='$id'");
  $res_count = $res_count->FETCH(PDO::FETCH_ASSOC);
  $res_count = $res_count["COUNT(useCase.name_case)"];
  }