<?php namespace components\gallery; if(!defined('TX')) die('No direct access.'); ?>

<div id="map_canvas" width="600" height="500"></div>

<h2>Bereken uw route</h2>

<form id="routeform">
  Plaats of postcode:
  <input type="text" name="routefrom" id="routefrom"/>
  <input type="submit" value="Plan uw route"/>
</form>

<div id="directions"></div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=nl"></script>
<script type="text/javascript" src="site/components/map/includes/route_map.js"></script>
<script type="text/javascript">

$(document).ready(function()
{
  
  initialize(
    <?php echo $data->x->otherwise('-27.12148'); ?>,
    <?php echo $data->y->otherwise('-109.366865'); ?>
  );
  
});

</script>
<style>
  #map_canvas {
    height:500px;
    width:600px;
 }
 #directions {
   width:600px;
 }
</style>
