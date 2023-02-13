/*
    P6 Submission: https://www.hackerrank.com/challenges/more-than-75-marks/submissions/database/314250913\
*/
SELECT NAME FROM STUDENTS WHERE MARKS > 75 ORDER BY RIGHT(NAME, 3), ID ASC;