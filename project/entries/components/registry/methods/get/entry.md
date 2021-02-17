---
title: get
template: component
description: Get item from the registry.
---

```php
/**
 * Get item from the registry.
 *
 * @param  string $key     The name of the item to fetch.
 * @param  mixed  $default Default value
 */
public function get(string $key, $default = null)
```

#### Examples

```php
$title = $registry->get('movies.the-thin-red-line.title', 'The Thin Red Line');
```
