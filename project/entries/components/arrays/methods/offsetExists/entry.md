---
title: offsetExists
template: component
description: Whether an offset exists.
---

```php
/**
 * Whether an offset exists.
 *
 * @param mixed $offset An offset to check for.
 */
public function offsetExists($offset): bool
```

##### Example

```php
$arrays = Arrays::create(['items' => ['foo' => 'Foo', 'bar' => 'Bar']]);

if ($arrays->offsetExists('items.foo')) {
    // do something...
}

if (isset($arrays['items.bar'])) {
    // do something...
}
```
