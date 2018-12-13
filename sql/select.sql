SELECT
    id,
    CONCAT(last_name, ',',first_name) AS name,
    email
FROM
    users
WHERE
    email LIKE '%.net';