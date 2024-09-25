CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    name VARCHAR(50),
    role VARCHAR(50) DEFAULT 'user'
);

-- Example insert statement (use hashed password in practice)
INSERT INTO users (email, password, name) VALUES ('myemail@mail.com', 'password', 'david');

-- Example select statement
SELECT * FROM users WHERE email = 'myemail@mail.com';
