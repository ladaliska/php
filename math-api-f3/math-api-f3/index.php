<?php
$operation = $_POST["operation"];
$numbers[0] = $_POST["number1"];
$numbers[1] = $_POST["number2"];
if($numbers[0]!=null){
    $report="Ok";
    if($operation=="add")
    {
        $result = $numbers[0] + $numbers[1];
        echo "{Status: $report;Result: $result}";
    }
    else if($operation=="sub")
    {
        $result = $numbers[0] - $numbers[1];
        echo "{Status: $report;Result: $result}";
    }
    else if($operation=="multi")
    {
        $result = $numbers[0] * $numbers[1];
        echo "{Status: $report;Result: $result}";
    }
    else if($operation=="div")
    {
        if ($numbers[1]==0) {
            echo "Can't devide by Zero";
        }
        else{
        $result = $numbers[0] / $numbers[1];
        echo "{Status: $report;Result: $result}";
        }
    }
    else if($operation=="modul")
    {
        $result = $numbers[0] % $numbers[1];
        echo "{Status: $report;Result: $result}";
    }
    else if($operation=="pow")
    {
        $result = $numbers[0] ** $numbers[1];
        echo "{Status: $report;Result: $result}";
    }
    else if($operation=="root")
    {
        if ($numbers[1]==0) {
            echo "Can't make zero root";
        }
        else{
        $result = $numbers[0] ** (1/$numbers[1]);
        echo "{Status: $report;Result: $result}";
        }
    }
    else{
    echo "Wrong operation";
    }

}
else{
    echo "No numbers";
}


?>