<?php

class Validator {

	protected $pattern;

	public function isValid($x){
		if (!preg_match($this->pattern, $x)) {
    		return false;
		} else {
    		return true;
		}

	}

} 

