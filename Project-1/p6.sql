/*
    Problem Link: https://www.hackerrank.com/challenges/weather-observation-station-19/problem
    P6 Submission: https://www.hackerrank.com/challenges/weather-observation-station-19/submissions/database/315646721
*/
SELECT ROUND( SQRT(POWER(MIN(LAT_N) - MAX(LAT_N),2) + POWER(MAX(LONG_W) - MIN(LONG_W),2)) , 4) FROM STATION;