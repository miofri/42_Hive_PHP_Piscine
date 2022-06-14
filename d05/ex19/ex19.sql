SELECT datediff(max(DATE(date)), min(DATE(date))) AS 'uptime'
FROM member_history;
