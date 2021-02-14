---
title: except
template: component
description: Return slice of an array with just a given keys.
---

```php
/**
 * Return slice of an array with just a given keys.
 *
 * @param array $keys List of keys to return.
 *
 * @return self Returns instance of The Arrays class.
 */
public function except(array $keys): self
```

##### Example

```php
$arrays = Arrays::create(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5])
                    ->except(['b', 'e']);

$result = $arrays->toArray();

print_r($result);
```

##### The above example will output:

```text
Array
(
    [a] => 1
    [c] => 3
    [d] => 4
)
```
