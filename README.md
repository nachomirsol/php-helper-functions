# PHP Functions

Display PHP errors

```php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```

Capitalize first letter

```php
ucfirst('hello world');

// hello world -> Hello world
```

Capitalize all words

```php
ucwords('hello world');

// hello world -> Hello World
```

Replace values in string

```php
str_replace('-', ' ', 'hello-world');

// hello-world -> hello world
```

Find index of first value in a string

```php
strpos('hello world', 'hello');

// 0
```

Make a string lowercase

```php
strtolower('HELLO world');

// HELLO world -> hello world
```

Make a string uppercase

```php
strtoupper('HELLO world');

// HELLO world -> HELLO WORLD
```

Comma separate values in an array

```php
$arr = [1, 2, 3];

foreach ($arr as $value) {
    $comma_separated = (!empty($comma_separated)) 
    ? $comma_separated .= ', ' . $value 
    : $comma_separated = $value; 
}

// $comma_separated -> "1, 2, 3" (string)
```

Create an array from a string

```php
$arr = 'one two three';
$each = explode(' ', $arr);

// $each[0] -> 'one'
```

Push to an array

```php
foreach ($arr as $value) {
  $newArray[] = [
    'id'   => $value['id'],
    'name' => $value['name'],
  ];
}
```

Create comma separated strings from array

```php
$arr = [1, 2, 3, 4];

foreach ($arr as $val) {
    $newarr .= $prefix . "'". $val . "'";
    $prefix = ', ';
}
// '1', '2', '3', '4'

echo $newarr;
```

Get duplicate values from an array

```php
function get_duplicates( $array ) {
    return array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
}
```

Order multidimensional array by field

```php
function orderMultiDimensionalArray($toOrderArray,$field,$inverse=false){

    $position = array();
    $newRow = array();

    foreach($toOrderArray as $key => $row){
        $position[$key] = $row[$field];
        $newRow[$key] = $row;
    }

    if($inverse){
        arsort($position);
    }else{
        asort($position);
    }

    $returnArray = array();
    
    foreach($position as $key => $pos){
        $returnArray[] = $newRow[$key];
    }

    return $returnArray;
}

$result_db_example = 
Array ( 
        [0] => Array ( [num_demanda] => AI00000310 [cod_articulo] => S310127605 [nombre_articulo] => Proteccion triangular izquierd [unidades] => 2.00 [unidades_entrada] => 2.00 [cod_proveedor] => 145 [fecha_demanda] => 2018-07-10 [fecha_entrega] => 2018-07-10 [servido] => 3 [nombre] => empresa ) 
        [1] => Array ( [num_demanda] => AI00000310 [cod_articulo] => S3803594 [nombre_articulo] => Reductor eje corto SM [unidades] => 1.00 [unidades_entrada] => 1.00 [cod_proveedor] => 145 [fecha_demanda] => 2018-07-10 [fecha_entrega] => 2018-07-10 [servido] => 3 [nombre] => empresa ) 
);
```
