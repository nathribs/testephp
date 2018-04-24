<?php
    class Tag {
        private $innerHTML;
        
        public function __construct($innerHTML) {
            $this->innerHTML = $innerHTML;
        }
        
        public function getInnerHTML() {
            return $this->innerHTML;
        }
    }
    
    class P extends Tag {
        
    }
    
    class Div extends Tag {
        
    }
    
    class Spam extends Tag {
        
    }
    
    class Form extends Tag {
        private $type;
        
        public function __construct($innerHTML, $type) {
            parent::Tag($innerHTML);
            $this->type = $type;
        }
        
        public function getType() {
            return $this->type;
        }
    }
?>