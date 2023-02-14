/*
    P11 Submission: https://www.hackerrank.com/challenges/weather-observation-station-6/submissions/database/314270761
*/
SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY, 1) IN ('a','i','e','u','o');