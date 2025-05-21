<?php
class Shape
{
    protected $ample;
    protected $alt;

    public function set($ample, $alt)
    {
        $this->ample = $ample;
        $this->alt = $alt;
    }

    public function getAmple()
    {
        return $this->ample;
    }
    public function getAlt($alt) {
        return $this->alt;
    }
}

  class Triangle extends Shape
    {
        public function area()
        {
            return ($this->ample * $this->alt) / 2;
        }
    }

    class Rectangle extends Shape
    {
        public function area()
        {
            return $this->ample * $this->alt;
        }
    }




$triangle = new Triangle();
$triangle->set(5, 10);
$rectange = new Rectangle();
$rectange->set(5, 10);

echo "Àrea del triangle: " . $triangle->area() . "\n";
echo "Àrea del rectangle: " . $rectange->area() . "\n";

?>





