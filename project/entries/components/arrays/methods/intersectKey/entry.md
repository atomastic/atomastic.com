---
title: intersectKey
template: component
description: Compute the current array using keys for comparison which present in the given one.
---

```php
/**
 * Compute the current array using keys for comparison which present in the given one.
 *
 * @param array $array Array for intersect.
 */
public function intersectKey(array $array): self
```

##### Example

```php
$arrays = Arrays::create(['blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4])
                ->intersectKey(['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8])
                ->toArray();

print_r($arrays);
```

##### The above example will output:

```text
Array
(
    [blue] => 1
    [green] => 3
)
```
