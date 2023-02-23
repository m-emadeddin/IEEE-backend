/*
    Problem Link: https://www.hackerrank.com/challenges/binary-search-tree-1/problem
    Submission: https://www.hackerrank.com/challenges/binary-search-tree-1/submissions/database/314816478
*/
SELECT N, 
    CASE 
        WHEN P IS NULL THEN 'Root'
        WHEN N IN (SELECT P FROM BST) THEN 'Inner'
        ELSE 'Leaf' 
    END AS STATUS
FROM BST 
ORDER BY N;