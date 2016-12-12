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


INSERT INTO user VALUES('masterChef', 'Marcelo', 'estouaqui@gmail.com', '46ed215d4162eb1145147b7e6ffd66ea7891f172'); /* marcelo */
INSERT INTO user VALUES('miniChef', 'João', 'seiCozinhar@gmail.com', 'a9ee6deeaced800b54d1f5fdfb3ab240e1f359a9'); /*querias*/


CREATE TABLE restaurant (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT,
  rate INTEGER,
  street TEXT,
  number TEXT,
  city TEXT,
  postcode TEXT,
  opening_hours TEXT,
  link_to_website TEXT,
  type_of_food TEXT,
  comment TEXT,
  telephoneNumber TEXT
);

INSERT INTO restaurant(name,rate,street,number,city,type_of_food,comment, link_to_website,telephoneNumber, opening_hours)
    VALUES('Taskinha',0, 'rua miranda',3, 'Porto','portugues', 'Muito boa comida portuguesa', 'www.google.com', 963258741, '14h');
INSERT INTO restaurant(name,rate,street,number,city,type_of_food,comment, link_to_website,telephoneNumber, opening_hours)
    VALUES('Bitoque',0, 'rua vasco da gama',2, 'Lisboa','portugues', 'A melhor comida de Lisboa', 'www.google.com', 968745123, '15h');

CREATE TABLE restaurantOwners(
  idRestaurant INTEGER REFERENCES restaurant,
  username INTEGER REFERENCES user
);

INSERT INTO restaurantOwners VALUES(1,1);

CREATE TABLE review (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idRestaurant INTEGER REFERENCES restaurant,
  username INTEGER REFERENCES user,
  rating INTEGER,
  comment TEXT
);


CREATE TABLE image_user(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  username INTEGER REFERENCES user,
  name TEXT
);

INSERT INTO image_user VALUES(NULL,'masterChef','gallery_example.png');
INSERT INTO image_user VALUES(NULL,'miniChef','random_2.png');

CREATE TABLE image_restaurant(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idRestaurant INTEGER REFERENCES restaurant,
  name TEXT
);

INSERT INTO image_restaurant VALUES(NULL,1,'random_1.png');
INSERT INTO image_restaurant VALUES(NULL,2,'random_2.png');

CREATE TABLE reply(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  idReview INTEGER REFERENCES review,
  answer TEXT
);


CREATE TRIGGER update_rate AFTER INSERT ON review
BEGIN
	UPDATE restaurant SET rate = (
		SELECT AVG(rating) FROM restaurant
		JOIN review ON (restaurant.id = NEW.idRestaurant)
		GROUP BY (idRestaurant)
		HAVING (idRestaurant = NEW.idRestaurant)
	)
	WHERE (restaurant.id = NEW.idRestaurant);
END;


INSERT INTO review VALUES(NULL,1,'miniChef', 4, 'Good space and wonderfull food');
INSERT INTO review VALUES(NULL,1,'masterChef', 5, 'The best food i had ever tasted');
