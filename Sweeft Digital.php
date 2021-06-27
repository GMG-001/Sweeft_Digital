<?php

//რამოდენიმეგან გამოყენებული მაქვს ცვლადის ერთიდაიგივე სახელი, იმისათვის რომ რამე პრობლემა არ შეიქმნა ყველა დავალაება გაუშვით ცალ ცალკე
//ასევე რამოდენიმე ნომერზე დავწერე როგორც კოდით ასევე ჩაშენებული მეთოდებით




// //1
// function fibonacci($n,$first = 0,$second = 1)
// {
//     $fib = [$first,$second];
//     for($i=1;$i<$n;$i++)
//     {
//         $fib[] = $fib[$i]+$fib[$i-1];
//     }
//     return json_encode($fib);
// }
// print_r(fibonacci(5));

// //2
// // 2.1
// //ჩაშენებული მეთოდით
// function reverse($n)
// { 
//     echo strrev($n);
// } 
// print_r(reverse(12345));

// // 2.2
// //მეორე ვარიანტიც დავწერე მაინც ყოველი შემთხვევისთვის
// function reverse($n,$reverse = 0)
// { 
// while ($n > 1)  
// {  
// $rem = $n % 10;  
// $reverse = ($reverse * 10) + $rem;
// $n = ($n / 10);
// }
// return ($reverse);
// } 
// print_r(reverse(12345));


//3
// function check_progression($array)
//   {
//    $delta = $array[1] - $array[0];
//    for($index=0; $index<sizeof($array)-1; $index++)
//     {
//         if (($array[$index + 1] - $array[$index]) != $delta)
//         {
             
//              return "არ არის არითმეტიკული პროგრესია";
//         }       
        
//     }
//     return "არითმეტიკული პროგრესიაა";
// }
// $array1 = [6,7,9,11];
// $array2 = [3,5,7,9,11];

// print_r(check_progression($array1)."\n");
// print_r(check_progression($array2)."\n");


//4
// $array=[1, 0, 30, 1, 0, 9];
// foreach($array as $key => $value){
//     if($value==0){
//         array_push($array,$value);
//         unset($array[$key]);
//     }
// }
// print_r(json_encode(array_values($array)));

// //5
// // 5.1
// //ჩაშენებული ფუნქციებით
// function mode($array){
//     $values = array_count_values($array); 
//     $mode = array_search(max($values), $values);
//     return $mode;
// }
// $array=[0,1,6,1,1,1,9];
// print_r(mode($array))

// // 5.2
// // function mode($array,$freq = array()){
// //         for($i=0; $i<count($array); $i++){
// //             if(isset($freq[$array[$i]])==false){
// //                 $freq[$array[$i]] = 1;
// //             }else
// //             {
// //                 $freq[$array[$i]]++;
// //             }
// //         }
// //         $maxs = array_keys($freq, max($freq));
// //         for($i=0; $i<count($maxs); $i++){
// //            return $maxs[$i];
// //         }
// // }
// // $array=[0,1,6,1,1,1,9];
// // print_r(mode($array))
?>
