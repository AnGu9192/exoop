<?php
class Phone {

    const SCREEN_SIZE = "7 inch";

    static public $skinColor = "Red";
    public $model = "Redmi";

    protected $battery = '5000MAH';

    private $imei = '123242354354';

    public function getImei(){
        return $this->imei;
    }

    public function setImei($imei){
        $this->imei = $imei;
    }

}