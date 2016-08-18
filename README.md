# Metro-UI-Construction
Basic constructions for MetroUI writen on php

Just insert before <!DOCTYPE html>

```php
   <?php include "MetroTiles.php";?>
```

And download MetroTiles.php to your project.

#Example for Tiles
For small icon 1x1 -
```php
<?php MetroFrame::getTileSmall("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg");?>
```

For normal icon 2x2 -
```php
<?php MetroFrame::getTile("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg", "GitHub");?>
```

For wide icon 4x2 -
```php
<?php MetroFrame::getTileWide("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg", "GitHub");?>
```

For large icon 4x4 -
```php
<?php MetroFrame::getTileLarge("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg", "GitHub");?>
```
