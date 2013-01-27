<?php

namespace Carew\Event;

use Symfony\Component\EventDispatcher\GenericEvent;

class CarewEvent extends GenericEvent
{
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}
