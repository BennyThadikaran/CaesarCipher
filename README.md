# Caesar Cipher

An PHP implementation of Caesar Cipher inpired from [Odin Project](https://www.theodinproject.com/courses/ruby-programming/lessons/building-blocks).

From Wikipedia:

>In cryptography, a Caesar cipher, also known as Caesar’s cipher, the shift cipher, Caesar’s code or Caesar shift, is one of the simplest and most widely known encryption techniques. It is a type of substitution cipher in which each letter in the plaintext is replaced by a letter some fixed number of positions down the alphabet. For example, with a left shift of 3, D would be replaced by A, E would become B, and so on. The method is named after Julius Caesar, who used it in his private correspondence.

- Just a coding challenge. Not meant for production.

- Supports PHP 7 and above.

- Maintains character casing.

- Non alphabetical characters remain unchanged.

## Usage
```php
<?php
$cipher = new CaesarCipher();
$encrypted = $cipher->encrypt('Some Secret Text'); // Ebyq Eqoeqg Fqkg
$decrypted = $cipher->decrypt($encrypted); // Some Secret Text

echo $encrypted . "\n" . $decrypted . "\n";
```
