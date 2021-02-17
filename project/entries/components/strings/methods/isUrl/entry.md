---
title: isUrl
template: component
description: Returns true if the string is url and it is valid, false otherwise.
---

```php
/**
 * Returns true if the string is url and it is valid, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isUrl(): bool
```

#### Examples

```php
if (Strings::create('https://atomastic.com')->isUrl()) {
    // do something...
}
```
