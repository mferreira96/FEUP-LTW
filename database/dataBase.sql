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


CREATE TABLE restaurantOwners(
  idRestaurant INTEGER REFERENCES restaurant,
  username INTEGER REFERENCES user
);


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
