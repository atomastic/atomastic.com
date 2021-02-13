---
title: copy
template: component
description: Creates a new Arrays object with the same items.
---


```php
/**
 * Creates a new Arrays object with the same items.
 *
 * @return self Returns instance of The Arrays class.
 */
public function copy(): self
```

##### Example

```php
$foo = Arrays::create(['foo', 'bar']);
$bar = $foo->copy();
```
