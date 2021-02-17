---
title: whereIn
template: component
description: Filters the array items by the given key value pair.
---

```php
/**
 * Filters the array items by the given key value pair.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereIn(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([
                0 => ['title' => 'FòôBar'],
                1 => ['title' => 'BarFòô'],
            ])->whereIn('title', ['FòôBar'])
              ->toArray();
);
```
