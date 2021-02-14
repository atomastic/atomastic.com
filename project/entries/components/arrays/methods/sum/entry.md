---
title: sum
template: component
description: Calculate the sum of values in the current array.
---

```php
/**
 * Calculate the sum of values in the current array.
 *
 * @return float|int Returns the sum as an integer or float.
 */
public function sum()
```

#### Examples

```php
$result = Arrays::create([2, 2, 2])->sum();

print_r($result);
```

#### The above example will output:

```text
6
```
