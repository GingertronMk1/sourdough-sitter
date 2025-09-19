<?php

namespace App;

enum FeedIntervalEnum: string
{
    case MINUTE = 'minute';
    case HOUR = 'hour';
    case DAY = 'day';
    case WEEK = 'week';
}
