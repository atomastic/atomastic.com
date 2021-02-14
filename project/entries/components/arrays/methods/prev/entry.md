---
title: prev
template: component
description: Rewind the internal iterator position and returns this element.
---

```php
/**
 * Rewind the internal iterator position and returns this element.
 */
public function prev()
```

##### Example

```php
$arrays = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'])->prev()

print_r($arrays);
```

##### The above example will output:

```text
false
```