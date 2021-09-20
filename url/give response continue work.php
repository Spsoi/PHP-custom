<?php
// быстро отдаём ответ, и делаем свои дела сколько угодно долго
  set_time_limit(0);
  ob_start();
  $size = ob_get_length();
  header("Content-Encoding: none");
  header("Content-Length: {$size}");
  header("Connection: close");
  ob_end_flush();
  ob_flush();
  flush();

OR
  
 // header("HTTP/1.0 200 OK");
    ignore_user_abort(true);
    set_time_limit(0);
    ob_start();
    echo json_encode(['code' => 0]); // если нужно вернуть какие-то данные
    header('Connection: close');
    header('Content-Length: '.ob_get_length());
    ob_end_flush();
    ob_flush();
    flush();
