<?php

class HummanWorker implements Iworker
{

  public function work()
  {
    return "I am working";
  }
  public function sleep()
  {
    return "I am sleeping";
  }
  public function eat()
  {
    return "I am eating";
  }
  public function recharge()
  {
    return null;
  }
}
