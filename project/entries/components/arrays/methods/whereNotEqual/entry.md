---
title: whereNotEqual
template: component
description: Filters the array items by the given key is not equal given value.
---

```php
/**
 * Filters the array items by the given key is not equal given value.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereNotEqual(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([
                0 => ['title' => 'FòôBar'],
                1 => ['title' => 'BarFòô'],
            ])->whereNotEqual('title', 'BarFòô')
              ->toArray();
);
```
