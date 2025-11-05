<?php

class RobotWorker implements IWorkable, IReacharching
{
  public function work()
  {
    return "robot is working ";
  }
  public function recharge()
  {
    return "robot is recharging ";
  }
}
