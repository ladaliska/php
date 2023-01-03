<?php 
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);
$requestMethod = $_SERVER["REQUEST_METHOD"];
var_dump($uri);
if($uri[2]!=null){
    $report="Ok";
    if($uri[2]=="add")
    {
        $result = $uri[3] + $uri[4];
        echo "{Status: $report;Result: $result}";
    }
    else if($uri[2]=="sub")
    {
        $result = $uri[3] - $uri[4];
        echo "{Status: $report;Result: $result}";
    }
    else if($uri[2]=="multi")
    {
        $result = $uri[3] * $url[4];
        echo "{Status: $report;Result: $result}";
    }
    else if($uri[2]=="div")
    {
        if ($uri[2]==0) {
            echo "Can't devide by Zero";
        }
        else{
        $result = $uri[3] / $uri[4];
        echo "{Status: $report;Result: $result}";
        }
    }
    else if($uri[2]=="modul")
    {
        $result = $uri[3] % $uri[4];
        echo "{Status: $report;Result: $result}";
    }
    else if($uri[2]=="pow")
    {
        $result = $uri[3] ** $uri[4];
        echo "{Status: $report;Result: $result}";
    }
    else if($uri[2]=="root")
    {
        if ($uri[3]==0) {
            echo "Can't make zero root";
        }
        else{
        $result = $uri[3] ** (1/$uri[4]);
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