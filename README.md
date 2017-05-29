# WeMD_task
Simple task for a WeMD company with backend based on PHP &amp; MySQL and frontend based on HTML5, CSS3, Bootstrap, JQuery and some JS.

En:

So when we download the index page, write any email, verify yourself by recaptcha_v2 as 'norobot or nobot' and push the submit button:
The form sends data by asynchronical POST-request(ajax) to the function called
captcha.php(it checks the response and secret key to realize if the person has received the recaption or not),
then it calls the validation.php function (it checks whether we entered anything in the email field)
and Then the function add_mail.php is called which processes errors and displays them in a modal window using the same one AJAX.

Ру:

Итак, когда мы запускаем index страницу, вписываем email, верифицируемся с помощью  recaptcha_v2 и нажимаем кнопку подтвердить:
Форма асинхронным POST-запросом(ajax) отправляет данные в функцию под названием captcha.php (она проверяет response  и secret key,
чтобы понять прошел человек recaptcha или нет), затем она вызывает функцию validation.php (она проверяет ввели ли мы  что-нибудь 
в поле email) и затем вызывается функция адд_емайл.пхп которая обрабатывает ошибки и выводит их в модальное окно
с помощью того самого AJAX.
