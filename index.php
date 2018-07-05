<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Test-Task</title>
</head>
<body>
<div class="container wrapper">
  <div class="row">
    <header class="col-lg-12 col-md-12 col-sm-12">
      <h3 class="center">Тестовое задание<h3>
    </header>
  </div>
  <div class="row">
    <main class="col-lg-12 col-md-12 col-sm-12">
   
    </main>
  </div>
</div>
<div class="container">
  <div class="row">
    <footer class="col-lg-12 col-md-12 col-sm-12">
      <p class="center">&copy; 2018</p>
    </footer>
  </div>
</div>
<script>
  $("document").ready(function(){
    $.ajax({
      url:'handlers/handlesUser.php',
      type:'POST',
      success: function(resp){
        var data = $.parseJSON(resp);
          $.each(data, function(i, item){
            $("main").append('<div style="margin:0 auto;border-bottom:2px solid grey;" class="col-lg-6 col-md-6 col-sm-6"><h4>' + item.last_name + " " + item.name + " " + item.patronymic + " [" + item.id +"] " + '</h4>' +
            '<p class="main-article">'+'<a  href="/usecase.php?u_id='+item.id+'&u_case=enter">'+'Вход</a>'+ "</p>"+
            '<p class="main-article">'+'<a  href="/usecase.php?u_id='+item.id+'&u_case=view">'+'Просмотр</a>'+ "</p>"+
            '<p class="main-article">'+'<a  href="/usecase.php?u_id='+item.id+'&u_case=edit">'+'Редактирование</a>'+ "</p>"+
            '<p class="main-article">'+'<a  href="/usecase.php?u_id='+item.id+'&u_case=publication">'+'Публикация</a>'+ "</p>"+
            '<p class="main-article">'+'<a  href="/usecase.php?u_id='+item.id+'&u_case=exit">'+'Выход</a>'+ "</p>"+
            '<p class="main-article-all">'+'<a  href="/usecase.php?u_id='+item.id+'">'+'<b>Вcе дейчтвия пользователя</b></a>'+ "</p>" + "</div>"
            );
          });
      }
    });
  });
</script>
</body>
</html>