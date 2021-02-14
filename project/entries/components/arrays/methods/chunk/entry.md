---
title: chunk
template: component
description: Create a chunked version of current array.
---


```php
/**
 * Create a chunked version of current array.
 *
 * @param int  $size         Size of each chunk.
 * @param bool $preserveKeys Whether array keys are preserved or no.
 *
 * @return self Returns instance of The Arrays class.
 */
public function chunk(int $size, bool $preserveKeys = false): self
```

##### Example

```php
$arrays = Arrays::create(['a', 'b'])->chunk(2)->toArray();

print_r($arrays);
```

##### The above example will output:

```text
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

)
```