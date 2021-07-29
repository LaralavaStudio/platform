<?php

namespace LaralavaStudio\Core;

class BaseAlgorithm
{

  public static function responseMessage($response,$message,$code)
  {
      return response()->json([
          "response" => $response,
          "metadata" => [
              "message" => $message,
              "code"    => $code
          ]
      ]);
  }
}
