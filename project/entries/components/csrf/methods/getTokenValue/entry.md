---
title: getTokenValue
template: component
description: Get token value.
---

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
