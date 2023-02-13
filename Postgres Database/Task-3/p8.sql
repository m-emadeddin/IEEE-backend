/*
    P8 Submission: https://www.hackerrank.com/challenges/weather-observation-station-12/submissions/database/314251425
*/
SELECT DISTINCT CITY FROM STATION 
    WHERE NOT LEFT(CITY, 1) IN ('a','i','e','u','o') 
    AND NOT  RIGHT(CITY, 1) IN ('a','i','e','u','o');