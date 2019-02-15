<?php
Class CaesarCipher {

  private $key;
  private $string;

  public function encrypt(string $string, int $key = 5):string
  {
      $this->key = $shift;
      $this->string = $string;
      return $this->exec();
  }

  public function decrypt(string $string, int $key = 5):string
  {
      $this->key = -$key;
      $this->string = $string;
      return $this->exec($string);
  }

  private function exec():string
  {
      $len = strlen($this->string);
      $output = '';

      for ($i=0; $i < $len; $i++) {
          $output .= $this->shift($this->string[$i]);
      }
      return $output;
  }

  private function shift(string $char):string
  {
      $charCode = ord($char);

      // upper case characters
      if ($charCode >= 65 && $charCode <= 90) {
          return chr($this->wrapUpperCase($charCode + $this->key));
      }

      // lower case characters
      if ($charCode >= 97 && $charCode <= 122) {
          return chr($this->wrapLowerCase($charCode + $this->key));
      }
      return chr($charCode);
  }

  // uses modulus to wrap charcode from 90 (Z) to 65 (A) and vice versa
  public function wrapUpperCase(int $code):int
  {
      if ($code > 90) {
          return ($code % 90) + 64;
      }

      if ($code < 65) {
          return 90 - (64 - $code % 65);
      }

      return $code;
  }

  // uses modulus to wrap charcode from 122 (z) to 97 (a) and vice versa
  private function wrapLowerCase(int $code):int
  {
      if ($code > 122) {
          return $code % 122 + 97;
      }

      if ($code < 97) {
          return 122 - (97 - $code % 97);
      }

      return $code;
  }

}
