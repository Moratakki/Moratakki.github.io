<?php
include "portfolio_db.php";
$contacts = getContacts();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="google-site-verification" content="DM36NGZ0oJZu1xEuIDwGX359HmQdImHBl3_45Oo01Rw" />
  <title>Быков Д.И.</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
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
  <div class="main">
    <h1 class="contacts">Мои контакты</h1>
    <ul class="socials">
      <li>
        <a href="<?php $contacts[0]["vk_link"] ?>"><i class="bx bx-fw bxl-vk"></i>VK</a>
      </li>
      <li>
        <a href="<?php $contacts[0]["tg_link"] ?>"><i class="bx bx-fw bxl-telegram"></i>Telegram</a>
      </li>
      <li>
        <a href="<?php $contacts[0]["github_link"] ?>"><i class="bx bx-fw bx-md bxl-github"></i>GitHub</a>
      </li>
      <li style="font-size: 20px">Тел.: <?php echo $contacts[0]["phone"] ?></li>
    </ul>
  </div>
  <footer>© <?php echo date("Y") ?> Moratakki</footer>
</body>

</html>