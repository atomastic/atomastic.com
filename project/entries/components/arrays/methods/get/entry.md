---
title: get
template: component
description: Get an item from an array using "dot" notation.
---

```php
/**
 * Get an item from an array using "dot" notation.
 *
 * @param  string|int|null $key     Key
 * @param  mixed           $default Default value
 *
 * @return mixed Item from an array.
 */
public function get($key, $default = null)
```

##### Example

```php
$arrays = Arrays::create([
                        'movies' => [
                           'the_thin_red_line' => [
                               'title' => 'The Thin Red Line',
                               'directed_by' => 'Terrence Malick',
                               'produced_by' => 'Robert Michael, Geisler Grant Hill, John Roberdeau',
                               'decription' => 'Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.'
                           ],
                           'bad_times_at_the_el_royale' => [
                               'title' => 'Bad Times at the El Royale',
                               'directed_by' => 'Drew Goddard',
                               'produced_by' => 'Drew Goddard, Steve Asbell',
                               'decription' => 'Early 1970s. Four strangers check in at the El Royale Hotel. The hotel is deserted, staffed by a single desk clerk. Some of the new guests reasons for being there are less than innocent and some are not who they appear to be.'
                           ]
                        ]
                    ]);

$title = $arrays->get('movies.the_thin_red_line.title');

print_r($title);
```

##### The above example will output:

```text
The Thin Red Line
```
