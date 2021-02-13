---
title: createFromString
template: component
description: Create a new arrayable object from the given string.
---

```php
/**
 * Create a new arrayable object from the given string.
 *
 * @param string $string    Input string.
 * @param string $separator Elements separator.
 *
 * @return self Returns instance of The Arrays class.
 */
public static function createFromString(string $string, string $separator): self
```

##### Example

```php
$arrays = Arrays::createFromString('foo,bar', ',');
```
