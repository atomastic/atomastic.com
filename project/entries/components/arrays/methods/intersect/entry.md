---
title: intersect
template: component
description: Compute the current array values which present in the given one.
---

```php
/**
 * Compute the current array values which present in the given one.
 *
 * @param array $array Array for intersect
 */
public function intersect(array $array): self
```

#### Examples

```php
$arrays = Arrays::create(["a" => "green", "red", "blue"])
                ->intersect(["b" => "green", "yellow", "red"])
                ->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [a] => green
    [0] => red
)
```
