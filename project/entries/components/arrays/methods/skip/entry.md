---
title: skip
template: component
description: Skip the first count items.
---

```php
/**
 * Skip the first count items.
 *
 * @param  int  $count Count of first items to skip.
 *
 * @return self Returns instance of The Arrays class.
 */
public function skip(int $count): self
```

#### Examples

```php
$arrays = Arrays::create(['a', 'b', 'c', 'd', 'e'])->skip(2)->toArray();

print_r($arrays);
```
