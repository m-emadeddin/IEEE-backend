/*
    P6 Submission: https://www.hackerrank.com/challenges/weather-observation-station-11/submissions/database/314270237
*/
SELECT DISTINCT CITY FROM STATION 
    WHERE NOT LEFT(CITY, 1) IN ('a','i','e','u','o') 
    OR NOT  RIGHT(CITY, 1) IN ('a','i','e','u','o');