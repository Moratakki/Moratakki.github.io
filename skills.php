<!DOCTYPE html>
<?php
include "portfolio_db.php";
?>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="google-site-verification" content="DM36NGZ0oJZu1xEuIDwGX359HmQdImHBl3_45Oo01Rw" />
  <title>Быков Д.И.</title>
  <link rel="stylesheet" href="style.php" />
</head>

<body>
  <header>
    <nav>
      <div class="header">
        <span title="Обо мне"><a class="link" href="skills.php">Навыки</a></span>
      </div>
      <div class="header">
        <span title="Контакты"><a class="link" href="contacts.php">Контакты</a></span>
      </div>
      <div class="header">
        <span title="Обо мне"><a class="link" href="index.php">На главную</a></span>
      </div>
    </nav>
  </header>
  <main class="main">
    <h1 class="skills">Навыки</h1>
    <div class="prog-skills">
      <h1>Языки программирования:</h1>
      <div class="skill">
        <div class="python">Python</div>
      </div>
      <div class="skill">
        <div class="cpp">C++</div>
      </div>
      <div class="skill">
        <div class="js">JS</div>
      </div>
      <div class="skill">
        <div class="csharp">C#</div>
      </div>
    </div>
  </main>
  <footer>© <?php echo $year ?> Moratakki</footer>
</body>

</html>