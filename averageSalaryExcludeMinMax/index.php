<!-- 
You are given an array of unique integers salary where salary[i] is the salary of the ith employee.
Return the average salary of employees excluding the minimum and maximum salary. 
Answers within 10-5 of the actual answer will be accepted.
 -->
<?php
// Runtime 7ms MEMORY 19.5 mb
function average($salary)
{
    $total = array_sum($salary) - max($salary) - min($salary);
    return $total / (count($salary) - 2);
}
