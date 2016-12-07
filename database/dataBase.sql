DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS restaurant;
DROP TABLE IF EXISTS restaurantOwners;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS image_user;
DROP TABLE IF EXISTS image_restaurant;

CREATE TABLE user (
  username TEXT,
  name TEXT,
  email TEXT,
  password TEXT
);


INSERT INTO user VALUES('masterChef', 'Marcelo', 'estouaqui@gmail.com', 1, '46ed215d4162eb1145147b7e6ffd66ea7891f172'); /* marcelo */
INSERT INTO user VALUES('miniChef', 'João', 'seiCozinhar@gmail.com', 3, 'a9ee6deeaced800b54d1f5fdfb3ab240e1f359a9'); /*querias*/


CREATE TABLE restaurant (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT,
  rate INTEGER,
  street TEXT,
  number TEXT,
  city TEXT,
  postcode TEXT,
  opening_hours TEXT,
  link_to_website TEXT
);


CREATE TABLE restaurantOwners(
  idRestaurant INTEGER REFERENCES restaurant,
  username INTEGER REFERENCES user
);

INSERT INTO restaurantOwners VALUES(1,1);

CREATE TABLE review (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idRestaurant INTEGER REFERENCES restaurant,
  username INTEGER REFERENCES user,
  rate INTEGER,
  comment TEXT
);


CREATE TABLE image_user(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  username INTEGER REFERENCES user,
  name TEXT
);

CREATE TABLE image_restaurant(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idRestaurant INTEGER REFERENCES restaurant,
  name TEXT
);



CREATE TABLE reply(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idReview INTEGER REFERENCES review,
  answer TEXT
);
