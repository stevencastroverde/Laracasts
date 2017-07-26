<?php

class Task {
    protected $description;
    protected $completed = false;

    public function isComplete() {
        return $this->completed;
    }
    public function taskCompleted() {
        $this->completed = true;
    }
    public function getDescription(){
        return $this->description;
    }
};