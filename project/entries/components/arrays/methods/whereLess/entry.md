---
title: whereLess
template: component
description: Filters the array items by the given key is less the given value.
---


```php
/**
 * Filters the array items by the given key is less the given value.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereLess(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([
                0 => ['price' => 10],
                1 => ['price' => 20],
            ])
            ->whereLess('price', 20)
            ->toArray();
);
```
