
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>双色球随机{核心算法4舍五入拉伸算法，自修正拉伸算法}复合计算版</title>




<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("div").hide();
  });
  $("#show").click(function(){
    $("div").show();
  });
});

</script>



<body>


<h1  style=color:#888888>如果你点击“隐藏” 按钮，我将会消失。</>




<h1  style=color:#888888>如果你点击“显示” 按钮，我将会出现。</>



<div  style="display:none";>


<?php
/**
 * 生成0~1随机小数
 * @param Int  $min
 * @param Int  $max
 * @return Float
 */
function randFloat($min=0, $max=1){
  return $min + mt_rand()/mt_getrandmax() * ($max-$min);
}

// 例子，创建36个0~1随机小数
for($i=0; $i<34; $i++){
 
 echo "第".$i."=".randFloat().'<br>';

}


?>



</div>




<button id="hide"  style="font-size:35px;

color:#FF0000"  >隐藏前区</button>

<button id="show"  style="font-size:35px;


color:#FF0000"  >显示前区</button>



<h1 style=color:#888888>双色球核心算法4舍五入，0保留，4舍五入，自关联修正，0保留，可进位，可退位，

――――――――<br>

独立计算上期码，用上期码计算本期重码，使用本期重码，关联复选框自动 回收，使用本期重码，关联复选框自动移出 版，独立使用4舍五入算法不并用，用上期码计 算本期重码，只计算本期重码，关联自动回收，关联自动移出版 。



</>



<br><hr>

<a href="ssq6666666wote4s5r.php" 

style="font-size:38px;">前区开始4舍5入</a>


<br><hr>

</body>

</html>





