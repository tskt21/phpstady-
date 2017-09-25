<?php
echo "カラスは白い　白いと思うなら0を";
$input = fgets(STDIN);
if($input == 0){
  echo "はずれ";
}else{
  echo "あたり";
}
