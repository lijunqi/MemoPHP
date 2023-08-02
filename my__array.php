<?php

    // Array
    echo "<br>********* Array *********<br>";
    $arr = array(1,2,3);
    echo $arr[1];

    // Associative array
    echo "<br>********* Associative Array *********<br>";
    $arr_assoc = array("k1" => "v1", "k2" => "v2");
    echo $arr_assoc["k1"] . "<br>";


    // Append
    $my_list1 = [];
    $my_list2 = [];
    for ($i = 0; $i < 5; $i++) {
        $my_list1[] = $i;
        array_push($my_list2, $i*2);
    }
    print_r($my_list1);
    echo "<br>";
    print_r($my_list2);

    // Merge
    $list1 = ['a', 'b', 'c'];
    $list2 = ['a', 'd', 'e'];
    $merged_list = array_merge($list1, $list2);
    echo "Merged list: ";
    print_r($merged_list);
    $unique_merged = array_unique($merged_list, SORT_REGULAR);
    echo "Unique merged list: ";
    print_r($merged_list);
