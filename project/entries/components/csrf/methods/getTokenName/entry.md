---
title: getTokenName
template: component
description: Get token name.
---

```php
/**
 * Get token name.
 *
 * @return string
 */
public function getTokenName(): string
```

#### Examples

```html
<input type="hidden" name="<?php echo $csrf->getTokenName(); ?>" value="<?php echo $csrf->getTokenValue(); ?>"></input>
```
