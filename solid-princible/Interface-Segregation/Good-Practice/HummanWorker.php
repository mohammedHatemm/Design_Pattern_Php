<?php
class HummanWorker implements IWorkable, ISleeping, IEating
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
}
