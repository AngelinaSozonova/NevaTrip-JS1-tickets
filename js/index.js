window.addEventListener('DOMContentLoaded', () => {
  const btnAdd = document.querySelectorAll('.main-buy-ticket__add');
  const btnRemove = document.querySelectorAll('.main-buy-ticket__remove');
  const btnBuy = document.getElementById('submit-btn');
  const startDate = document.getElementById('date-start');
  let currentDate = new Date();
  let sum = 0;

 //функция получения из массива вида [Льготный, 500 руб] => 500
  function parsePrice(str) {
    let arr = str.split(' ');
    return Number(arr.slice(0 , 1));
  }

  //функция получения формата текущей даты
  function parseCurrentDate() {
    let dd = currentDate.getDate();
    let mm = currentDate.getMonth() + 1;
    let yyyy = currentDate.getFullYear();
    let hours = currentDate.getHours();
    let minutes = currentDate.getMinutes();
    let sec = currentDate.getSeconds();

    if (dd < 10) dd = '0' + dd;
    if (mm < 10) mm = '0' + mm;
    if (hours < 10) hours = '0' + hours;
    if (minutes < 10) minutes = '0' + minutes;
    if (sec < 10) sec = '0' + sec;

    return `${yyyy}-${mm}-${dd} ${hours}:${minutes}:${sec}`;
  }

  //функция получения формата даты события из даты и времени, которые вводит в поля user
  function eventDateTime() {
    const dateStart = document.getElementById('date-start');
    const timeStart = document.getElementById('time-start');

    return `${dateStart.value} ${timeStart.value}`;
  }

 //увеличение количества билетов, подсчет суммы
  btnAdd.forEach(btn => {
    btn.addEventListener('click', () => {
      const box = btn.parentElement.parentElement;
      const inputQuantity = box.querySelector('.main-buy-ticket__input-quantity');
      const quantity = Number(btn.previousElementSibling.textContent) + 1;
      const priceElement = btn.parentElement.previousElementSibling.lastElementChild.textContent;
      let count = btn.previousElementSibling.textContent;

      let price = parsePrice(priceElement);

      inputQuantity.value = quantity;

      count++;
      sum += price;
      btn.previousElementSibling.textContent = count;
      btnBuy.textContent = `Купить, ${sum} руб`;
    })
  });

  //уменьшение количества билетов, подсчет суммы
  btnRemove.forEach(btn => {
    btn.addEventListener('click', () => {
      const box = btn.parentElement.parentElement;
      const inputQuantity = box.querySelector('.main-buy-ticket__input-quantity');
      const priceElement = btn.parentElement.previousElementSibling.lastElementChild.textContent;
      const quantity = Number(btn.nextElementSibling.textContent) - 1;
      let count = btn.nextElementSibling.textContent;

      let price = parsePrice(priceElement);
      if (count != 0) {
        count--;
        sum -= price;
        btn.nextElementSibling.textContent = count;
        inputQuantity.value = quantity;
        if (sum !== 0) {
          btnBuy.textContent = `Купить, ${sum} руб`;
        } else btnBuy.textContent = `Купить`;
      }
    })
  });

  //Отправка формы, валидация
  btnBuy.addEventListener('click', (event) => {
    let inputSumm = document.getElementById('price');
    let inputDateCreated = document.getElementById('date-created');
    let eventDate = document.getElementById('event-date');
    const quantityGroup = document.getElementById('ticket-group-quantity');
    const textErrorquantity = document.querySelector('.error-quantity');
    const textErrorDate = document.querySelector('.error-date');
    const textErrorGroup = document.querySelector('.error-quantity-group');

    inputSumm.value = sum;
    inputDateCreated.value = parseCurrentDate();
    eventDate.value = eventDateTime();

    if (inputSumm.value == 0) {
      event.preventDefault();
      textErrorquantity.classList.remove('remove');
    } else if (!textErrorquantity.classList.contains('remove')) {
      textErrorquantity.classList.add('remove');
    }

    if (startDate.value === '') {
      event.preventDefault();
      textErrorDate.classList.remove('remove');
    } else if (!textErrorDate.classList.contains('remove')) {
      textErrorDate.classList.add('remove');
    }

    if (Number(quantityGroup.value) > 0 && Number(quantityGroup.value < 10)) {
      event.preventDefault();
      textErrorGroup.classList.remove('remove');
    } else if (!textErrorGroup.classList.contains('remove')) {
      textErrorGroup.classList.add('remove');
    }
  });

  const inputPriceAll = document.querySelectorAll('.main-buy-ticket__input-price');
  const priceElAll = document.querySelectorAll('.main-buy-ticket__price');

  priceElAll.forEach((el, i) => {
    let text = parsePrice(el.textContent);

    inputPriceAll.forEach((input, index) => {
      if (i === index) {
        input.value = text;
      }
    });
  });

  startDate.setAttribute('min', `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${currentDate.getDate()}`);
})
