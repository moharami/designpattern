CREATE TABLE posts
(
    id         INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title      VARCHAR(255) NOT NULL,
    body       VARCHAR(255) NOT NULL,
    created_at DATETIME NULL,
    updated_at DATETIME NULL
);