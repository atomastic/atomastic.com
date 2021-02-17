---
title: isWritable
template: component
description: Determine if the given path is writable.
class: file
---

```php
/**
 * Determine if the given path is writable.
 *
 * @return bool Returns TRUE if the given path exists and is writable, FALSE otherwise.
 */
public function isWritable(): bool
```

#### Examples

```php
if ($filesystem->isWritable('/foo/1.txt')) {
    // do something...
}
```
