---
title: intersectAssoc
template: component
description: Compute the current array values with additional index check.
---

```php
/**
 * Compute the current array values with additional index check.
 *
 * @param array $array Array for intersect.
 */
public function intersectAssoc(array $array): self
```

#### Examples

```php
$arrays = Arrays::create(["a" => "green", "b" => "brown", "c" => "blue", "red"])
                ->intersectAssoc(["a" => "green", "b" => "yellow", "blue", "red"])
                ->toArray();

print_r($arrays);
```

##### The above example will output:

```text
Array
(
    [a] => green
)
```
