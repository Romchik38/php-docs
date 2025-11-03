# Classes

- visability
- variance
- static
- abstract
- interface
- traits
- overloading

## Visibility

- Об'єкти одного класу [мають доступ до закритих властивостей та методів](./classes/visibility/01_same_class.php).

## Variance

- visability
- type

### Visavility

- коваріантність      допускається більш загальна зміна    (`private` to `public`)
- контрваріантність   допускається більш конкрентна зміна  (`public` to `private`)

| member                                                     |  type     |
|------------------------------------------------------------|-----------|
| class                                                      |           |
| [property visiblity](./classes/variance/01_property.php)           |  ков      |
| [methods visiblity](./classes/variance/02_method.php)              |  ков      |
| [__construct visiblity](./classes/variance/03_method_construct.php)|  ков/кон  |
| constants visiblity                                        |  ков      |

## Static

- function (closure)

## Function

Анонімні функції можна оголосити в середині методів класу як статичня для того, щоб вони не мали контекст `$this`.

## Abstract

- class
- method
- property

## Interface

- const
- property
- method

## Traits

- const
- property
- method
- static vars, methods, props
- abstract methods

Пріоритетність методів:

- class (найвищий)
- trait
- parent (найнищий)

## Overloading

Dynamic:

- [method](./classes/overloading/01_method.php)
- static method
- property
