<?php
require_once ('includes/func_get_totals.php');

class getTotalsTest extends PHPUnit_Framework_TestCase{
    /**
     * test that the user's data shows sums correctly
     */
    public function testCleanRun(){
        $data = array(
                  "2012-11-03 13:00:54" => array("burpees"=>5),
                  "2012-11-04"          => array("burpees"=>5),
                  "2012-11-05"          => array("burpees"=>5),
                );

        $result = get_totals($data);
        $expected = array('burpees'=>15);
        
        $this->assertEquals($expected, $result, 'array totals match');    
    }
}
