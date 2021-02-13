---
title: current
template: component
description: Gets the element of the array at the current internal iterator position.
---


```php
/**
 * Gets the element of the array at the current internal iterator position.
 *
 * @return mixed Returns the value of the array element that's currently
 *               being pointed to by the internal pointer. It does not move
 *               the pointer in any way. If the internal pointer points beyond
 *               the end of the elements list or the array is empty, returns FALSE.
 */
public function current()
```

##### Example

```php
$arrays = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'])->current();

print_r($arrays);
```

##### The above example will output:

```text
blue
```
