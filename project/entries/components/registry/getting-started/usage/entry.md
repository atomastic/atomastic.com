---
title: Usage
template: component
---

```php
use Atomastic\Registry\Registry;

// Using public static method getInstance()
$registry = Registry::getInstance();

// Using global helper function registry() thats returns Registry::getInstance()
$registry = registry();
```

### Extending

Registry are "macroable", which allows you to add additional methods to the Registry class at run time. For example, the following code adds a customMethod method to the Registry class:<br><br>

```php
use Atomastic\Registry\Registry;
use Atomastic\Macroable\Macroable;

Registry::getInstance()->set('foo', 'bar');

Registry::macro('customMethod', function() {
    return $this->count();
});

echo Registry::getInstance()->customMethod();
```

#### The above example will output:

```text
1
```

Registry Component is extending [Arrays Component](https://atomastic.com/components/arrays). All methods of Arrays Component are available when using Registry Component in your projects for manipulations with Registry.<br><br>

#### Examples

```php
use Atomastic\Registry\Registry;

$registry = Registry::getInstance();

$registry->set('foo', 'bar');
$registry->set('bar', 'foo');

echo $registry->count();
```

#### The above example will output:

```text
2
```
