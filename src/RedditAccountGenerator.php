<?php

  namespace RedditAccountGenerator;
    //test
  class RedditAccountGenerator {
    public $prefix;

    public function getUsername() {
        return $this->prefix.uniqid();
    }

    public function setPrefix($prefix){
        $this->prefix = $prefix;
    }
    
    public function generate() {
      return $this->getUsername();
    }
  }