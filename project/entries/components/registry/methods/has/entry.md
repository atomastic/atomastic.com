---
title: has
template: component
description: Determine if the registry has a value for the given name.
---

```php
/**
 * Determine if the registry has a value for the given name.
 *
 * @param  string|array $keys The keys of the registry item to check for existence.
 */
public function has($keys): bool
```

#### Examples

```php
if ($registry->has('movies.the-thin-red-line')) {
    // Do something...
}
```
