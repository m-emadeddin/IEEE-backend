/*
    P9 Submission: https://www.hackerrank.com/challenges/weather-observation-station-8/submissions/database/314270596
*/
SELECT DISTINCT CITY FROM STATION 
    WHERE LEFT(CITY, 1) IN ('a','i','e','u','o') 
    AND RIGHT(CITY, 1) IN ('a','i','e','u','o');
