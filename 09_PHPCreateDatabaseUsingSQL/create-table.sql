CREATE TABLE users (
    id INT(11) NOT NUll AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);

CREATE TABLE comments (
	  id INT(11) NOT NUll AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    comment_text TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    users_id INT(11),
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);

INSERT INTO users (username, pwd, email) VALUES ('rizwan', 'rizwan123', 'rizwan@gmail.com');
INSERT INTO users (username, pwd, email) VALUES ('rizwan', 'rizwan123', 'rizwan@gmail.com');
UPDATE users SET username = 'riz', pwd = 'riz001' WHERE id = 1;
UPDATE users SET username = 'riz009', pwd = 'riz009' WHERE id = 1 AND username = 'riz';
UPDATE users SET username = 'riz009', pwd = 'riz009' WHERE username = 'riz100' OR username = 'riz101';
DELETE FROM users WHERE id = 1;
INSERT INTO comments (username, comment_text, users_id) VALUES ('rizwan', 'Hallo this is nice comment', 3);
SELECT username, email FROM users WHERE id = 3;
SELECT username, comment_text FROM comments WHERE id = 1;
SELECT username, comment_text FROM comments WHERE users_id = 3;
SELECT * FROM comments WHERE users_id = 3;

/*Using Inner Join to get data from two different tables*/
SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;
SELECT users.username, comments.comment_text, comments.created_at FROM users INNER JOIN comments ON users.id = comments.users_id;

/*Using Left Join to get data from two different tables*/
SELECT * FROM users LEFT JOIN comments ON users.id = comments.users_id;

/*Using Right Join to get data from two different tables*/
SELECT * FROM users RIGHT JOIN comments ON users.id = comments.users_id;