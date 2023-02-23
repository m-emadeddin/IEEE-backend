/*
    Problem Link: https://www.hackerrank.com/challenges/contest-leaderboard/problem
    Submission: https://www.hackerrank.com/challenges/contest-leaderboard/submissions/database/315675303
*/
SELECT h.hacker_id, h.name, sum(s.score)
FROM (SELECT hacker_id, challenge_id, max(score) as score
        FROM Submissions 
        GROUP BY 1,2) AS s
JOIN Hackers h ON h.hacker_id = s.hacker_id
GROUP BY 1,2 HAVING sum(s.score) > 0
ORDER BY sum(s.score) DESC, h.hacker_id;