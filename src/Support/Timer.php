<?php

namespace PragmaRX\Health\Support;
use SebastianBergmann\Timer\Timer;

class Timer
{    
    protected $timer;
    public static function start()
    {
        $this->timer = new Timer;
        return $this->timer->start();
/*        return class_exists('SebastianBergmann\Timer\Timer')
            ? \SebastianBergmann\Timer\Timer::start()
            : \PHP_Timer::start();
*/            
    }

    public static function stop()
    {
        $this->timer = new Timer;
        return $this->timer->stop();
        /*
        return class_exists('SebastianBergmann\Timer\Timer')
            ? \SebastianBergmann\Timer\Timer::stop()
            : \PHP_Timer::stop();
        */
    }
}
