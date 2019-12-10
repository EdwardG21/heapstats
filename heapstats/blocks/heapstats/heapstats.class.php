<?php
namespace Block;
/**
 * Heap Stats - Main Class
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
class HeapStats extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                $heap_tracking_number = $this->config['str_heap_tracking_number'];			
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
