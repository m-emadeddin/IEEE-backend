/*
    Problem Link: https://www.hackerrank.com/challenges/full-score/problem
    P8 Submission: https://www.hackerrank.com/challenges/full-score/submissions/database/315652869
*/
SELECT h.hacker_id, h.name 
FROM Hackers h, Difficulty d, Challenges c, Submissions s 
WHERE h.hacker_id = s.hacker_id 
AND d.score = s.score 
AND c.difficulty_level = d.difficulty_level 
AND c.challenge_id = s.challenge_id 
GROUP BY 1, 2 having  count(h.hacker_id) > 1 
ORDER BY count(h.hacker_id) desc, h.hacker_id;