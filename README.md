# Metro-UI-Construction
Basic constructions for MetroUI(https://github.com/olton/Metro-UI-CSS)

Just insert before <!DOCTYPE html>

```php
   <?php include "MetroTiles.php";?>
```

And download MetroTiles.php to your project.

#Example for Tiles
For small icon 1x1 - getTile($link, $bgColor, $textColor, $icon);
```php
<?php MetroTiles::getTileSmall("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg");?>
```

For normal icon 2x2 - getTile($link, $bgColor, $textColor, $icon, $label);
```php
<?php MetroTiles::getTile("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg", "GitHub");?>
```

For wide icon 4x2 - getTile($link, $bgColor, $textColor, $icon, $label);
```php
<?php MetroTiles::getTileWide("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg", "GitHub");?>
```

For large icon 4x4 - getTile($link, $bgColor, $textColor, $icon, $label)
```php
<?php MetroTiles::getTileLarge("https://github.com/RedFraction", "bg-indigo", "fg-white", "octocat.svg", "GitHub");?>
```

#Wait for updates =)
