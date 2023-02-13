/*
    P5 Submission: https://www.hackerrank.com/challenges/weather-observation-station-4/submissions/database/314088909
*/
SELECT (COUNT(CITY)  - COUNT(DISTINCT CITY)) FROM STATION;