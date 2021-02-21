---
title: getTokenValue
template: component
description: Get token value.
---

<h2 class="font-normal text-lg">
Get token value.
</h2>

```php
/**
 * Get token value.
 *
 * @return string
 */
public function getTokenValue(): string
```

#### Examples

```html
<input type="hidden" name="<?php echo $csrf->getTokenName(); ?>" value="<?php echo $csrf->getTokenValue(); ?>" />
```
