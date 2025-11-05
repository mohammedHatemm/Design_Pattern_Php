<?php
class RobotWorker implements Iworker
{
  public function work()
  {
    return "robot is working ";
  }

  public function recharge()
  {
    return "robot is recharging ";
  }

  public function sleep()
  {
    return null;
  }
  public function eat()
  {
    return null;
  }
}
