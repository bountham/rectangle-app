<?php
    class Rectangle
    {
        private $length;
        private $width;

        function __construct($length, $width)
        {
            $this->length = $length;
            $this->width = $width;
        }
        //end constructor

        function isSquare()
        {
            if($this->length == $this->width) {
                return true;
            } else {
                return false;
            }
        }
        //end isSquare()

        function getArea()
        {
            return $this->length * $this->width;
        }
        //end getArea()

        function setLength($new_length)
        {
            $this->length = (float) $new_length;
        }
        //end setLength()

        function getLength()
        {
            return $this->length;
        }
        //end getLength()

        function setWidth($new_width)
        {
            $this->width = (float) $new_width;
        }
        //end setWidth()

        function getWidth()
        {
            return $this->width;
        }
        //end getWidth()
    }
?>
