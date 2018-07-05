<?php
if($res)
{
  echo '<table class="user-data">';
  echo '<thead>';
    echo '<tr>'. 
    '<td> ID </td>'. 
    '<td> Фамилия </td>'. 
    '<td> Имя </td>'. 
    '<td> Отчество </td>'.
    '<td> ID действия </td>'.
    '<td> Название действия</td>'.
    '<td> Дата/время действия </td>'.    
    '</tr>';
  echo '</thead>';
  echo '<tbody>';
  foreach ($res as $r){
    echo '<tr>'. 
    '<td>'. $r["id"] .'</td>'.
    '<td>'. $r["last_name"] .'</td>'. 
    '<td>'. $r["name"] .'</td>'. 
    '<td>'.$r["patronymic"] .'</td>'. 
    '<td>'. $r["id_case"] .'</td>'.
    '<td>'. $r["name_case"].'</td>'.
    '<td>'. $r["time_case"] .'</td>'.    
    '</tr>'; }
  echo '</tbody>';
  echo '</table>';
  echo '<p class="center">Всего действий: '. $res_count.'</p>';
  echo '<p class="main-article"><a href="http://'.$_SERVER['SERVER_NAME'].'">назад к списку</a></p>';
} else 
    {
  $res = 'по действию '.'<b>'. $case .'</b>'. ' нет данных или еще не было совершено пользователем';
  echo '<p class="center">'.$res.'</p>';
  echo '<p class="center main-article"><a href="http://'.$_SERVER['SERVER_NAME'].'">назад к списку</a></p>';
    }
?>