/*
    P4 Submission: https://www.hackerrank.com/challenges/what-type-of-triangle/submissions/database/314269653
*/
SELECT (
    IF( ( ((A+B) <= C) OR ((A+C) <= B) OR ((B+C) <= A) ), 'Not A Triangle',
        IF( (A=B) OR (B=C) OR (A=C), 
            IF((A=B) AND (B=C), 'Equilateral', 'Isosceles')
                                    , 'Scalene')
        )
    )
FROM TRIANGLES;