<?php

namespace Rabsana\Core\Support\Date;

use DateTimeZone;
use Exception;
use Morilog\Jalali\CalendarUtils;
use Rabsana\Core\Contracts\Abstracts\Date as AbstractsDate;
use Morilog\Jalali\Jalalian;

class Morilog extends AbstractsDate
{
    public function gtoj($date, string $format = 'Y-m-d H:i:s'): string
    {
        try {

            $gtoj = Jalalian::forge(strtotime($date), new DateTimeZone('Asia/Tehran'))->format($format);

            return (string) $gtoj;

            // 
        } catch (Exception $e) {

            info("Morilog-gtoj-error: " . $e);
            return '';
        }
    }


    public function jtog($date, string $format = 'Y-m-d H:i:s'): string
    {
        try {

            $jtog = CalendarUtils::createCarbonFromFormat($format, $date)->format($format);

            return (string) $jtog;

            // 
        } catch (Exception $e) {

            info("Morilog-jtog-error: " . $e);
            return '';
        }
    }
}
