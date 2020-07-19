<?php

namespace PragmaRX\Health\Support;
use SebastianBergmann\Timer\Timer as SebTimer;

class Timer
{    
    protected $timer;
    public static function start()
    {
        $this->timer = new SebTimer;
        return $this->timer->start();
/*        return class_exists('SebastianBergmann\Timer\Timer')
            ? \SebastianBergmann\Timer\Timer::start()
            : \PHP_Timer::start();
*/            
    }

    public static function stop()
    {
        $this->timer = new SebTimer;
        return $this->timer->stop();
        /*
        return class_exists('SebastianBergmann\Timer\Timer')
            ? \SebastianBergmann\Timer\Timer::stop()
            : \PHP_Timer::stop();
        */
    }
}
