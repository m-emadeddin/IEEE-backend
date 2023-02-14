/*
    P7 Submission: https://www.hackerrank.com/challenges/weather-observation-station-10/submissions/database/314270354
*/
SELECT DISTINCT CITY FROM STATION WHERE RIGHT(CITY, 1) NOT IN ('a','i','e','u','o');