<?php
echo "カラスは白い　白いと思うなら0を";
$input = fgets(STDIN);
if($input == 0){
  echo "はずれ";
}else{
  echo "あたり";
}
echo "りんごは赤い　赤いなら0を";
$input = fgets(STDIN);
if($input == 0){
  echo "あたり";
}else{
  echo "はずれ";
}
$input=fgets(STDIN);
echo $input * 3;
