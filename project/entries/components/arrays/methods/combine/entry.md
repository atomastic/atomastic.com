---
title: combine
template: component
description: Create an array using the current array as keys and the other array as values.
---

```php
/**
 * Create an array using the current array as keys and the other array as values.
 *
 * @param array $array Values array
 *
 * @return self Returns instance of The Arrays class.
 */
public function combine(array $array): self
```

##### Example

```php
$arrays = Arrays::create(['green', 'red', 'yellow'])->combine(['avacado', 'apple', 'banana'])->toArray();

print_r($arrays);
```

##### The above example will output:

```text
Array
(
    [green] => avacado
    [red] => apple
    [yellow] => banana
)
```
