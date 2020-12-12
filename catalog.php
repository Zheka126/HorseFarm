<?php //Этот код отвечает за подключение к базе данных
$connection = mysqli_connect("127.0.0.1", "mysql", "mysql", "cucerprime");

if ($connection == false) {
    echo "Не удалось подключиться к базе данных <br>";
    echo mysqli_connect_error();
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CucerPrime</title>
    <link rel="stylesheet" href="Styles/catalogStyles.css">
    <link rel="stylesheet" href="Styles/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="page-header">
        <div class="header__wrapper">
            <a class="logo-title" href="index.html"><span>Cucer</span> Prime</a>
            <button class="main-nav__toggle toggle--opened" type="button">
                <span class="visually-hidden">Открыть меню</span>
            </button>
        </div>

        <nav class="main-nav">
            <ul class="main-nav__list site-list">
                <li class="logo--tablet">
                    <a href="index.html">
                        <img src="images/logo-tablet.png" alt="Логотип с ссылкой на главную">
                    </a>
                </li>
                <li class="site-list__item"><a href="index.html">Главная</a></li>
                <li class="site-list__item"><a>Каталог</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="main-products">
            <h1 class="main-products-title">Примеры лошадей с нашей фермы</h1>
            <button class="addnewhorse">Создать новую карточку товара</button>
            <ul class="products-list">

                <?php
                $horse = mysqli_query($connection, "SELECT * FROM `horses`;");
                $record = mysqli_fetch_assoc($horse);

                /*Экспериментальная дичь */
                while (($record = mysqli_fetch_assoc($horse))) {
                    print_r("<li class=\"products-list__item\">");
                    print_r("<div class=\"product-image\">");
                    print_r("<img class=\"image-mobile\" src=\"images/rubin.jpg\">");
                    print_r("<img class=\"image-tablet\" src=\"images/rubin.jpg\">");
                    print_r("</div>");

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                };


                print_r("<a class=\"catalog-button button\" href=\"#form\">Заказать</a>");
                print_r("</li>");
                ?>

                <li class="products-list__item">
                    <div class="product-image">
                        <img class="image-mobile" src="images/vegas.jpg" alt="">
                        <img class="image-tablet" src="images/vegas.jpg" alt="">
                    </div>
                    <?php
                    $horse = mysqli_query($connection, "SELECT * FROM `horses` WHERE `ID horse` = 2;");
                    $record = mysqli_fetch_assoc($horse);

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                    ?>
                    <a class="catalog-button button" href="#form">Заказать</a>
                </li>

                <li class="products-list__item">
                    <div class="product-image">
                        <img class="image-mobile" src="images/mustang.jpg" alt="">
                        <img class="image-tablet" src="images/mustang.jpg" alt="">
                    </div>
                    <?php
                    $horse = mysqli_query($connection, "SELECT * FROM `horses` WHERE `ID horse` = 3;");
                    $record = mysqli_fetch_assoc($horse);

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                    ?>
                    <a class="catalog-button button" href="#form">Заказать</a>
                </li>

                <li class="products-list__item">
                    <div class="product-image">
                        <img class="image-mobile" src="images/valent.jpg" alt="">
                        <img class="image-tablet" src="images/valent.jpg" alt="">
                    </div>
                    <?php
                    $horse = mysqli_query($connection, "SELECT * FROM `horses` WHERE `ID horse` = 4;");
                    $record = mysqli_fetch_assoc($horse);

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                    ?>
                    <a class="catalog-button button" href="#form">Заказать</a>
                </li>
                <li class="products-list__item">
                    <div class="product-image">
                        <img class="image-mobile" src="images/volt.jpg" alt="">
                        <img class="image-tablet" src="images/volt.jpg" alt="">
                    </div>
                    <?php
                    $horse = mysqli_query($connection, "SELECT * FROM `horses` WHERE `ID horse` = 5;");
                    $record = mysqli_fetch_assoc($horse);

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                    ?>
                    <a class="catalog-button button" href="#form">Заказать</a>
                </li>

                <li class="products-list__item">
                    <div class="product-image">
                        <img class="image-mobile" src="images/ostwind.jpg" alt="">
                        <img class="image-tablet" src="images/ostwind.jpg" alt="">
                    </div>
                    <?php
                    $horse = mysqli_query($connection, "SELECT * FROM `horses` WHERE `ID horse` = 6;");
                    $record = mysqli_fetch_assoc($horse);

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                    ?>
                    <a class="catalog-button button" href="#form">Заказать</a>
                </li>

                <li class="products-list__item">
                    <div class="product-image">
                        <img class="image-mobile" src="images/grom.jpg" alt="">
                        <img class="image-tablet" src="images/grom.jpg" alt="">
                    </div>
                    <?php
                    $horse = mysqli_query($connection, "SELECT * FROM `horses` WHERE `ID horse` = 7;");
                    $record = mysqli_fetch_assoc($horse);

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                    ?>
                    <a class="catalog-button button" href="#form">Заказать</a>
                </li>

                <li class="products-list__item">
                    <div class="product-image">
                        <img class="image-mobile" src="images/sandy.jpg" alt="">
                        <img class="image-tablet" src="images/sandy.jpg" alt="">
                    </div>
                    <?php
                    $horse = mysqli_query($connection, "SELECT * FROM `horses` WHERE `ID horse` = 8;");
                    $record = mysqli_fetch_assoc($horse);

                    print_r("<div class=\"product-stats\">");
                    print_r("<h3 class=\"product-title\">" . $record['Name'] . "</h3>");

                    print_r("<div class=\"volume-stat stat\">" . "<p>Вес</p>" . "<p>" . $record['Weight'] . " кг</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Рост</p>" . "<p>" . $record['Growth'] . " м</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Скорость</p>" . "<p>" . $record['Speed'] . " км/ч</p>" . "</div>");
                    print_r("<div class=\"volume-stat stat\">" . "<p>Возраст</p>" . "<p>" . $record['Age'] . " лет</p>" . "</div>");
                    ?>
                    <a class="catalog-button button" href="#form">Заказать</a>
                </li>

            </ul>
        </section>

        <section class="FormData" id="form">
            <h2 class="FormData-title">Форма для данных</h2>
            <h3 class="occupation-title">Укажите род деятельности:</h3>
            <div class="wrapperForForms">
                <div class="Races">
                    <button class="occupation-button button--Races">Скачки</button>
                    <form class="form formRaces" action="PHP/racescript.php" method="post">
                        <label for="ID horse">Выберите коня:</label>
                        <select required id="ID horse" name="ID horse">
                            <option value="1">1 - Рубин</option>
                            <option value="2">2 - Вегас</option>
                            <option value="3">3 - Мустанг</option>
                            <option value="4">4 - Валент</option>
                            <option value="5">5 - Вольт</option>
                            <option value="6">6 - Оствинд</option>
                            <option value="7">7 - Гром</option>
                            <option value="8">8 - Сэнди</option>
                        </select>

                        <label for="Type of race">Тип забега:</label>
                        <input required id="Type of race" type="text" name="Type of race">

                        <label for="Email">Email:</label>
                        <input required id="Email" type="email" name="Email" placeholder="adress@mail.com">

                        <label for="Phone">Номер телефона:</label>
                        <input required id="Phone" type="tel" name="Phone" placeholder="+373-xxx-xx-xxx">

                        <button class="button form-button" type="submit">Отправить</button>
                    </form>
                </div>

                <div class="Education">
                    <button class="occupation-button button--education">Обучение</button>
                    <form class="form formEducation" action="PHP/educationscript.php" method="post">
                        <label for="ID horse">Выберите коня:</label>
                        <select required id="ID horse" name="ID horse">
                            <option value="1">1 - Рубин</option>
                            <option value="2">2 - Вегас</option>
                            <option value="3">3 - Мустанг</option>
                            <option value="4">4 - Валент</option>
                            <option value="5">5 - Вольт</option>
                            <option value="6">6 - Оствинд</option>
                            <option value="7">7 - Гром</option>
                            <option value="8">8 - Сэнди</option>
                        </select>

                        <label for="Age group">Возрастная группа:</label>
                        <input required id="Age group" type="text" name="Age group">

                        <label for="Email">Email:</label>
                        <input required id="Email" type="email" name="Email" placeholder="adress@mail.com">

                        <label for="Phone">Номер телефона:</label>
                        <input required id="Phone" type="tel" name="Phone" placeholder="+373-xxx-xx-xxx">

                        <button class="button form-button" type="submit">Отправить</button>
                    </form>
                </div>

                <div class="Skrex">
                    <button class="occupation-button button--skrex">Скрещивание</button>
                    <form class="form formSkrex" action="PHP/crossbreedingscript.php" method="post">
                        <label for="ID horse">Выберите коня:</label>
                        <select required id="ID horse" name="ID horse">
                            <option value="1">1 - Рубин</option>
                            <option value="2">2 - Вегас</option>
                            <option value="3">3 - Мустанг</option>
                            <option value="4">4 - Валент</option>
                            <option value="5">5 - Вольт</option>
                            <option value="6">6 - Оствинд</option>
                            <option value="7">7 - Гром</option>
                            <option value="8">8 - Сэнди</option>
                        </select>

                        <label for="Female breed">Порода самки:</label>
                        <input required id="Female breed" type="text" name="Female breed">

                        <label for="Email">Email:</label>
                        <input required id="Email" type="email" name="Email" placeholder="adress@mail.com">

                        <label for="Phone">Номер телефона:</label>
                        <input required id="Phone" type="tel" name="Phone" placeholder="+373-xxx-xx-xxx">

                        <button class="button form-button" type="submit">Отправить</button>
                    </form>
                </div>

                <div class="Farm">
                    <button class="occupation-button button--farm">Фермы</button>
                    <form class="form formFarm" action="PHP/farmscript.php" method="post">
                        <label for="ID horse">Выберите коня:</label>
                        <select required id="ID horse" name="ID horse">
                            <option value="1">1 - Рубин</option>
                            <option value="2">2 - Вегас</option>
                            <option value="3">3 - Мустанг</option>
                            <option value="4">4 - Валент</option>
                            <option value="5">5 - Вольт</option>
                            <option value="6">6 - Оствинд</option>
                            <option value="7">7 - Гром</option>
                            <option value="8">8 - Сэнди</option>
                        </select>

                        <label for="Specialization">Специализация фермы:</label>
                        <input required id="Specialization" type="text" name="Specialization">

                        <label for="Email">Email:</label>
                        <input required id="Email" type="email" name="Email" placeholder="adress@mail.com">

                        <label for="Phone">Номер телефона:</label>
                        <input required id="Phone" type="tel" name="Phone" placeholder="+373-xxx-xx-xxx">

                        <button class="button form-button" type="submit">Отправить</button>
                    </form>
                </div>

            </div>
        </section>

        <section class="showDataClents">
            <h2 class="showDataClents-title">Данные клиентов</h2>
            <button class="showDataClents-button">Показать</button>
            <div class="wrapperfortables">
                <div>
                    <table class="table">
                        <h2 class="table-title">Данные о скачках</h2>
                        <tr>
                            <th>ID horse</th>
                            <th>ID customer</th>
                            <th>Type of race</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>

                        <?php
                        $race = mysqli_query($connection, "SELECT * FROM `races`;");

                        while (($record = mysqli_fetch_assoc($race))) {
                            print_r("<tr> <td>" . $record['ID horse'] . "</td>" .
                                "<td>" . $record['ID customer'] . "</td>" .
                                "<td>" . $record['Type of race'] . "</td>" .
                                "<td>" . $record['Email'] . "</td>" .
                                "<td>" . $record['Phone'] . "</td> </tr>");
                        }
                        ?>
                    </table>
                </div>

                <div>
                    <table class="table">
                        <h2 class="table-title">Данные о школах</h2>
                        <tr>
                            <th>ID horse</th>
                            <th>ID school</th>
                            <th>Age group</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>

                        <?php
                        $education = mysqli_query($connection, "SELECT * FROM `education`;");

                        while (($record = mysqli_fetch_assoc($education))) {
                            print_r("<tr> <td>" . $record['ID horse'] . "</td>" .
                                "<td>" . $record['ID school'] . "</td>" .
                                "<td>" . $record['Age group'] . "</td>" .
                                "<td>" . $record['Email'] . "</td>" .
                                "<td>" . $record['Phone'] . "</td> </tr>");
                        }
                        ?>
                    </table>
                </div>

                <div>
                    <table class="table">
                        <h2 class="table-title">Данные о скрещивании</h2>
                        <tr>
                            <th>ID horse</th>
                            <th>ID customer</th>
                            <th>Female breed</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>

                        <?php
                        $cross = mysqli_query($connection, "SELECT * FROM `crossbreeding`;");

                        while (($record = mysqli_fetch_assoc($cross))) {
                            print_r("<tr> <td>" . $record['ID horse'] . "</td>" .
                                "<td>" . $record['ID customer'] . "</td>" .
                                "<td>" . $record['Female breed'] . "</td>" .
                                "<td>" . $record['Email'] . "</td>" .
                                "<td>" . $record['Phone'] . "</td> </tr>");
                        }
                        ?>
                    </table>
                </div>

                <div>
                    <table class="table">
                        <h2 class="table-title">Данные о фермах</h2>
                        <tr>
                            <th>ID horse</th>
                            <th>ID farm</th>
                            <th>Specialization</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>

                        <?php
                        $farm = mysqli_query($connection, "SELECT * FROM `farms`;");

                        while (($record = mysqli_fetch_assoc($farm))) {
                            print_r("<tr> <td>" . $record['ID horse'] . "</td>" .
                                "<td>" . $record['ID farm'] . "</td>" .
                                "<td>" . $record['Specialization'] . "</td>" .
                                "<td>" . $record['Email'] . "</td>" .
                                "<td>" . $record['Phone'] . "</td> </tr>");
                        }
                        ?>
                    </table>
                </div>
        </section>

        <section class="additional-products">
            <h2 class="additional-products-title">Дополнительные аксессуары</h2>
            <div class="additional-wrapperfordesktop">
                <ul class="additional-products-list">

                    <li class="additional-products-list__item">
                        <div class="wrapper-for-someshit">
                            <h3 class="additional-title">Седла</h3>
                            <div class="additional-wrapper">
                                <p class="justforpadding">7500 - 50000 Р.</p>
                            </div>
                        </div>
                        <a class="additional-button button" href="">Связаться</a>
                    </li>

                    <li class="additional-products-list__item">
                        <div class="wrapper-for-someshit">
                            <h3 class="additional-title">Путлища</h3>
                            <div class="additional-wrapper">
                                <p class="justforpadding">1500 - 12000 Р.</p>
                            </div>
                        </div>
                        <a class="additional-button button" href="">Связаться</a>
                    </li>

                    <li class="additional-products-list__item">
                        <div class="wrapper-for-someshit">
                            <h3 class="additional-title">Cтремена</h3>
                            <div class="additional-wrapper">
                                <p class="justforpadding">800 - 4600 Р.</p>
                            </div>
                        </div>
                        <a class="additional-button button" href="">Связаться</a>
                    </li>

                    <li class="additional-products-list__item">
                        <div class="wrapper-for-someshit">
                            <h3 class="additional-title">Подпруги</h3>
                            <div class="additional-wrapper">
                                <p class="justforpadding">1000 - 5000 Р.</p>
                            </div>
                        </div>
                        <a class="additional-button button" href="">Связаться</a>
                    </li>

                    <li class="additional-products-list__item">
                        <div class="wrapper-for-someshit">
                            <h3 class="additional-title">Упряжь</h3>
                            <div class="additional-wrapper">
                                <p class="justforpadding">17500 - 94000 Р.</p>
                            </div>
                        </div>
                        <a class="additional-button button" href="">Связаться</a>
                    </li>

                </ul>

                <div class="gift">
                    <svg class="gift-image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55" height="60" viewBox="0 0 55 60">
                        <image id="gift.svg" width="55" height="60" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA8CAYAAADCHCKFAAADvElEQVRoge2bTWhVRxiGn1h/0ChqQiXiX6QIUVKw4MJQEYlgrb+xbroUpXXjJjXVrdsSdWMW7aK6ElwIdlNKLUJACroRKUVxIWowkCZpMRJ/YhLfMu13w3CSe8+MOcg9l/PC4c7M+ead750zZ85858xFUuzRIOmUpFuSXul/DEj6SdIBSXXvwInVO2A8g8br+G9LOi2pMZYz1oFDkoZUGTclbYjk3WD1KsG1+0UM73+9HIijwI+e6R3gN2AI2Ah0AI127hlwCOgNoN4BXAOWWf5vy98HVgA7gS2e/THgYpDLgb3QKmnMenVE0v4ZbBZK6pY0aXYvJbWn8Labnaxet/Ek7fZZuw6vJbVkOSyvGfG4pLYU28Pevfhc0qYydpvsfMnhwym8bda+w9WsxDV6V+NCYGd0eHUeSKpPnK+38tIV6wjk7bE6EyETTAjhHu8mT7tq/tHl1esp46TMLpSzzau3OwtxRzzC5RGOuMnqV6v3VtJWK99qeYfrkY+OBs+XI2n2cwLmnDEvvTRolrK5CvgaeAnUAd1W3m15V/6V2YViiWf3Jq1OiLh7Xro9whGHJ8B3lt4GfG+/WPmTSL7tXvrPVOuAoTBHUp8NhfuS5kcMI3csljSceDgPW3kMz1xJf1j9PvNr1sPyLXDO0i3AJWB+RG+PAmcTZWetPBTz7MH9sdmfN78qorRCOWpP/lVljD8AVnv5QeBVhHOuM1Z6+YHEvZyGhbZaKaEfmChTp99WUheduG+8K1NLOOnE/WW98hS4UQPidtooG8S7yTsjb/BqPTpLgvwJJeZ5U82Y0hEyW+YWhbi8ohCXVxTi8gpfXF2NaJrS4ZZfbhH8ocVWIa/iqh3uVeE698rRievyouRawrelkOe4hT2rvLBnyF4FZIUmYIGFOgMZ8i6ykYeFO/0W+/2QXPw2ewvp0NdtoUev8fZmzNvh+dwcG4nnFoW4vKIQl1cU4vKKQlxeUYjLK2pa3NwK574ENmfYVrP3eyZD3pZyJ5L7UFzDjzJs+H1jPfC41GalK+diufEMnVtsn8ImI7/NpWGexXTTUcRzOUUhLq8oxOUVhbi8ohBX5Sj7AScpbthLN+VEnL8zyfd/mrhR22yDbcjOAw6aj0+Ta9aZhuVl+/0M6Kxycc6/XZa+nDw509b7BuAusMbyvwO/AC9m6cgJ4CPgIdAzS6564HPgU8v3AZ8A//hG5f5X0Ar8DKydpRPvA07Y3pk2l1b604Tb8ut29LmI3PW4i8WqBS4mdCPgiu29HJnmGPAvNakHUaNlxSgAAAAASUVORK5CYII=" />
                    </svg>
                    <p class="gift-sentense">Закажите набор и получите бесплатное седло</p>
                </div>
            </div>
        </section>

        <section class="map-container">
            <h2 class="map-title">Наши котакты</h2>
            <div class="address-container">
                <p class="address-container__cooperation">приглашаем <br> всех желающих <br> к сотрудничеству!</p>
                <p class="address-container__adress">ул. Студентов 7 <br> Сказочный город Кишинёв</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10871.452066747479!2d28.865911621490984!3d47.06253740120072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97ce00125f907%3A0xfc2e5ee00a6d3d6a!2z0KLQtdGF0L3QuNGH0LXRgdC60LjQuSDQo9C90LjQstC10YDRgdC40YLQtdGCINCc0L7Qu9C00L7QstGL!5e0!3m2!1sru!2s!4v1606234528283!5m2!1sru!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
    </main>

    <footer class="page-footer">
        <div class="page-footer__logo">
            <a href="index.html"><img src="images/logo-tablet.png" alt="Логотип с ссылкой на главную"></a>
        </div>

        <a class="footer_developers" href="https://github.com/Zheka126"><img src="images/z.png" width="80" alt="Зэт"></a>
    </footer>
    <script src="script.js"></script>
</body>

</html>

<?php //закрытие сессии, чтобы не перегружать сервер
mysqli_close($connection);
?>