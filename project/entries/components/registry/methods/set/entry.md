---
title: set
template: component
description: Set an registry data to a given value using "dot" notation.
---

```php
/**
 * Set an registry data to a given value using "dot" notation.
 *
 * If no key is given to the method, the entire registry data will be replaced.
 *
 * @param  string $key   Key
 * @param  mixed  $value Value
 */
public function set(string $key, $value): self
```

#### Examples

```php
$registry->set('movies.the-thin-red-line.title', 'The Thin Red Line');
```
