CREATE DATABASE cenemaster;

CREATE TABLE Users (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  emai VARCHAR(100) NOT NULL,
  password VARCHAR(50) NOT NULL
);


CREATE TABLE Posts (
  post_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  post_body VARCHAR(250) NOT NULL,
  image VARCHAR(250) ,
  published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  user_id INT REFERENCES user(user_id)
);

CREATE TABLE Comments (
  comment_id int PRIMARY KEY AUTO_INCREMENT,
  published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  comment_body VARCHAR(250) NOT NULL,
  post_id INT REFERENCES post(post_id),
  user_id INT REFERENCES user(user_id)
);

INSERT INTO Users ( first_name, last_name, emai, password ) VALUES('younes','nemli','younesbuzz@gmail.com','abcd1234');
INSERT INTO Posts ( title, post_body, image, user_id ) VALUES('Post Title','Post Body','image link', 1);
INSERT INTO Comments ( comment_body, post_id, user_id ) VALUES('comment Body',1, 1);