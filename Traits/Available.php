<?php
trait Available
{
    public $available;

    public function get_available($available)
    {
        $this->available = $available;
    }
}