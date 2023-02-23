/*
    Problem Link: https://www.hackerrank.com/challenges/harry-potter-and-wands/problem
    Submission: https://www.hackerrank.com/challenges/harry-potter-and-wands/submissions/database/315673734
*/
SELECT W.ID, WP.AGE, W.COINS_NEEDED, W.POWER
FROM WANDS W
JOIN WANDS_PROPERTY WP ON W.CODE = WP.CODE
JOIN (SELECT WP.AGE, W.POWER, MIN(W.COINS_NEEDED) AS COINS_NEEDED
        FROM WANDS W
        JOIN WANDS_PROPERTY WP ON W.CODE = WP.CODE WHERE WP.IS_EVIL = 0
        GROUP BY WP.AGE, W.POWER) AS new_col 
ON WP.AGE = new_col.AGE AND W.POWER = new_col.POWER AND W.COINS_NEEDED = new_col.COINS_NEEDED
ORDER BY W.POWER DESC, WP.AGE DESC;