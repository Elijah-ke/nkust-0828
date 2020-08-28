<button type=button><a href="index.php">回首頁</a></button>
<button type=button><a href="test01.php?height=1.74&weight=88">小名BMI</a></button>
<button type=button><a href="test01.php?height=1.65&weight=44">曉華BMI</a></button>
<button type=button><a href="test01.php?height=1.83&weight=70">小陳BMI</a></button>
<hr>

<?php

function computeBMI($height,$weight){

	    echo "身高：". $height . "公尺<br>";
	    echo "體重：". $weight. "公斤<br>"; 
	    $bmi = $weight / $height ** 2;
	    echo "BMI：" . $bmi . "<br>";
	    if ($bmi>24) {
		    echo "體重有些太重囉！";
	    } else if ($bmi>=18.5) {
		    echo "體重很標準耶！";
	    } else {
		    echo "體重有些太輕了！";
	    }
}

	$height = $_GET["height"];
	$weight = $_GET["weight"];
	if ($height!=NULL and $weight!=NULL){//確定兩個數值不是空
        //條件成立之後才會執行部分
	    computeBMI($height,$weight);
	} else{ //如果有任意數是空的
	    	echo "你要在網址填資料<br>";
	    	echo "使用例:http://localhost/mysite/0827/test07.php?height=填入身高 &weight= 填入體重 ";
	}
	

?>

