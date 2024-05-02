<?php
function new_table($array)
{
  $table = "";
  foreach ($array as $item) {
    $table .= "<tr>
    <td>{$item['name']}</td>
    <td>{$item['description']}</td>
    <td>{$item['parking']}</td>
    <td>{$item['vote']}</td>
    <td>{$item['distance_to_center']}</td>

  </tr>";
  }
  return $table;
}
;