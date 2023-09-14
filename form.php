<form method="post" action="contact-us.php">
  <div class="row">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="row">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="row">
    <label for="message">Email:</label>
    <input type="message" name="message" id="message" required>
  </div>
  <div class="row">
    <button type="submit" class="btn btn-primary">Отправить</button>
  </div>
</form>
<? 
$name = $_POST['name']; // получаем значение из поля "имя"
$email = $_POST['email']; // получаем значение из поля "электронная почта"
$message = $_POST['message']; // получаем значение из поля "сообщение"

// проверяем правильность введенных данных
if ($name == '' || $email == '' || $message == '') {
    echo 'Пожалуйста, заполните все поля!';
    exit();
} else {
    // формируем сообщение и отправляем его на почту
    $to = 'example@gmail.com'; // адрес получателя
    $subject = 'Новая заявка с сайта'; // тема письма
    $body = 'Имя: ' . $name . '\nЭлектронная почта: ' . $email . '\nСообщение: ' . $message;
    mail($to, $subject, $body);
    header('Location: contact-us.php'); // перенаправляем пользователя на страницу обработки заявки
}
