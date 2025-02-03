<!DOCTYPE html>
<?php
include "portfolio_db.php";
?>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale  =1.0" />
  <meta name="description" content="Nice dude's site" />
  <meta name="keywords" content="Charming, nice, Danil, Jaguar, Cook" />
  <meta name="google-site-verification" content="DM36NGZ0oJZu1xEuIDwGX359HmQdImHBl3_45Oo01Rw" />
  <title>Быков Д.И.</title>
  <link rel="stylesheet" href="style.php" />
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg" />
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
  <main class="table main">
    <div class="table-row">
      <div class="table-cell">
        <img id="me" src="<?php echo $photoSrc; ?>" alt="Моя фотография">
      </div>
      <div class="table-cell">
        <h1>Быков Д.И.</h1>
        <pre>
> <?php echo $about_me["age"] ?> лет

  > <?php echo $about_me["course_year"] ?>-курсник ДонАУиГС

    > Живу в Донецке

      > 🔩Жму 100 кг🔩

    > 🍕Умею готовить🍕

  > Играю в бильярд
  
> Закончил МБОУ "Гимназия №6 г. Донецк"
          </pre>
      </div>
    </div>
  </main>
  <footer>© <?php echo $year ?> Moratakki</footer>
</body>

</html>