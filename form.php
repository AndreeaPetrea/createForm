<?php

    //Create entire form
    class Form {
        public $formFields = array();
        private $action, $method, $target, $name, $autocomplete, $id;
        public function __construct($action="/", $method="GET", $target="_self", $name="practice", $autocomplete="on", $id="") {
            $this->action = $action;
            $this->method = $method;
            $this->target = $target;
            $this->name = $name;
            $this->autocomplete = $autocomplete;
            $this->id = $id;
        }
        //add all form fields into an array
        public function addField($field) {
            array_push($this->formFields, $field);
        }
        //display form
        public function display() {
            print "<form name='{$this->name}' id='{$this->id}' action='{$this->action}' method='{$this->method}' target='{$this->target}' autocomplete='{$this->autocomplete}'>";
            print implode(" ", $this->formFields);
            print "<input type='submit' value='Submit'></form>";
        }

    }
?>