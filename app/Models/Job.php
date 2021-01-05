<?php

require_once 'BaseElement.php';

class Job extends BaseElement {
    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        parent::__construct($newTitle, $description);
        
    }

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;

        return "Job duration: $years years and $extraMonths months";
    }
};