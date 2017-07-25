# cryptun
Crypto wrapper with Mcrypt ecncryption, like crypun (npm).

For example:
=====
```
<?
require_once 'cryptun.php';
$cr = new cryptun;

echo $cr->en('Hello World!'); // dFUYCkTqDjt568L+bPfLmw==

echo $cr->de('dFUYCkTqDjt568L+bPfLmw=='); //Hello World!
?>
```
