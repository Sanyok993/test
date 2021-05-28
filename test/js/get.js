const input = document.querySelector('.field-form__input'),
      button = document.querySelector('.field-form__submit'),
      fieldHeader = document.querySelector('.field-responce__header'),
      fieldTemper = document.querySelector('.field-responce__temperature');


button.addEventListener('click', function() {

    let apiKey = "0af9a6a4926e2d0a50d35dc222f99337";

    let city = input.value;

    let url = `http://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;

    let xhr = new XMLHttpRequest();

    xhr.open('GET', url, true);

    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;

        if (xhr.status != 200) {
            alert(xhr.status + ': ' + xhr.statusText);
            fieldHeader.textContent = '';
            fieldTemper.textContent = ('Упс, что-то пошло не так, попробуйте снова');
        } else {
            fieldHeader.textContent = JSON.parse(xhr.response).name;
            let kelvin = (Number(JSON.parse(xhr.response).main.temp) - 273.15);
            fieldTemper.textContent = `Температура - ${kelvin.toFixed(1)}° цельсия`;
        }
      
    }
})