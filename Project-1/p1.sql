/*
    Problem Link: https://www.hackerrank.com/challenges/the-pads/problem
    P1 Submission: https://www.hackerrank.com/challenges/the-pads/submissions/database/314805285
*/
SELECT CONCAT(NAME,'(',LEFT(OCCUPATION,1),')') as result
FROM OCCUPATIONS

UNION ALL

SELECT CONCAT('There are a total of',  ' ', COUNT(OCCUPATION), ' ',  CONCAT(LOWER(OCCUPATION), 's.')) as result
FROM OCCUPATIONS
GROUP BY OCCUPATION
ORDER BY result;
