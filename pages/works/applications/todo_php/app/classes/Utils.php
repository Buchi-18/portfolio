<?php

class Utils
{
  public static function h($str)
  {
    //ENT_QUOTES	シングルクオートとダブルクオートを共に変換。
    return htmlspecialchars($str,  ENT_QUOTES, 'UTF-8');
  }
}
