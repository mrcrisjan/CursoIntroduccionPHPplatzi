<?php  /* Como solo contiene codigo de php, no hace falta cerrarlo */

class BaseElement {
    protected $title; //public quiere decir que esa variable se puede acceder publicamente
    public $description; //private 
    public $visible = true;
    public $months;
  
    public function __construct($title, $description) {
      $this->setTitle($title);
      $this->description = $description;
    }
  
    // __construct es un metodo magico, averiguar acerca de los otros
  
    public function setTitle ($t) {
      if($t == '') {
        $this->title = 'N/A';
      } else {
        $this->title = $t;
      }
    }
  
    public function getTitle () {
      return $this->title;
    }
  
    public function getDurationAsString() {
      $years = floor($this->months / 12);
      $extraMonths = $this->months % 12;
    
    
      if ($years < 1) {
        return "$extraMonths months";
      }
      else if ($extraMonths === 0) {
        return "$years years";
      }
      else {
        return "$years years and $extraMonths months";
      }
    }
  
  }