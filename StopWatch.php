<?php


class StopWatch
{
private $startTime;
private $endTime;
public function __construct()
{
    $this->startTime = microtime(true);
}
function getStartTime() {
    return $this->startTime;
}
function getEndTime() {
    return$this->endTime;
}
public function startTime() {
    $this->startTime = microtime(true);
}
function stopTime() {
    $this->endTime = microtime(true);
}
function getElapsedTime() {
    return $this->endTime - $this->startTime;
}

}