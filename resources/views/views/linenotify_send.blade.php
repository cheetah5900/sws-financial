<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$curdate = date("d/m/Y");
session_start();

    //? ตั้งค่า TOKEN ตามปุ่มที่กด
    if ($group == 'real') {
        $sToken = "Cd0fdf3892b1081440c4753878110324f";
    } else {
        $sToken = "C8e083042335857b0fb4e4be0640ad793";
    }

    //? ตั้งค่าบอทตามตัวที่กด
    switch ($botname) {
        case 'jisoo':
            $botName = "0Bu3MnGh76mkuN0MGmJEGkNH5Vru7XQ5KJY4dg05CrN6xxJ9fGxrm7rhqkFrr3XFCnyU1W2NmD9JG5NSVpR3sDKNO51oz/GYnW1EoQSYV7fDkTdkteEshit6owBAItYSzsBziOxl8xKAaU1FgmsOrQdB04t89/1O/w1cDnyilFU=";
            break;
        case 'jennie':
            $botName = "AKSz6ULbJHfWZZ/OhblyLp+a9yz3Dc0pN3AwVbIYWOzNAbSqS7Scw5qyFCVLJp/gCK/gNI13arrkkW8b9ar3VFZznN+Nwio8XSoRzqsAILoEet65XfQ+/dKImgIlXG36ThRjM5GVQmm3NqZKYs9dbwdB04t89/1O/w1cDnyilFU=";
            break;
        case 'rose':
            $botName = "rJ4PRc8MJqhijMSnVrGKBjmC6Pmo6c9Kwuf0zvjpFBmMs0jc3OntdaKnWrvZYzw1e8oXIkl5ZXKIe9pN/kxqvtp6WQipXrvi8itNPfx4vpGIsH87q4+7waA1ZKOxCPby9rZMDlZxnaWN7ET4/MUdiwdB04t89/1O/w1cDnyilFU=";
            break;
        case 'lisa':
            $botName = "aulHfx4X15GeeQOQxG81CB346d/Xrwl/D7fyjujSoxL2+hSS3deBZyrK+uFwg82yXdsOQxOVuXK9KAdePdmyggLSXMQBWp8Wz5E/LA6sErhnqqGvDZMP5sP+keLpTpPxKupgBR6OIdS2tRV4k4ga8QdB04t89/1O/w1cDnyilFU=";
            break;
    }



