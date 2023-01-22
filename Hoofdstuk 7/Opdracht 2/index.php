<?php


class Auto {
    private $merk;
    private $model;
    private $prijs;
    private $url;
  
    public function __construct($merk, $model, $prijs, $url) {
        $this->merk = $merk;
        $this->model = $model;
        $this->prijs = $prijs;
        $this->url = $url;
    }
  
    public function getMerk() {
        return $this->merk;
    }
  
    public function getModel() {
        return $this->model;
    }
  
    public function getPrijs() {
        return $this->prijs;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function geefGas() {
        return "Vroom";
    }
    public function rem() {
        return "RRRRR";
    }
}


?>