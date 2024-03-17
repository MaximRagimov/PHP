<?php

$exampleSchedule = "пн-вс с 10.20 до 20.00, перерыв с 12:00 до 13.00";

transformSchedule($exampleSchedule);

function transformSchedule($stringSchedule) {
    $arrSchedule = explode(" ", $stringSchedule);
    $ww = array();

    if (str_contains($arrSchedule[0], "-")) {
        $weekDays = ["пн", "вт", "ср", "чт", "пт", "сб", "вс"];
//        $days = $arrSchedule[0];
        $arrDays = explode("-", $arrSchedule[0]);
        $firstDay = $arrDays[0];
        $lastDay = $arrDays[1];
        $beginTime = beginWorkingTime($arrSchedule);
        $endTime = endWorkingTime($arrSchedule);
        $wt = array();

        switch ($firstDay) {
            case "пн":
                $startIdx = 0;

                switch ($lastDay) {
                    case "вт":
                        $endIdx = 2;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }

                        break;
                    case "ср":
                        $endIdx = 3;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }

                        break;
                    case "чт":
                        $endIdx = 4;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "пт":
                        $endIdx = 5;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "сб":
                        $endIdx = 6;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "вс":
                        $endIdx = 7;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    default:
                        print_r("There must be a mistake.");
                }
                break;
            case "вт":
                $startIdx = 1;

                switch ($lastDay) {
                    case "ср":
                        $endIdx = 3;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "чт":
                        $endIdx = 4;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "пт":
                        $endIdx = 5;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "сб":
                        $endIdx = 6;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "вс":
                        $endIdx = 7;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    default:
                        print_r("There must be a mistake.");
                }
                break;
            case "ср":
                $startIdx = 2;

                switch ($lastDay) {
                    case "чт":
                        $endIdx = 4;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "пт":
                        $endIdx = 5;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "сб":
                        $endIdx = 6;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "вс":
                        $endIdx = 7;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    default:
                        print_r("There must be a mistake.");
                }
                break;
            case "чт":
                $startIdx = 3;

                switch ($lastDay) {
                    case "пт":
                        $endIdx = 5;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "сб":
                        $endIdx = 6;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "вс":
                        $endIdx = 7;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    default:
                        print_r("There must be a mistake.");
                }
                break;
            case "пт":
                $startIdx = 4;

                switch ($lastDay) {
                    case "сб":
                        $endIdx = 6;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    case "вс":
                        $endIdx = 7;

                        for($i = $startIdx; $i < $endIdx; $i++) {
                            $wt[$weekDays[$i]]["begin"] = $beginTime;
                            $wt[$weekDays[$i]]["end"] = $endTime;
                        }
                        break;
                    default:
                        print_r("There must be a mistake.");
                }
                break;
            case "сб":
                $startIdx = 5;

                if ($lastDay === "вс") {
                    $endIdx = 7;

                    for($i = $startIdx; $i < $endIdx; $i++) {
                        $wt[$weekDays[$i]]["begin"] = $beginTime;
                        $wt[$weekDays[$i]]["end"] = $endTime;
                    }
                }
                break;
            default:
                print_r("There must be a mistake.");
        }
    } else {    // случай, если расписание обозначено одним днём
        // создаем массив с временем начала
        $index = array_search("с", $arrSchedule);
        $beginTime = $arrSchedule[$index + 1];
        if (str_contains($beginTime, '.')) {
            $beginTime = str_replace(".", ":", $beginTime);
        }

        // создаем массив с временем конца
        $index = array_search("до", $arrSchedule);
        $endTime = $arrSchedule[$index + 1];
        if (str_contains($endTime, '.')) {
            $endTime = str_replace(".", ":", $endTime);
        }

        // создаем массив с днем недели
        $day = $arrSchedule[0];
        $wt = [
            "{$day}" => [
                "begin" => $beginTime,
                "end" => $endTime
            ]
        ];
        print_r($wt);
        print_r($wt["вт"]["begin"]);
        print_r($wt["вт"]["end"]);

    }

    // если есть перерыв в расписании
    if (in_array('перерыв', $arrSchedule)) {
        $subArrIdx = array_search("перерыв", $arrSchedule);
        $subArr = array_slice($arrSchedule, $subArrIdx + 1);
        print_r($subArr);

        $beginTimeBreak = $subArr[1];

        if (str_contains($beginTimeBreak, ".")) {
            $beginTimeBreak = str_replace(".", ":", $beginTimeBreak);
        }

        $endTimeBreak = $subArr[3];

        if (str_contains($endTimeBreak, ".")) {
            $endTimeBreak = str_replace(".", ":", $endTimeBreak);
        }

        $keys = array_keys($wt);
//    print_r($keys);
        $temp  = ["begin" => $beginTimeBreak, "end" => $endTimeBreak];
//    print_r($temp);

        $ww = array_fill_keys($keys, $temp);
    }



    print_r($wt);
    print_r($ww);
}

function beginWorkingTime($arrSchedule): string {
    $index = array_search("с", $arrSchedule);
    $beginTime = $arrSchedule[$index + 1];
    if (str_contains($beginTime, '.')) {
        $beginTime = str_replace(".", ":", $beginTime);
    }

    return $beginTime;
}

function endWorkingTime($arrSchedule): string {
    $index = array_search("до", $arrSchedule);
    $endTime = $arrSchedule[$index + 1];
    if (str_contains($endTime, '.')) {
        $endTime = str_replace(".", ":", $endTime);
    }

    return $endTime;
}