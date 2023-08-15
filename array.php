<?php

    // Array
    echo "********* Array *********\n";
    $arr = array(1,2,3);
    echo $arr[1]."\n";

    // Associative array
    echo "********* Associative Array *********\n";
    $arr_assoc = array("k1" => "v1", "k2" => "v2");
    echo $arr_assoc["k1"] . "\n";


    // Append
    echo "********* Append *********\n";
    $my_list1 = [];
    $my_list2 = [];
    for ($i = 0; $i < 5; $i++) {
        $my_list1[] = $i;
        array_push($my_list2, $i*2);
    }
    echo "List1: \n".print_r($my_list1, true)."\n";
    echo "List2: \n".print_r($my_list2, true)."\n";

    $my_list3 = [];
    $my_list3['a'] = [1,2,3];
    echo "List3: \n".print_r($my_list3, true)."\n";

    // Merge
    echo "********* Merge *********\n";
    $list1 = ['a', 'b', 'c'];
    $list2 = ['a', 'd', 'e'];
    $merged_list = array_merge($list1, $list2);
    echo "Merged list: ";
    print_r($merged_list);
    $unique_merged = array_unique($merged_list, SORT_REGULAR);
    echo "Unique merged list: ";
    print_r($merged_list);
