<?php

namespace shevernitskiy\SberQr;

class SberQr
{
    private $a = [];

    function __construct($array)
    {
        $this->a = $array;
    }

    public function asStr()
    {
        $tostr = [];
        foreach ($this->a as $p => $v) {
            $tostr[] = ($p) ? $p.'='.$v : $v;
        }
        $str = implode('|', $tostr);
        return $str;
    }

    public function asArray()
    {
        return $this->a;
    }

    public function asObj()
    {
        return (object)$this->a;
    }
}
