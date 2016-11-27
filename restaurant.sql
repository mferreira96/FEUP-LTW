CREATE TABLE user (
  id INTEGER PRIMARY KEY,
  firstName TEXT,
  lastName TEXT,
  email TEXT,
  photo TEXT,
  password TEXT
);


CREATE TABLE restaurant (
  id INTEGER PRIMARY KEY,
  name TEXT,
  description TEXT,
  rate INTEGER,
  photo TEXT
);


CREATE TABLE review (
  id INTEGER PRIMARY KEY,
  rate INTEGER,
  comment TEXT
);
