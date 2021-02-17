---
title: offsetSet
template: component
description: Assign a value to the specified offset.
---

```php
/**
 * Assign a value to the specified offset.
 *
 * @param mixed $offset The offset to assign the value to.
 * @param mixed $value  The value to set.
 */
public function offsetSet($offset, $value)
```

#### Examples

```php
$arrays = Arrays::create();

$arrays->offsetSet('items.foo', 'Foo');
$arrays['items.bar'] = 'Bar';
```
