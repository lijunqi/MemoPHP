<?php

    // Array
    echo "********* Array *********\n";
    $arr = array(1,2,3);
    echo $arr[1]."\n";
    echo $arr[-1]."\n";

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

    echo "********* Unique Merge *********\n";
    $list1 = ['a', 'b', 'c'];
    $list2 = ['a', 'd', 'e'];
    $unique_merged_list1 = array_unique(array_merge($list1, $list2));
    echo "Unique merged list1: ";
    print_r($unique_merged_list1);

    $list3 = array(
        'a' => [],
        'b' => ['Error', 'Error', 'Passed'],
        'c' => ['PASS_WARN', 'Warning'],
        'd' => ['DEBUG', 'PASS_WARN']
    );
    $unique_merged_list2 = array_unique(array_merge($list3));
    echo "Unique merged list2: ";
    print_r($unique_merged_list2);

    // Change case
    echo "********* Change to Uppercase *********\n";
    $list1 = ['a', 'B', 'c', 'dEfG'];
    $upper_list = array_map('strtoupper', $list1);
    echo "Original List: ";
    print_r($list1);
    echo "Uppercase List: ";
    print_r($upper_list);