## Workshop PHP & MySQL - Escuela Da Vinci


### Clone / Download

```bash
git clone https://github.com/fgilio/Workshop-PHP-MySQL.git
```

Or you can just [download](https://github.com/fgilio/Workshop-PHP-MySQL/archive/master.zip)
this repository.

### Basic Concepts

- You can use "include" to help modularize your code in various smaller files, thus making it easier to read:
- *Podés usar "include" para modularizar tu código en pequeños archivos, volviendolo más fácil de leer:*
```php
//vars.php
<?php

$color = 'yellow';
$fruit = 'banana';

?>
```
```php
//test.php
<?php

include 'vars.php';

echo "$color $fruit"; // yellow banana

?>
```
More info: [php.net](php.net/manual/en/function.include.php)
Más info: [php.net](php.net/manual/es/function.include.php)


- Functions can return values:
- *Las funcionen pueden retornar valores:*
```php
<?php
function sum($num)
{
    return $num + $num;
}
echo sum(4);   // 8
?>
```
More info: [php.net](http://php.net/manual/en/functions.returning-values.php)
Más info: [php.net](http://php.net/manual/es/functions.returning-values.phpp)


### Contact

* Follow [@GilioFranco on Twitter](https://twitter.com/GilioFranco)
* Network [Web](http://fgilio.com/)


### LICENSE

Workshop PHP & MySQL - Escuela Da Vinci is licensed under the MIT Open Source license. For more information, see the LICENSE file in this repository.
