---
title: customSortKeys
template: component
description: Sorts the array keys with a user-defined comparison function and maintain index association.
---

```php
/**
 * Sorts the array keys with a user-defined comparison function and maintain index association.
 *
 * @return self Returns instance of The Arrays class.
 */
public function customSortKeys(callable $callback): self
```

#### Examples

```php
$arrays = Arrays::create(['b', 'a', 'c'])
              ->customSortKeys(static function ($a, $b) {
                if ($a === $b) {
                    return 0;
                }

                  return $a < $b ? -1 : 1;
              })->toArray();

print_r($arrays);
```

##### The above example will output:

```text
Array
(
    [0] => b
    [1] => a
    [2] => c
)
```
