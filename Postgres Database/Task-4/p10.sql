/*
    P10 Submission: https://www.hackerrank.com/challenges/weather-observation-station-7/submissions/database/314270713
*/
SELECT DISTINCT CITY FROM STATION WHERE RIGHT(CITY, 1) IN ('a','i','e','u','o');