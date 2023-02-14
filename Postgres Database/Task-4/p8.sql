/*
    P8 Submission: https://www.hackerrank.com/challenges/weather-observation-station-9/submissions/database/314270483
*/
SELECT DISTINCT CITY FROM STATION WHERE NOT LEFT(CITY, 1) IN ('a','i','e','u','o'); 