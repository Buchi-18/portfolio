

CREATE TABLE todos (
  id INT NOT NULL AUTO_INCREMENT,
  is_done BOOL DEFAULT false,
  title TEXT,
  PRIMARY KEY (id)
);

INSERT INTO todos (title) VALUES ('aaa');
INSERT INTO todos (title, is_done) VALUES ('bbb', true);
INSERT INTO todos (title) VALUES ('ccc');

SELECT * FROM todos;


-- データベースを追加
-- create database データベース名 default charset utf8;
-- create database todos_db default charset utf8;

-- データベースを確認
-- show databases;

-- データベースを確認
-- use データベース名;
-- use todos_db;