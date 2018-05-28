<?php 
abstract class AbstractClass 
{
//Force Extending class to define this method 
abstract protected function getVal();
abstract protected function prefixVal($prefic); 
// Common method 
public function printOut() 
{
  print $this->getVal(). "\n";
}

} 

class ConcreteClass1 extends AbstractClass 
{
  protected function getVal() 
  {
     return "ConcreteClass1";
  }
  public function prefixVal($prefix) {
    return "{$prefix}ConcreteClass1";
  }
} 

$class1 = new ConcreteClass1();
$class1->printOut();
echo $class1->prefixVal('Test1_')."\n"; 
