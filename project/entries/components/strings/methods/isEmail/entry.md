---
title: isEmail
template: component
description: Returns true if the string is email and it is valid, false otherwise.
---

```php
/**
 * Returns true if the string is email and it is valid, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isEmail(): bool
```

#### Examples

```php
if (Strings::create('awilum@atomastic.com')->isEmail()) {
    // do something...
}
```
