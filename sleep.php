<?php
// Thời gian bắt đầu ngủ + 90' * N + 14' = Thời gian thức giấc (N ? from 3 to 6)
//$status = '1'; // I have to wake up at... 1 || I am going to bed now... 0
$time = $_GET['time'];
if( $_GET['status'] && $_GET['status'] == '1'){
    $getHour = intval(explode('h', $time)[0]);
    $getMinute = intval(explode('h', $time)[1]);
    
    // N = 1
    $minuteSleep1 = $getMinute - 44;
    if($minuteSleep1 < 0){
        $hourSleep1 = $getHour - 1;
        $minuteSleep1 = 60 - (44 - $getMinute);
    }
    $hourSleep1 -= 1;
    if($hourSleep1 < 0){
        $hourSleep1 += 24;
    }
    // N = 2
    $minuteSleep2 = $getMinute - 14;
    if($minuteSleep2 < 0){
        $hourSleep2 = $getHour -  1;
        $minuteSleep2 = 60 - (14 - $getMinute);
    }
    $hourSleep2 -= 3;
    if($hourSleep2 < 0){
        $hourSleep2 += 24;
    }
    // N = 3
    $minuteSleep3 = $getMinute - 44;
    if($minuteSleep3 < 0){
        $hourSleep3 = $getHour - 1;
        $minuteSleep3 = 60 - (44 - $getMinute);
    }
    $hourSleep3 -=  4;
    if($hourSleep3 < 0){
        $hourSleep3 += 24;
    }
    // N = 4
    $minuteSleep4 = $getMinute - 14;
    if($minuteSleep4 < 0){
        $hourSleep4 = $getHour -  1;
        $minuteSleep4 = 60 - (14 - $getMinute);
    }
    $hourSleep4 -= 6;
    if($hourSleep4 < 0){
        $hourSleep4 += 24;
    }
    // N = 5
    $minuteSleep5 = $getMinute - 44;
    if($minuteSleep5 < 0){
        $hourSleep5 = $getHour -  1;
        $minuteSleep5 = 60 - (44 - $getMinute);
    }
    $hourSleep5 -= 7;
    if($hourSleep5 < 0){
        $hourSleep5 += 24;
    }
    // N = 6
    $minuteSleep6 = $getMinute - 14;
    if($minuteSleep6 < 0){
        $hourSleep6 = $getHour -  1;
        $minuteSleep6 = 60 - (14 - $getMinute);
    }
    $hourSleep6 -= 9;
    if($hourSleep6 < 0){
        $hourSleep6 += 24;
    }
    $arr = [
        'TimeSleep1' => $hourSleep1.'h'.$minuteSleep1,
        'TimeSleep2' => $hourSleep2.'h'.$minuteSleep2,
        'TimeSleep3' => $hourSleep3.'h'.$minuteSleep3,
        'TimeSleep4' => $hourSleep4.'h'.$minuteSleep4,
        'TimeSleep5' => $hourSleep5.'h'.$minuteSleep5,
        'TimeSleep6' => $hourSleep6.'h'.$minuteSleep6,
    ];
    echo json_encode($arr);

}elseif($_GET['status'] && $_GET['status'] == '0'){
    $getHour = intval(explode('h', $time)[0]);
    $getMinute = intval(explode('h', $time)[1]);

// Thời gian bắt đầu ngủ + 90' * N + 14' = Thời gian thức giấc (N ? from 3 to 6)
    // N = 1
    $minuteWakeUp1 = $getMinute + 34;
    if($minuteWakeUp1 > 60){
        $hourWakeUp1 = $getHour + 1;
        $minuteWakeUp1 = 34 - ( 60 - $getMinute);
    }
    $hourWakeUp1 += 1;
    if($hourWakeUp1 > 24){
        $hourWakeUp1 -= 24;
    }
    // N = 2
    $minuteWakeUp2 = $getMinute + 14;
    if($minuteWakeUp2 > 60){
        $hourWakeUp2 = $getHour + 1;
        $minuteWakeUp2 = 14 - ( 60 - $getMinute);
    }
    $hourWakeUp2 += 3;
    if($hourWakeUp2 > 24){
        $hourWakeUp2 -= 24;
    }
    // N = 3
    $minuteWakeUp3 = $getMinute + 34;
    if($minuteWakeUp3 > 60){
        $hourWakeUp3 = $getHour + 1;
        $minuteWakeUp3 = 34 - ( 60 - $getMinute);
    }
    $hourWakeUp3 += 4;
    if($hourWakeUp3 > 24){
        $hourWakeUp3 -= 24;
    }
    // N = 4
    $minuteWakeUp4 = $getMinute + 14;
    if($minuteWakeUp4 > 60){
        $hourWakeUp4 = $getHour + 1;
        $minuteWakeUp4 = 14 - ( 60 - $getMinute);
    }
    $hourWakeUp4 += 6;
    if($hourWakeUp4 > 24){
        $hourWakeUp4 -= 24;
    }
    // N = 5
    $minuteWakeUp5 = $getMinute + 34;
    if($minuteWakeUp5 > 60){
        $hourWakeUp5 = $getHour + 1;
        $minuteWakeUp5 = 34 - ( 60 - $getMinute);
    }
    $hourWakeUp5 += 7;
    if($hourWakeUp5 > 24){
        $hourWakeUp5 -= 24;
    }
    // N = 6
    $minuteWakeUp6 = $getMinute + 14;
    if($minuteWakeUp6 > 60){
        $hourWakeUp6 = $getHour + 1;
        $minuteWakeUp6 = 14 - ( 60 - $getMinute);
    }
    $hourWakeUp6 += 9;
    if($hourWakeUp6 > 24){
        $hourWakeUp6 -= 24;
    }
    $arr = [
        'TimeWakeUp1' => $hourWakeUp1.'h'.$minuteWakeUp1,
        'TimeWakeUp2' => $hourWakeUp2.'h'.$minuteWakeUp2,
        'TimeWakeUp3' => $hourWakeUp3.'h'.$minuteWakeUp3,
        'TimeWakeUp4' => $hourWakeUp4.'h'.$minuteWakeUp4,
        'TimeWakeUp5' => $hourWakeUp5.'h'.$minuteWakeUp5,
        'TimeWakeUp6' => $hourWakeUp6.'h'.$minuteWakeUp6,
    ];
    echo json_encode($arr);

}elseif($time == 'now'){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time = date('h:i', time());
    $getHour = intval(explode(':', $time)[0]);
    $getMinute = intval(explode(':', $time)[1]);
    // N = 1
    $minuteWakeUp1 = $getMinute + 34;
    if($minuteWakeUp1 > 60){
        $hourWakeUp1 = $getHour + 1;
        $minuteWakeUp1 = 34 - ( 60 - $getMinute);
    }
    $hourWakeUp1 += 1;
    if($hourWakeUp1 > 24){
        $hourWakeUp1 -= 24;
    }
    // N = 2
    $minuteWakeUp2 = $getMinute + 14;
    if($minuteWakeUp2 > 60){
        $hourWakeUp2 = $getHour + 1;
        $minuteWakeUp2 = 14 - ( 60 - $getMinute);
    }
    $hourWakeUp2 += 3;
    if($hourWakeUp2 > 24){
        $hourWakeUp2 -= 24;
    }
    // N = 3
    $minuteWakeUp3 = $getMinute + 34;
    if($minuteWakeUp3 > 60){
        $hourWakeUp3 = $getHour + 1;
        $minuteWakeUp3 = 34 - ( 60 - $getMinute);
    }
    $hourWakeUp3 += 4;
    if($hourWakeUp3 > 24){
        $hourWakeUp3 -= 24;
    }
    // N = 4
    $minuteWakeUp4 = $getMinute + 14;
    if($minuteWakeUp4 > 60){
        $hourWakeUp4 = $getHour + 1;
        $minuteWakeUp4 = 14 - ( 60 - $getMinute);
    }
    $hourWakeUp4 += 6;
    if($hourWakeUp4 > 24){
        $hourWakeUp4 -= 24;
    }
    // N = 5
    $minuteWakeUp5 = $getMinute + 34;
    if($minuteWakeUp5 > 60){
        $hourWakeUp5 = $getHour + 1;
        $minuteWakeUp5 = 34 - ( 60 - $getMinute);
    }
    $hourWakeUp5 += 7;
    if($hourWakeUp5 > 24){
        $hourWakeUp5 -= 24;
    }
    // N = 6
    $minuteWakeUp6 = $getMinute + 14;
    if($minuteWakeUp6 > 60){
        $hourWakeUp6 = $getHour + 1;
        $minuteWakeUp6 = 14 - ( 60 - $getMinute);
    }
    $hourWakeUp6 += 9;
    if($hourWakeUp6 > 24){
        $hourWakeUp6 -= 24;
    }
    $arr = [
        'TimeWakeUp1' => $hourWakeUp1.'h'.$minuteWakeUp1,
        'TimeWakeUp2' => $hourWakeUp2.'h'.$minuteWakeUp2,
        'TimeWakeUp3' => $hourWakeUp3.'h'.$minuteWakeUp3,
        'TimeWakeUp4' => $hourWakeUp4.'h'.$minuteWakeUp4,
        'TimeWakeUp5' => $hourWakeUp5.'h'.$minuteWakeUp5,
        'TimeWakeUp6' => $hourWakeUp6.'h'.$minuteWakeUp6,
    ];
    echo json_encode($arr);
    
}
