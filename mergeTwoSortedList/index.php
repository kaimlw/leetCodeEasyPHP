<?php
// class ListNode
// {
//     public $val = 0;
//     public $next = null;
//     function __construct($val = 0, $next = null)
//     {
//         $this->val = $val;
//         $this->next = $next;
//     }
// }

/**
 * @param ListNode $list1
 * @param ListNode $list2
 * @return ListNode
 */

function mergeTwoLists($list1, $list2)
{
    if (empty($list1)) { 
        return $list2;
    } elseif (empty($list2)) { 
        return $list1;
    } elseif($list1->val < $list2->val) {
        $list1->next = $this->mergeTwoLists($list1->next, $list2);
        return $list1; 
    } else { 
        $list2->next = $this->mergeTwoLists($list1, $list2->next); 
        return $list2;
    }
}

mergeTwoLists([1, 2, 4], [1, 3, 4]);
