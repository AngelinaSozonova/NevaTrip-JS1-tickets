<?php

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <script defer src="js/index.js"></script>
  <title>Tickets</title>
</head>

<body>

  <section class="main">
    <div class="container main__container flex">
      <h1 class="main__title remove">Экскурсии по реке Ниве</h1>
      <div class="main__buy-ticket main-buy-ticket">
        <h2 class="main-buy-ticket__title">Купить билеты</h2>
        <form action="vendor/create.php" method="post" class="main-buy-ticket__form flex">
          <input type="date" class="main-buy-ticket__input form-control" id="date-start" require>
          <select class="main-buy-ticket__select form-select" id="time-start" require>
            <option value="10:00:00">10:00</option>
            <option value="12:00:00">12:00</option>
            <option value="14:00:00">14:00</option>
            <option value="16:00:00">16:00</option>
            <option value="18:00:00">18:00</option>
          </select>
          <div class="main-buy-ticket__wrap flex">
            <span class="main-buy-ticket__type-ticket">Взрослый, <span class="main-buy-ticket__price">700 руб</span></span>
            <div class="main-buy-ticket__btns flex">
              <button class="main-buy-ticket__remove" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 640.000000">
                  <metadata>
                    Created by potrace 1.15, written by Peter Selinger 2001-2017
                  </metadata>
                  <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M1421 4791 c-1394 -6 -1404 -6 -1406 -26 -2 -11 -6 -726 -9 -1588
                    l-7 -1568 2973 4 c2087 3 3122 8 3473 18 615 16 2291 16 3665 1 553 -7 1384
                    -15 1848 -19 l842 -6 0 1591 0 1592 -1943 0 c-1069 0 -3314 2 -4988 3 -1674 2
                    -3676 1 -4448 -2z" />
                  </g>
                </svg>
              </button>
              <div class="main-buy-ticket__quantity">0</div>
              <button class="main-buy-ticket__add" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 1208.000000">
                  <g transform="translate(0.000000,1208.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M5157 12073 c-4 -3 -7 -899 -7 -1990 l0 -1983 -422 0 c-233 0 -898
                    -5 -1479 -10 -581 -5 -1288 -10 -1571 -10 l-516 -2 -6 -901 c-3 -496 -7 -1214
                    -9 -1595 l-4 -694 2008 8 2009 7 0 -1805 0 -1805 662 -6 c364 -4 1084 -7 1600
                    -7 l938 0 0 1805 0 1805 538 0 c296 0 1194 3 1995 7 l1457 6 0 1599 0 1598
                    -1995 0 -1995 0 0 1990 0 1990 -1598 0 c-879 0 -1602 -3 -1605 -7z" />
                  </g>
                </svg>
              </button>
            </div>
            <input type="number" class="remove main-buy-ticket__input-quantity" name="ticket_adult_quantity">
            <input type="text" class="remove main-buy-ticket__input-price" name="ticket_adult_price">
          </div>
          <div class="main-buy-ticket__wrap flex">
            <span class="main-buy-ticket__type-ticket">Детский, <span class="main-buy-ticket__price">450 руб</span></span>
            <div class="main-buy-ticket__btns flex">
              <button class="main-buy-ticket__remove" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 640.000000">
                  <metadata>
                    Created by potrace 1.15, written by Peter Selinger 2001-2017
                  </metadata>
                  <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M1421 4791 c-1394 -6 -1404 -6 -1406 -26 -2 -11 -6 -726 -9 -1588
                    l-7 -1568 2973 4 c2087 3 3122 8 3473 18 615 16 2291 16 3665 1 553 -7 1384
                    -15 1848 -19 l842 -6 0 1591 0 1592 -1943 0 c-1069 0 -3314 2 -4988 3 -1674 2
                    -3676 1 -4448 -2z" />
                  </g>
                </svg>
              </button>
              <div class="main-buy-ticket__quantity">0</div>
              <button class="main-buy-ticket__add" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 1208.000000">
                  <g transform="translate(0.000000,1208.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M5157 12073 c-4 -3 -7 -899 -7 -1990 l0 -1983 -422 0 c-233 0 -898
                    -5 -1479 -10 -581 -5 -1288 -10 -1571 -10 l-516 -2 -6 -901 c-3 -496 -7 -1214
                    -9 -1595 l-4 -694 2008 8 2009 7 0 -1805 0 -1805 662 -6 c364 -4 1084 -7 1600
                    -7 l938 0 0 1805 0 1805 538 0 c296 0 1194 3 1995 7 l1457 6 0 1599 0 1598
                    -1995 0 -1995 0 0 1990 0 1990 -1598 0 c-879 0 -1602 -3 -1605 -7z" />
                  </g>
                </svg>
              </button>
            </div>
            <input type="number" class="remove main-buy-ticket__input-quantity" name="ticket_kid_quantity">
            <input type="text" class="remove main-buy-ticket__input-price" name="ticket_kid_price">
          </div>
          <div class="main-buy-ticket__wrap flex">
            <span class="main-buy-ticket__type-ticket">Льготный, <span class="main-buy-ticket__price">500 руб</span></span>
            <div class="main-buy-ticket__btns flex">
              <button class="main-buy-ticket__remove" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 640.000000">
                  <metadata>
                    Created by potrace 1.15, written by Peter Selinger 2001-2017
                  </metadata>
                  <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M1421 4791 c-1394 -6 -1404 -6 -1406 -26 -2 -11 -6 -726 -9 -1588
                    l-7 -1568 2973 4 c2087 3 3122 8 3473 18 615 16 2291 16 3665 1 553 -7 1384
                    -15 1848 -19 l842 -6 0 1591 0 1592 -1943 0 c-1069 0 -3314 2 -4988 3 -1674 2
                    -3676 1 -4448 -2z" />
                  </g>
                </svg>
              </button>
              <div class="main-buy-ticket__quantity">0</div>
              <button class="main-buy-ticket__add" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 1208.000000">
                  <g transform="translate(0.000000,1208.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M5157 12073 c-4 -3 -7 -899 -7 -1990 l0 -1983 -422 0 c-233 0 -898
                    -5 -1479 -10 -581 -5 -1288 -10 -1571 -10 l-516 -2 -6 -901 c-3 -496 -7 -1214
                    -9 -1595 l-4 -694 2008 8 2009 7 0 -1805 0 -1805 662 -6 c364 -4 1084 -7 1600
                    -7 l938 0 0 1805 0 1805 538 0 c296 0 1194 3 1995 7 l1457 6 0 1599 0 1598
                    -1995 0 -1995 0 0 1990 0 1990 -1598 0 c-879 0 -1602 -3 -1605 -7z" />
                  </g>
                </svg>
              </button>
            </div>
            <input type="number" class="remove main-buy-ticket__input-quantity" name="ticket_preferetial_quantity">
            <input type="text" class="remove main-buy-ticket__input-price" name="ticket_preferetial_price">
          </div>
          <div class="main-buy-ticket__wrap flex">
            <span class="main-buy-ticket__type-ticket">Групповой, <span class="main-buy-ticket__price">600 руб</span></span>
            <div class="main-buy-ticket__btns flex">
              <button class="main-buy-ticket__remove" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 640.000000">
                  <metadata>
                    Created by potrace 1.15, written by Peter Selinger 2001-2017
                  </metadata>
                  <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M1421 4791 c-1394 -6 -1404 -6 -1406 -26 -2 -11 -6 -726 -9 -1588
                    l-7 -1568 2973 4 c2087 3 3122 8 3473 18 615 16 2291 16 3665 1 553 -7 1384
                    -15 1848 -19 l842 -6 0 1591 0 1592 -1943 0 c-1069 0 -3314 2 -4988 3 -1674 2
                    -3676 1 -4448 -2z" />
                  </g>
                </svg>
              </button>
              <div class="main-buy-ticket__quantity">0</div>
              <button class="main-buy-ticket__add" type="button">
                <svg class="main-buy-ticket__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                  viewbox="0 0 1280.000000 1208.000000">
                  <g transform="translate(0.000000,1208.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M5157 12073 c-4 -3 -7 -899 -7 -1990 l0 -1983 -422 0 c-233 0 -898
                    -5 -1479 -10 -581 -5 -1288 -10 -1571 -10 l-516 -2 -6 -901 c-3 -496 -7 -1214
                    -9 -1595 l-4 -694 2008 8 2009 7 0 -1805 0 -1805 662 -6 c364 -4 1084 -7 1600
                    -7 l938 0 0 1805 0 1805 538 0 c296 0 1194 3 1995 7 l1457 6 0 1599 0 1598
                    -1995 0 -1995 0 0 1990 0 1990 -1598 0 c-879 0 -1602 -3 -1605 -7z" />
                  </g>
                </svg>
              </button>
            </div>
            <input type="number" class="remove main-buy-ticket__input-quantity" name="ticket_group_quantity" id="ticket-group-quantity">
            <input type="text" class="remove main-buy-ticket__input-price" name="ticket_group_price">
          </div>
          <input type="number" class="remove main-buy-ticket__summ" name="equal_price" id="price">
          <input type="text" class="remove main-buy-ticket__date-created" name="created" id="date-created">
          <input type="number" class="remove main-buy-ticket__quantity-ticket" name="quantity-ticket" id="tickets">
          <input type="text" class="remove main-buy-ticket__event-date" name="event_date" id="event-date">
          <button class="btn btn-primary main-buy-ticket__btn" type="submit" id="submit-btn">Купить</button>
          <div class="error error-quantity remove">Выберите количество билетов!</div>
          <div class="error error-date remove">Выберите дату события!</div>
          <div class="error error-quantity-group remove">Группа должна быть более 10 человек!</div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>



