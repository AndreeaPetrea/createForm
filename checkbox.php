<?php

    //Create checkbox field
    class Checkbox {
        private $id, $name, $label, $checked;
        public function __construct($name, $id="", $label="", $checked="") {
            $this->name = $name;
            $this->id = $id;
            $this->label = $label;
            $this->checked = $checked;
        }

        public function __toString() {
            return "<input type='checkbox' id='{$this->id}' name='{$this->name}' {$checked} value='{$this->name}'>
                <label for='{$this->name}'> {$this->label}</label><br>";
        }
    }
?>
