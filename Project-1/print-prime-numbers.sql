/*
    Problem Link: https://www.hackerrank.com/challenges/print-prime-numbers/problem?isFullScreen=true
    Submission: https://www.hackerrank.com/challenges/contest-leaderboard/submissions/database/315675303
*/
DECLARE @N INT = 2;
DECLARE @Primes VARCHAR(2000) = ''
WHILE @N < 1000
BEGIN
    DECLARE @isPrime INT = 1;
    DECLARE @I INT = 2;
    WHILE @I <= SQRT(@N)
        BEGIN
        IF @N % @I = 0
        BEGIN
            SET @isPrime = 0;
            BREAK;
        END

        SET @I = @I + 1;
    END

    IF @isPrime = 1
    BEGIN
        IF @N = 2
        BEGIN
            SET @Primes = CAST(@N AS VARCHAR(10))
        END
        ELSE SET @Primes = @Primes + '&' + CAST(@N AS VARCHAR(10))
    END

    SET @N = @N + 1
END

SELECT @Primes;