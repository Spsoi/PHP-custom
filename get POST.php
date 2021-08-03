<?php

// Если не виден пост

$input = file_get_contents('php://input');
      $data = is_string($input) ? json_decode(json_decode($input, true)) : $input;
      $this->logger->log($data);
