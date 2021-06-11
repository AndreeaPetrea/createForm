<?php

    //Create input field
    class InputField {
        private $id, $name, $label, $type;
        public function __construct($name, $id="", $label="", $type="text") {
            $this->name = $name;
            $this->id = $id;
            $this->label = $label;
            $this->type = $type;
        }
        public function __toString() {
            return "<label>{$this->label} </label> <input type='{$this->type}' id='{$this->id}' name='{$this->name}' value=''><br>";
        }
    }
?>