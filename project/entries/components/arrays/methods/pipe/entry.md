---
title: pipe
template: component
description: Passes the array to the given callback and return the result.
---

```php
/**
 * Passes the array to the given callback and return the result.
 *
 * @param Closure $callback Function with arrays as parameter which returns arbitrary result.
 *
 * @return mixed Result returned by the callback.
 */
public function pipe(Closure $callback)
```

#### Examples

```php
$arrays = new Arrays([1, 2, 3]);

$arrays->pipe(static function ($arrays) {
    return $arrays->last();
}));

print_r(arrays);
```

##### The above example will output:

```text
3
```