for ($u = 1; $u <= 3; $u++) { // วนลูปเพื่อให้ทำงาน 2 รอบ แต่ละรอบจะเปลี่ยนเงื่อนไขที่เอาเข้าไป loop 
    if ($u == 1) {
        $data = $resultDisburseNoRound;
        $roundData = "รายการที่ยังไม่มีรอบโอน";
    } elseif ($u == 2) {
        $data = $resultDisburseApproachRound;
        $roundData = "ถึงรอบโอน";
    } elseif ($u == 3) {
        $data = $resultDisburseExceedRound;
        $roundData = "รายการที่หลุดรอบ";
    }


    $endPoint = "https://financial.swsinno.com/";
    $dataPushMessages['url'] = "https://api.line.me/v2/bot/message/push";
    $dataPushMessages['token'] = $botName;

    $countAllArrData = count($data);

    // ส่วนหัวของ flex msg
    $datas = [];
    $datas["type"] = "flex";
    $datas["altText"] = "This is a Flex Message";
    $datas["contents"]["type"] = "carousel";
    // ถ้ารายการโอนมากกว่าศูนย์แสดงว่ามีรายการ ให้ส่งหัวข้อออกมา
    $datas["contents"]["contents"][0]["type"] = "bubble";
    $datas["contents"]["contents"][0]["body"]["type"] = "box";
    $datas["contents"]["contents"][0]["body"]["layout"] = "vertical";
    $datas["contents"]["contents"][0]["body"]["contents"][0]["type"] = "text";
    $datas["contents"]["contents"][0]["body"]["contents"][0]["text"] = $roundData;
    $datas["contents"]["contents"][0]["body"]["contents"][0]["weight"] = "bold";
    $datas["contents"]["contents"][0]["body"]["contents"][0]["size"] = "md";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["type"] = "box";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["layout"] = "vertical";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["spacing"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["margin"] = "lg";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["type"] = "box";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["layout"] = "baseline";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["spacing"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][0]["type"] = "text";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][0]["text"] = "วันที่";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][0]["weight"] = "bold";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][0]["size"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][0]["color"] = "#AAAAAA";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][0]["flex"] = 1;
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][1]["type"] = "text";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][1]["text"] = $curdate;
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][1]["weight"] = "regular";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][1]["size"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][1]["color"] = "#666666";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][1]["flex"] = 4;
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][0]["contents"][1]["wrap"] = true;
    $datas["contents"]["contents"][0]["body"]["contents"][1]["type"] = "box";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["layout"] = "vertical";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["spacing"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["margin"] = "lg";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["type"] = "box";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["layout"] = "baseline";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["spacing"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][0]["type"] = "text";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][0]["text"] = "จำนวน";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][0]["weight"] = "bold";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][0]["size"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][0]["color"] = "#AAAAAA";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][0]["flex"] = 1;
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][1]["type"] = "text";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][1]["text"] = $countAllArrData . " รายการ";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][1]["weight"] = "regular";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][1]["size"] = "sm";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][1]["color"] = "#666666";
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][1]["flex"] = 4;
    $datas["contents"]["contents"][0]["body"]["contents"][1]["contents"][1]["contents"][1]["wrap"] = true;
    
    $i = 1;
    $a = 1; // ตัวแปรจำนวนรายการเอาไว้นับว่ามีกี่ตัวแล้ว และควรตัดรอบยิงตอนไหนบ้าง

    $encodeJson = '';

    if ($countAllArrData == 0) { // ถ้านับจำนวนแล้วข้อมูลที่ส่งเข้ามาว่ามีค่ามั้ย ถ้าไม่มีก็จะให้ส่งข้อความไปได้เลย แต่ถ้ามีก็ต้องไป fetch ข้อมูลออกมา
        $messages['to'] = $sToken;
        $messages['messages'][] = $datas;
        $encodeJson = json_encode($messages);

        sentMessage($encodeJson, $dataPushMessages);
        $messages = []; // reset ค่าให้มันว่าง ไม่งั้นมันจะทับถมกันไปเรื่อย
    } else {

        //TODO วนลูปสำหรับเอาข้อมูลออกมา
        foreach ($data as $row) {

            $disburseName = $row['disburse_name']; // เก็บใส่ตัวแปรเพื่อนำไปใช้หลายรอบ]
            $vendorName = $row['vendors']; // เก็บใส่ตัวแปรเพื่อนำไปใช้หลายรอบ
            $fullEndPoint = "{$endPoint}md/{$row['id']}";
            $messages['to'] = $sToken; // ตัวแปรส่งไปยังกลุ่มไลน์

            // loop bubble in carousel
            $datas["contents"]["contents"][$i]["type"] = "bubble";
            $datas["contents"]["contents"][$i]["body"]["type"] = "box";
            $datas["contents"]["contents"][$i]["body"]["layout"] = "vertical";
            $datas["contents"]["contents"][$i]["body"]["contents"][0]["type"] = "text";
            $datas["contents"]["contents"][$i]["body"]["contents"][0]["text"] = $a . ". " . $disburseName;
            $datas["contents"]["contents"][$i]["body"]["contents"][0]["weight"] = "bold";
            $datas["contents"]["contents"][$i]["body"]["contents"][0]["size"] = "md";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["type"] = "box";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["layout"] = "vertical";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["spacing"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["margin"] = "lg";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["type"] = "box";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["layout"] = "baseline";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["spacing"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][0]["type"] = "text";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][0]["text"] = "ผู้เบิก";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][0]["weight"] = "bold";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][0]["size"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][0]["color"] = "#AAAAAA";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][0]["flex"] = 1;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][1]["type"] = "text";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][1]["text"] = $vendorName;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][1]["weight"] = "regular";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][1]["size"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][1]["color"] = "#666666";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][1]["flex"] = 4;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][0]["contents"][1]["wrap"] = true;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["type"] = "box";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["layout"] = "baseline";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["spacing"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][0]["type"] = "text";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][0]["text"] = "เบิก";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][0]["weight"] = "bold";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][0]["size"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][0]["color"] = "#AAAAAA";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][0]["flex"] = 1;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][1]["type"] = "text";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][1]["text"] = $disburseName;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][1]["size"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][1]["color"] = "#666666";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][1]["flex"] = 4;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][1]["contents"][1]["wrap"] = true;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["type"] = "box";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["layout"] = "baseline";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][0]["type"] = "text";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][0]["text"] = "คงเหลือ";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][0]["weight"] = "bold";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][0]["size"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][0]["color"] = "#AAAAAA";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][0]["flex"] = 1;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][1]["type"] = "text";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][1]["text"] = number_format($row['remain_value'], 2) . " บาท";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][1]["size"] = "sm";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][1]["color"] = "#666666";
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][1]["flex"] = 4;
            $datas["contents"]["contents"][$i]["body"]["contents"][1]["contents"][2]["contents"][1]["wrap"] = true;
            $datas["contents"]["contents"][$i]["footer"]["type"] = "box";
            $datas["contents"]["contents"][$i]["footer"]["layout"] = "vertical";
            $datas["contents"]["contents"][$i]["footer"]["flex"] = 0;
            $datas["contents"]["contents"][$i]["footer"]["spacing"] = "sm";
            $datas["contents"]["contents"][$i]["footer"]["contents"][0]["type"] = "button";
            $datas["contents"]["contents"][$i]["footer"]["contents"][0]["action"]["type"] = "uri";
            $datas["contents"]["contents"][$i]["footer"]["contents"][0]["action"]["label"] = "รายละเอียดเพิ่มเติม";
            $datas["contents"]["contents"][$i]["footer"]["contents"][0]["action"]["uri"] = $fullEndPoint;
            $datas["contents"]["contents"][$i]["footer"]["contents"][0]["height"] = "sm";
            $datas["contents"]["contents"][$i]["footer"]["contents"][0]["style"] = "primary";
            $datas["contents"]["contents"][$i]["footer"]["contents"][1]["type"] = "spacer";
            $datas["contents"]["contents"][$i]["footer"]["contents"][1]["size"] = "sm";

            if ($a == 5 || $a == 10 || $a == 15 || $a == 20 || $a == 25 || $a == 30) { // ถ้าตัวแปร i มีค่า เท่ากับ 4 แสดงว่าวนครบ 5 ครั้งแล้ว (เริ่มจาก 0)

                $messages['messages'][] = $datas;
                $encodeJson = json_encode($messages);

                sentMessage($encodeJson, $dataPushMessages);

                $messages = []; // reset ค่าให้มันว่าง ไม่งั้นมันจะทับถมกันไปเรื่อย

                $i = -1;

                $datas = [];
                $datas["type"] = "flex";
                $datas["altText"] = "This is a Flex Message";
                $datas["contents"]["type"] = "carousel";
            } elseif ($a == $countAllArrData) { // เมื่อ a วิ่งมาจนถึงจำนวนคงเหลือค่อยยิงอีกรอบนึง
                $messages['messages'][] = $datas;
                $encodeJson = json_encode($messages);
                sentMessage($encodeJson, $dataPushMessages);

                $messages = []; // reset ค่าให้มันว่าง ไม่งั้นมันจะทับถมกันไปเรื่อย
            }
            $i++;
            $a++; // เพิ่มค่าตัวแปรจำนวนของรายการ
        } // ปิด loop fetch ข้อมูล
    } // วงเล็บปิดของตัวนับจำนวนว่าต้อง fetch ข้อมูลหรือไม่
} // ปิด loop u

//? ฟังก์ชั่นสำหรับยิงบอลลูน

function sentMessage($encodeJson, $datas)
{
    $datasReturn = [];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $datas['url'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $encodeJson,
        CURLOPT_HTTPHEADER => array(
            "authorization: Bearer " . $datas['token'],
            "cache-control: no-cache",
            "content-type: application/json; charset=UTF-8",
        ),
    ));

    $response = curl_exec($curl);
    // dd($response);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        $datasReturn['result'] = 'E';
        $datasReturn['message'] = $err;
    } else {
        if ($response == "{}") {
            $datasReturn['result'] = 'S';
            $datasReturn['message'] = 'Success';
        } else {
            $datasReturn['result'] = 'E';
            $datasReturn['message'] = $response;
        }
    }

    return $datasReturn;
}
echo "<meta http-equiv=\"refresh\" content=\"0;url=/public\">";
