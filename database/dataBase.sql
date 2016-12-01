DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS restaurant;
DROP TABLE IF EXISTS restaurantOwners
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS image;

CREATE TABLE user (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  userName TEXT,
  name TEXT,
  email TEXT,
  idPhoto INTEGER REFERENCES image,
  password TEXT
);


INSERT INTO user VALUES(NULL, 'masterChef', 'Marcelo', 'estouaqui@gmail.com', 1, '46ed215d4162eb1145147b7e6ffd66ea7891f172'); /* marcelo */
INSERT INTO user VALUES(NULL, 'miniChef', 'João', 'seiCozinhar@gmail.com', 3, 'a9ee6deeaced800b54d1f5fdfb3ab240e1f359a9'); /*querias*/


CREATE TABLE restaurant (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT,
  description TEXT,
  rate INTEGER,
  idPhoto INTEGER REFERENCES image,
  local TEXT
);

INSERT INTO restaurant VALUES(NULL, 'Taska & Arte', 'O melhor local para comer comida portuguesa', NULL, 'Moncao');


CREATE TABLE restaurantOwners(
  idRestaurant INTEGER REFERENCES restaurant,
  idUser INTEGER REFERENCES user

);

INSERT INTO restaurantOwners VALUES(1,1);

CREATE TABLE review (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idRestaurant INTEGER REFERENCES restaurant,
  idUser INTEGER REFERENCES user,
  rate INTEGER,
  comment TEXT
);


CREATE TABLE image (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT
);

INSERT  INTO image VALUES(NULL,'marcelo.png');
INSERT  INTO image VALUES(NULL,'taskArte.png');
INSERT  INTO image VALUES(NULL,'joao.png');


CREATE TABLE reply(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idReview INTEGER REFERENCES review,
  answer TEXT
);
