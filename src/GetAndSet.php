<?php

trait GetAndSet {

    public function get($name) {
        return $this->$name;
    }

    public function set($name, $value) {
        $this->$name = $value;
    }

    public function add($name, $value) {
        if ($this->$name->contains($value)) return;
        $this->$name[] = $value;
    }

    public function remove($name, $value) {
        return $this->$name->removeElement($value);
    }
}
