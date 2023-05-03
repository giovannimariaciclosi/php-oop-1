<?php

class Movie {
  public $name;
  public $genre;
  public $minute;
  public $length;

  function __construct(string $name, string $genre, int $minute) {
    $this->name = $name;
    $this->genre = $genre;
    $this->minute = $minute;

    if($minute > 90) {
      $this->length = "Long";
    } elseif ($minute < 60) {
      $this->length = "Short";
    } else {
      $this->length = "Medium";
    }
  }
}