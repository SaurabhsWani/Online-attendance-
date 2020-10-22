<?php

function sort_arr($arrso)
{    
    function simple_quick_sort($arr)
    {
        if(count($arr) <= 1){
            return $arr;
        }
        else{
            $pivot = $arr[0];
            $left = array();
            $right = array();
            for($i = 1; $i < count($arr); $i++)
            {
                if($arr[$i] < $pivot){
                    $left[] = $arr[$i];
                }
                else{
                    $right[] = $arr[$i];
                }
            }
            return array_merge(simple_quick_sort($left), array($pivot), simple_quick_sort($right));
        }
    }
    $unsorted = $arrso;
    $sorted = simple_quick_sort($unsorted);
    return $sorted;
}


function search_arr($arrsa)
{
    function binarySearch(Array $arr, $x) 
    { 
        if (count($arr) === 0) return false; 
        $low = 0; 
        $high = count($arr) - 1; 
        while ($low <= $high) { 
            $mid = floor(($low + $high) / 2); 
            if($arr[$mid] == $x) { 
                return true; 
            } 

            if ($x < $arr[$mid]) { 
                $high = $mid -1; 
            } 
            else { 
                $low = $mid + 1; 
            } 
        } 
        return false; 
    } 

    $arr = $arrsa; 
    $value =31; 
    if(binarySearch($arr, $value) == true) 
    { 
        return 1; 
    } 
    else 
    { 
        return 0;
    } 

}

$arrso=array(5,31,8,6,2,7,1,3,4);
$arrsa=sort_arr($arrso);
$exist=search_arr($arrsa);
echo $exist;
?>