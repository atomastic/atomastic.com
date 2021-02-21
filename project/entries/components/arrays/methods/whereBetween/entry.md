---
title: whereBetween
template: component
description: Filters the array items by the given key is between the given values.
---

<h2 class="font-normal text-lg">
Filters the array items by the given key is between the given values.
</h2>

```php
/**
 * Filters the array items by the given key is between the given values.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereBetween(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([['price' => '100'], ['price' => '150'], ['price' => '200']])
    ->whereBetween('price', [150, 200])
    ->toArray();
);
```
