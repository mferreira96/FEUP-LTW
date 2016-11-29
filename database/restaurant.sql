CREATE TABLE user (
  id INTEGER PRIMARY KEY,
  userName TEXT,
  name TEXT,
  email TEXT,
  idPhoto INTEGER REFERENCES image,
  password TEXT
);


CREATE TABLE restaurant (
  id INTEGER PRIMARY KEY,
  name TEXT,
  description TEXT,
  rate INTEGER,
  idPhoto INTEGER REFERENCES image,
  idOwner INTEGER REFERENCES user
);


CREATE TABLE review (
  id INTEGER PRIMARY KEY,
  idRestaurant INTEGER REFERENCES restaurant,
  rate INTEGER,
  comment TEXT
);


CREATE TABLE image(
  id INTEGER PRIMARY KEY,
  name TEXT
)
