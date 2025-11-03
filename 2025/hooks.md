# Hooks

new in 8.4

- [віртуальне](./hooks/04_virtual_readonly.php)
- реальне

Можуть бути [`final`](./hooks/05_final.php) і їх неможливо перевизначити.

Доступ до батьківського класу [`parent::$propName::get()`](./hooks/06_parent.php).

## Віртуальне

- якщо сам хук не посилається на себе.
- [неможна записати](./hooks/04_virtual_readonly.php), якщо немає `set`
