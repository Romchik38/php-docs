# Arrays

- array,
- list (vector),
- hash table (an implementation of a map),
- dictionary,
- collection
- stack,
- queue

```php
$array = [10, 20, 30, 40];              // index, one type
$list  ;                                // не згоден
$hash  ;                                // не доступно, тільки під капотом dictionary
$dictionary= ['k1' => 1, 'k2' => 2]     // string
$collection ;                           // загальне поняття
array_pop($stack) || array_push($stack) // можливість додати в кінець масиву і забрати з кінця
array_push($queue) || array_shift($queue) // моливість додати в кінець і забрати з початку
```

## Key

- string, якщо вона як int.
- float - дробова частина відкидується
- bool - true 1, false - 0
- null - ''

## Об'єднання

Всі індекси з $a та додаткові індекси з $b.

$a + $b

### Функції

array_merge - string keys перезаписуються, індекси додаються

## Порівняння

$a == $b
$a === $b           той же порядок і тіж самі об'єкти

## Двосвязний список

`SplDoublyLinkedList`

## Поведінка

List (packed array)         послідовні ключи
Hash (mixed array)          Рядкові або непослідовні ключі

List швидший і меньше пам'яті.
