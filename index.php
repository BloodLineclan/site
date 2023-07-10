<!DOCTYPE html>
<html>
<head>
  <title>Мой сайт</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <img class="header-image" src="BloodLine.png" alt="Заголовок">

    <div class="buttons">
      <a href="your-clan-link" class="button">Вступить в клан</a>
      <button onclick="toggleForm()" class="button">Подать заявку на союз</button>
    </div>

    <div id="form-container" class="form-container">
      <form action="submit.php" method="post">
        <label for="clan">Ваш клан:</label>
        <input type="text" name="clan" id="clan" required>

        <label for="clan-leader">Ссылка на главу клана:</label>
        <input type="text" name="clan-leader" id="clan-leader" required>

        <label for="alliance">Выберите тип союза:</label>
        <input type="radio" name="alliance" value="Нейтралитет" required> Нейтралитет
        <input type="radio" name="alliance" value="Союз" required> Союз

        <input type="submit" value="Отправить">
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
