<?php


abstract class State
{
    const WAITING = 'waiting';
    const IN_PROGRESS = 'in progress';
    const OVER = 'over';
    const ABANDONED = 'abandoned';
}