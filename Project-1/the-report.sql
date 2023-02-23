/*
    Problem Link: https://www.hackerrank.com/challenges/the-report/problem
    Submission: https://www.hackerrank.com/challenges/the-report/submissions/database/315640161
*/
SELECT 
    CASE
    WHEN grade < 8 THEN NULL 
    ELSE name 
    end,
grade, marks from students join grades ON students.marks >= grades.min_mark AND students.marks <= grades.max_mark
ORDER BY grade DESC, name;