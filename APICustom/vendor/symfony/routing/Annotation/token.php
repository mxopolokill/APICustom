<?php

namespace Symfony\Component\Routing\Annotation;


class TOKEN
{
    private $TOKEN = "T2RE132201465140261546546548464";

    public function __construct(string $TOKEN)
    {
        $this->TOKEN = $TOKEN;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->TOKEN;
    }
}