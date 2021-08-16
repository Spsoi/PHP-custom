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
