<?php

namespace App\Library;

class Common
{
    public static function dateThai($date)
    {
        $valueAfterSplit = explode("-", $date);
        $day = $valueAfterSplit[2];
        $month = $valueAfterSplit[1];
        // เปลี่ยนเดือนเป็นเดือนภาษาไทย
        switch ($month) {
            case 1:
                $monthResult = 'ม.ค.';
                break;
            case 2:
                $monthResult = 'ก.พ.';
                break;
            case 3:
                $monthResult = 'มี.ค.';
                break;
            case 4:
                $monthResult = 'เม.ย.';
                break;
            case 5:
                $monthResult = 'พ.ค..';
                break;
            case 6:
                $monthResult = 'มิ.ย.';
                break;
            case 7:
                $monthResult = 'ก.ค.';
                break;
            case 8:
                $monthResult = 'ส.ค.';
                break;
            case 9:
                $monthResult = 'ก.ย.';
                break;
            case 10:
                $monthResult = 'ต.ค.';
                break;
            case 11:
                $monthResult = 'พ.ย.';
                break;
            case 12:
                $monthResult = 'ธ.ค.';
                break;
            default:
                $monthResult = '--';
        }
        $year = $valueAfterSplit[0] + 543; // เอาปีมาบวก 543 ให้เป็นปี พ.ศ.
        $yearSplit = str_split($year, 2); // ตัดสตริงทีละ 2 ตัว ก็คือ 25 กับ 64
        $resultSplit = $yearSplit[1]; // ดึงเฉพาะ 64 ออกมา
        return "$day $monthResult $resultSplit"; // ถ้ารอบแรกจะเก็บค่าเข้าใส่ของ disburse แต่ถ้ารอบที่สองจะเก็บค่าใส่ payment ready date 

    }

    public static function dateTimeThai($date)
    {
        $valueAfterSplit = explode("-", $date);
        $day = $valueAfterSplit[2];
        $daySplit = str_split($day, 2); // ตัดสตริงทีละ 2 ตัว ก็คือวันที่กับเวลา ให้เอาออกมาเฉพาะวันที่
        $resultSplitDay = $daySplit[0]; // ดึงเฉพาะวันที่ออกมา
        $month = $valueAfterSplit[1];
        // เปลี่ยนเดือนเป็นเดือนภาษาไทย
        switch ($month) {
            case 1:
                $monthResult = 'ม.ค.';
                break;
            case 2:
                $monthResult = 'ก.พ.';
                break;
            case 3:
                $monthResult = 'มี.ค.';
                break;
            case 4:
                $monthResult = 'เม.ย.';
                break;
            case 5:
                $monthResult = 'พ.ค..';
                break;
            case 6:
                $monthResult = 'มิ.ย.';
                break;
            case 7:
                $monthResult = 'ก.ค.';
                break;
            case 8:
                $monthResult = 'ส.ค.';
                break;
            case 9:
                $monthResult = 'ก.ย.';
                break;
            case 10:
                $monthResult = 'ต.ค.';
                break;
            case 11:
                $monthResult = 'พ.ย.';
                break;
            case 12:
                $monthResult = 'ธ.ค.';
                break;
            default:
                $monthResult = '--';
        }
        $year = $valueAfterSplit[0] + 543; // เอาปีมาบวก 543 ให้เป็นปี พ.ศ.
        $yearSplit = str_split($year, 2); // ตัดสตริงทีละ 2 ตัว ก็คือ 25 กับ 64
        $resultSplitYear = $yearSplit[1]; // ดึงเฉพาะ 64 ออกมา
        return "$resultSplitDay $monthResult $resultSplitYear"; // ถ้ารอบแรกจะเก็บค่าเข้าใส่ของ disburse แต่ถ้ารอบที่สองจะเก็บค่าใส่ payment ready date 

    }

}
