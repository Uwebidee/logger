<?php

interface System_Log_LogInterface {
    public function prepare($args);

    public function save($vars);
}