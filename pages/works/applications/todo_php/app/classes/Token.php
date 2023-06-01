<?php

class Token
{
  public static function create()
  {
    if (!isset($_SESSION['token'])) {
      $_SESSION['token'] = bin2hex((random_bytes(32)));
    }
  }

  public static function validate()
  {
    $isValidate = true;
    if (
      empty($_SESSION['token']) ||
      $_SESSION['token'] != filter_input(INPUT_POST, 'fetchBodyToken')
    ) {
      $isValidate = false;
    }
    return $isValidate;
  }
}
