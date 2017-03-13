<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 13.03.2017
 * Time: 16:21
 */

class AcceptanceHelper{

    public function seeContentIsLong($content, $trigger_length = 100){
        $this->assertGreaterThen($trigger_length, strlen($content));
    }
}