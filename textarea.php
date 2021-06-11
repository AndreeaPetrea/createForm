<?php

    //Create textarea field
    class Textarea {
        private $id, $name, $label, $row, $col;
        public function __construct($name, $id="", $label="", $row="5", $col="60" ) {
            $this->name = $name;
            $this->id = $id;
            $this->label = $label;
            $this->row = $row;
            $this->col = $col;
        }
        public function __toString() {
            return "<label>{$this->label} </label> <textarea id='{$this->id}' name='{$this->name}' rows='{$this->row}' cols='{$this->col}'></textarea><br>";
        }
    }
?>