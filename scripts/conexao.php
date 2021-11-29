<?php

class Estoque extends SQLite3
{
    function __construct()
    {
        $this->open('../data/estoque.db');
    }
}

?>