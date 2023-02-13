/*
    P4 Submission: https://www.hackerrank.com/challenges/weather-observation-station-3/submissions/database/314088139
*/
SELECT DISTINCT CITY FROM STATION WHERE MOD(ID, 2) = 0;