<?php
class MetroTiles {

/*
 *  Add tile 1x1
 */
function getTileSmall($link, $bgColor, $textColor, $icon, $label){
echo '<div class="tile-small ' . $bgColor . ' ' . $textColor . ' data-role="tile" onclick="location.href = \'' . $link . '\'"> 
<div class="tile-content iconic">
<img src="'. $icon .'" class="icon">
</div>
</div>';
}

/*
 *  Add tile 2x2
 */
function getTile($link, $bgColor, $textColor, $icon, $label){
echo '<div class="tile ' . $bgColor . ' ' . $textColor . ' data-role="tile" onclick="location.href = \'' . $link . '\'">
<div class="tile-content iconic">
<img src="'. $icon .'" class="icon">
</div>
<span class="tile-label">' . $label . '</span>
</div>';
}

/*
 *  Add tile 4x2
 */
function getTileWide($link, $bgColor, $textColor, $icon, $label){
echo '<div class="tile-wide ' . $bgColor . ' ' . $textColor . ' data-role="tile" onclick="location.href = \'' . $link . '\'">
<div class="tile-content iconic">
<img src="'. $icon .'" class="icon">
</div>
<span class="tile-label">' . $label . '</span>
</div>';
}
    
/*
 *  Add tile 4x4
 */
function getTileLarge($link, $bgColor, $textColor, $icon, $label){
echo '<div class="tile-large ' . $bgColor . ' ' . $textColor . ' data-role="tile" onclick="location.href = \'' . $link . '\'">
<div class="tile-content iconic">
<img src="'. $icon .'" class="icon">
</div>
<span class="tile-label">' . $label . '</span>
</div>';
}
}
?>
