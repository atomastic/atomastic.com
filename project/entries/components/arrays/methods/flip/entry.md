---
title: flip
template: component
description: Exchanges all keys of current array with their associated values.
---

```php
/**
 * Exchanges all keys of current array with their associated values.
 *
 * @return self Returns instance of The Arrays class.
 */
public function flip(): self
```

#### Examples

```php
$arrays = Arrays::create(['oranges', 'apples', 'pears'])->flip()->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [oranges] => 0
    [apples] => 1
    [pears] => 2
)
```
