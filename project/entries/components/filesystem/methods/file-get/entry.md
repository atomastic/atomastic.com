---
title: get
template: component
description: Get the contents of a file.
class: file
---

```php
/**
 * Get the contents of a file.
 *
 * @return string|false The file contents or false on failure.
 */
public function get()
```

#### Examples

```php
$content = $filesystem->file('/foo/1.txt')->get();
```
