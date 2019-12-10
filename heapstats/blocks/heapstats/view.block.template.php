<?php
/**
 * Heap Stats - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * 
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package heapstats
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($heap_tracking_number): ?>
    
    <script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};//(<?= ___h($clicky_tracking_number) ?>)
      heap.load(<?=___h($heap_tracking_number) ?>);
</script>
<?php else: ?>
    <x-ui:alert type="danger">
        <?= ___('Heap tracking number has not been provided') ?>
    </x-ui:alert>

<?php endif ?>