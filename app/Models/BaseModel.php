<?php

namespace App\Models;

class BaseModel
{
    public function __construct(array $data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }
}