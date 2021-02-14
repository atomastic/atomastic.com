---
title: isEmpty
template: component
description: Check whether the array is empty or not.
---

```php
/**
 * Check whether the array is empty or not.
 */
public function isEmpty(): bool
```

##### Example

```php
$arrays = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red']);

if ($arrays->isEmpty()) {
    // do something...
}

```
