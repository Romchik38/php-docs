# Variance

- visability
- type

## Visavility

- коваріантність      допускається більш загальна зміна    (`private` to `public`)
- контрваріантність   допускається більш конкрентна зміна  (`public` to `private`)

| member                                                     |  type     |
|------------------------------------------------------------|-----------|
| class                                                      |           |
| [property visiblity](./variance/01_property.php)           |  ков      |
| [methods visiblity](./variance/02_method.php)              |  ков      |
| [__construct visiblity](./variance/03_method_construct.php)|  ков/кон  |
| constants visiblity                                        |  ков      |
