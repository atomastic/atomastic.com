---
title: Usage
template: component
---


```php
use Atomastic\Csrf\Csrf;

// Start PHP session
session_start();

/**
 * Create the csrf object.
 *
 * @param string  $tokenNamePrefix  Prefix for CSRF token name.
 * @param string  $tokenValuePrefix Prefix for CSRF token value.
 * @param int     $strength         Strength.
 *
 * @throws CsrfException
 */
$csrf = new Csrf('__csrf_name',
                 '__csrf_value',
                 32);
```
