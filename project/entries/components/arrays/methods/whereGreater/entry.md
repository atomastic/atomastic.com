---
title: whereGreater
template: component
description: Filters the array items by the given key is greater the given value.
---

<h2 class="font-normal text-lg">
Filters the array items by the given key is greater the given value.
</h2>

```php
/**
 * Filters the array items by the given key is greater the given value.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereGreater(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([
                0 => ['price' => 10],
                1 => ['price' => 20],
            ])
            ->whereGreater('price', 10)
            ->toArray();
);
```
