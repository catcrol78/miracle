<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$size = $_POST['size'];
$limit = $_POST['limit'];
$count = $_POST['count-float'];
$address = $_POST['address'];
$message = $_POST['message'];
$social = $_POST['social'];
$date = date('H:i, Y.m.d') || "Сегодня";

if (!$name || $name.str_replace(" ","") == "") {
    $message = "Error: empty message";
    return $message;
}
if (!$email || $email.str_replace(" ","") == "") {
    $message = "Error: empty message";
    return $message;
}
if (!$phone || $phone.str_replace(" ","") == "") {
    $message = "Error: empty message";
    return $message;
}
if (!$size || $size.str_replace(" ","") == "") {
    $message = "Error: empty message";
    return $message;
}
if (!$limit || $limit.str_replace(" ","") == "") {
    $message = "Error: empty message";
    return $message;
}
if (!$count || $count.str_replace(" ","") == "") {
    $message = "Error: empty message";
    return $message;
}
if (!$address || $address.str_replace(" ","") == "") {
    $message = "Error: empty message";
    return $message;
}


if ($social == "" && $message == "") {
    $messages = '<body style="margin: 0;">
              <div style="width: 100%; height: auto; background: #396bfd; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                <h1 style="display: inline-block; color: #fff; font-family: Arial, sans-serif; padding: 10px 20px 10px 20px; margin:10px">Флоат камеры</h1>
                <img src="https://float-camera.ru/media/images/logo.png" style="text-align: center; display: inline-block; max-width: 340px; max-height: 114px; padding: 10px 20px 10px 20px; margin:10px" alt="">
              </div>
              <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <div style="width: 70%; background: #E0FFFF;">
                    <h1 style="text-align: center;">Новое сообщение от пользователя!</h1>
                  </div>
                  <div style="width: 70%;background: #c1eaff6e;">
                    <div style="width: 100%; padding: 10px;">
                      <label for="name" style="text-align: left;padding: 0 15px 0px 0;">Имя пользователя:</label>
                      <input type="text" name="name" value="'.$name.'" style="width: 35%; text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="email" style="text-align: left;padding: 0 15px 0px 0;">Email пользователя:</label>
                      <input type="text" name="email" value="'.$email.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="phone" style="text-align: left;padding: 0 15px 0px 0;">Телефон пользователя:</label>
                      <input type="text" name="phone" value="'.$phone.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="size" style="text-align: left;padding: 0 15px 0px 0;">Размеры камеры:</label>
                      <input type="text" name="size" value="'.$size.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="days" style="text-align: left;padding: 0 15px 0px 0;">Желаемый срок изготовления(в днях):</label>
                      <input type="text" name="days" value="'.$limit.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="quantity" style="text-align: left;padding: 0 15px 0px 0;">Количество камер:</label>
                      <input type="text" name="quantity" value="'.$count.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="addres" style="text-align: left;padding: 0 15px 0px 0;">Адресс:</label>
                      <input type="text" name="addres" value="'.$address.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                        <h2>Сообщение отправлено: '.$date.'</h2>
                    </div>
                  </div>
              </div>
              <div style="width: 100%; background: #c1eaff6e; margin-top: 20px; height: 100px; align-content: end;">
                <h3 style="color: #396bfd; padding: 10px;">© MIRACLE Производство и продажа флоат-камер. 2013-'.date('Y').'г.</h3>
              </div>
          </body>  ';

} else if ($social == "") {
    $messages = '<body style="margin: 0;">
              <div style="width: 100%; height: auto; background: #396bfd; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                <h1 style="display: inline-block; color: #fff; font-family: Arial, sans-serif; padding: 10px 20px 10px 20px; margin:10px">Флоат камеры</h1>
                <img src="https://float-camera.ru/media/images/logo.png" style="text-align: center; display: inline-block; max-width: 340px; max-height: 114px; padding: 10px 20px 10px 20px; margin:10px" alt="">
              </div>
              <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <div style="width: 70%; background: #E0FFFF;">
                    <h1 style="text-align: center;">Новое сообщение от пользователя!</h1>
                  </div>
                  <div style="width: 70%;background: #c1eaff6e;">
                    <div style="width: 100%; padding: 10px;">
                      <label for="name" style="text-align: left;padding: 0 15px 0px 0;">Имя пользователя:</label>
                      <input type="text" name="name" value="'.$name.'" style="width: 35%; text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="email" style="text-align: left;padding: 0 15px 0px 0;">Email пользователя:</label>
                      <input type="text" name="email" value="'.$email.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="phone" style="text-align: left;padding: 0 15px 0px 0;">Телефон пользователя:</label>
                      <input type="text" name="phone" value="'.$phone.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="size" style="text-align: left; padding: 0 15px 0px 0;">Размеры камеры:</label>
                      <input type="text" name="size" value="'.$size.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="days" style="text-align: left; padding: 0 15px 0px 0;">Желаемый срок изготовления(в днях):</label>
                      <input type="text" name="days" value="'.$limit.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="quantity" style="text-align: left; padding: 0 15px 0px 0;">Количество камер:</label>
                      <input type="text" name="quantity" value="'.$count.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="addres" style="text-align: left; padding: 0 15px 0px 0;">Адресс:</label>
                      <input type="text" name="addres" value="'.$address.'" style=" width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px; display: flex; flex-direction: row; align-items: center;">
                      <label for="message" style="text-align: left; padding: 0 15px 0px 0;">Сообщение от пользователя:</label>
                      <textarea type="text-area" name="message" style="width: 100%; margin-left: 30%; margin-right: 15px; min-height: 120px; resize: vertical;">'.$message.'</textarea>
                    </div>
                    <div style="width: 100%; padding: 10px;">
                        <h2>Сообщение отправлено: '.$date.'</h2>
                    </div>
                  </div>
              </div>
              <div style="width: 100%; background: #c1eaff6e; margin-top: 20px; height: 100px; align-content: end;">
                <h3 style="color: #396bfd; padding: 10px;">© MIRACLE Производство и продажа флоат-камер. 2013-'.date('Y').'г.</h3>
              </div>
          </body>  ';
} else if ($message == "") {
    $messages = '<body style="margin: 0;">
              <div style="width: 100%; height: auto; background: #396bfd; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                <h1 style="display: inline-block; color: #fff; font-family: Arial, sans-serif; padding: 10px 20px 10px 20px; margin:10px">Флоат камеры</h1>
                <img src="https://float-camera.ru/media/images/logo.png" style="text-align: center; display: inline-block; max-width: 340px; max-height: 114px; padding: 10px 20px 10px 20px; margin:10px" alt="">
              </div>
              <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <div style="width: 70%; background: #E0FFFF;">
                    <h1 style="text-align: center;">Новое сообщение от пользователя!</h1>
                  </div>
                  <div style="width: 70%;background: #c1eaff6e;">
                    <div style="width: 100%; padding: 10px;">
                      <label for="name" style="text-align: left;padding: 0 15px 0px 0;">Имя пользователя:</label>
                      <input type="text" name="name" value="'.$name.'" style="width: 35%; text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="email" style="text-align: left;padding: 0 15px 0px 0;">Email пользователя:</label>
                      <input type="text" name="email" value="'.$email.'" style="width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="phone" style="text-align: left;padding: 0 15px 0px 0;">Телефон пользователя:</label>
                      <input type="text" name="phone" value="'.$phone.'" style="width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="social" style="text-align: left;padding: 0 15px 0px 0;">Соц. сети пользователя:</label>
                      <input type="text" name="social" value="'.$social.'" style="width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="size" style="text-align: left;padding: 0 15px 0px 0;">Размеры камеры:</label>
                      <input type="text" name="size" value="'.$size.'" style="width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="days" style="text-align: left;padding: 0 15px 0px 0;">Желаемый срок изготовления(в днях):</label>
                      <input type="text" name="days" value="'.$limit.'" style="width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="quantity" style="text-align: left;padding: 0 15px 0px 0;">Количество камер:</label>
                      <input type="text" name="quantity" value="'.$count.'" style="width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="addres" style="text-align: left;padding: 0 15px 0px 0;">Адресс:</label>
                      <input type="text" name="addres" value="'.$address.'" style="width: 35%;text-align: center; float: right; padding: 5px;">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                        <h2>Сообщение отправлено: '.$date.'</h2>
                    </div>
                  </div>
              </div>
              <div style="width: 100%; background: #c1eaff6e; margin-top: 20px; height: 100px; align-content: end;">
                <h3 style="color: #396bfd; padding: 10px;">© MIRACLE Производство и продажа флоат-камер. 2013-'.date('Y').'г.</h3>
              </div>
          </body>  ';
} else {
    $messages = '<body style="margin: 0;">
              <div style="width: 100%; height: auto; background: #396bfd; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                <h1 style="display: inline-block; color: #fff; font-family: Arial, sans-serif; padding: 10px 20px 10px 20px; margin:10px">Флоат камеры</h1>
                <img src="https://float-camera.ru/media/images/logo.png" style="text-align: center; display: inline-block; max-width: 340px; max-height: 114px; padding: 10px 20px 10px 20px; margin:10px" alt="">
              </div>
              <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <div style="width: 70%; background: #E0FFFF;">
                    <h1 style="text-align: center;">Новое сообщение от пользователя!</h1>
                  </div>
                  <div style="width: 70%;background: #c1eaff6e;">
                    <div style="width: 100%; padding: 10px;">
                      <label for="name" style="text-align: left;padding: 0 15px 0px 0;">Имя пользователя:</label>
                      <input type="text" name="name" value="'.$name.'" style="width: 35%; text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="email" style="text-align: left;padding: 0 15px 0px 0;">Email пользователя:</label>
                      <input type="text" name="email" value="'.$email.'" style="width: 35%;text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="phone" style="text-align: left;padding: 0 15px 0px 0;">Телефон пользователя:</label>
                      <input type="text" name="phone" value="'.$phone.'" style="width: 35%;text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="social" style="text-align: left;padding: 0 15px 0px 0;">Соц. сети пользователя:</label>
                      <input type="text" name="social" value="'.$social.'" style="width: 35%;text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="size" style="text-align: left;padding: 0 15px 0px 0;">Размеры камеры:</label>
                      <input type="text" name="size" value="'.$size.'" style="width: 35%;text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="days" style="text-align: left;padding: 0 15px 0px 0;">Желаемый срок изготовления(в днях):</label>
                      <input type="text" name="days" value="'.$limit.'" style="width: 35%;text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="quantity" style="text-align: left;padding: 0 15px 0px 0;">Количество камер:</label>
                      <input type="text" name="quantity" value="'.$count.'" style="width: 35%;text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px;">
                      <label for="addres" style="text-align: left;padding: 0 15px 0px 0;">Адресс:</label>
                      <input type="text" name="addres" value="'.$address.'" style="width: 35%;text-align: center; float: right; padding: 5px; margin-right: 15px">
                    </div>
                    <div style="width: 100%; padding: 10px; display: flex; flex-direction: row; align-items: center;">
                      <label for="message" style="text-align: left;padding: 0 15px 0px 0;">Сообщение от пользователя:</label>
                      <textarea type="text-area" name="message" style="width: 100%; margin-left: 30%; margin-right: 15px; resize: vertical;height: 120px;">'.$message.'</textarea>
                    </div>
                    <div style="width: 100%; padding: 10px;">
                        <h2>Сообщение отправлено: '.$date.'</h2>
                    </div>
                  </div>
              </div>
              <div style="width: 100%; background: #c1eaff6e; margin-top: 20px; height: 100px; align-content: end;">
                <h3 style="color: #396bfd; padding: 10px;">© MIRACLE Производство и продажа флоат-камер. 2013-'.date('Y').'г.</h3>
              </div>
          </body>  ';
}

$name = $_POST['name'];
$subject = "=?utf-8?B?".base64_encode("Сообщение от пользователя $name")."?=";
$headers =  "Content-Type: text/html; charset=utf-8\r\n";


$success = mail('float-camera@mail.ru', $subject, $messages, $headers);
$success = mail('manager@float-camera.ru', $subject, $messages, $headers);
$success = mail('crol03@mail.ru', $subject, $messages, $headers);

echo gettype($name);

