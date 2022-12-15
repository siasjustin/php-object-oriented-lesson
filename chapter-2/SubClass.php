<?php
class SubClass extends BaseClass
{
  public function getParentProtectedProperty():string
  {
    return $this->protectedProperty;
  }
  public function getParentPrivateProperty():string
  {
    return $this->privateProperty;
  }
}