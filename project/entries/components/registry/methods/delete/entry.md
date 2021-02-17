---
title: delete
template: component
description: Delete a items from the registry.
---

```php
/**
 * Delete a items from the registry.
 *
 * @param  array|string $keys Keys
 */
public function delete($keys): self
```

#### Examples

```php
$registry->delete('movies.the-thin-red-line');
```
