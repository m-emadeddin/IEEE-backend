/*
    Problem Link: https://www.hackerrank.com/challenges/symmetric-pairs/problem
    Submission: https://www.hackerrank.com/challenges/symmetric-pairs/submissions/database/315761257
*/
SELECT X, Y
FROM Functions 
WHERE X = Y
GROUP BY X, Y HAVING count(*) > 1
UNION ALL
SELECT F1.X, F1.Y
FROM Functions F1
JOIN Functions F2
WHERE F1.X = F2.Y AND F2.X = F1.Y AND F1.X < F1.Y
ORDER BY X;