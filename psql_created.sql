DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id SERIAL PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
	email VARCHAR(120) NOT NULL UNIQUE,
	phone VARCHAR(15) UNIQUE,
	main_photo_id INT,
	created_at TIMESTAMP
);

DROP TABLE IF EXISTS messages;
CREATE TABLE messages ( 
	id SERIAL PRIMARY KEY,
	from_user_id INT NOT NULL,
	to_user_id INT NOT NULL,
	body TEXT,
	is_important BOOLEAN,
	is_delivered BOOLEAN,
	created_at TIMESTAMP
);

DROP TABLE IF EXISTS friendship_statuses;
CREATE TABLE friendship_statuses (
	id SERIAL PRIMARY KEY,
	name VARCHAR(30) UNIQUE
);

DROP TABLE IF EXISTS friendship;
CREATE TABLE friendship ( 
	id SERIAL PRIMARY KEY,
	requested_by_user_id INT NOT NULL,
	requested_to_user_id INT NOT NULL,
	status_id INT NOT NULL,
	requested_at TIMESTAMP,
	confirmed_at TIMESTAMP
);

DROP TABLE IF EXISTS communities;
CREATE TABLE communities (
	id SERIAL PRIMARY KEY,
	name VARCHAR(120) UNIQUE,
	creator_id INT NOT NULL,
	created_at TIMESTAMP
);

DROP TABLE IF EXISTS communities_users;
CREATE TABLE communities_users (
	community_id INT NOT NULL,
	user_id INT NOT NULL,
	created_at TIMESTAMP,
	PRIMARY KEY (community_id, user_id)
);

DROP TABLE IF EXISTS photo;
CREATE TABLE photo(
	id SERIAL PRIMARY KEY,
	url VARCHAR(250) NOT NULL UNIQUE,
	owner_id INT NOT NULL,
	description VARCHAR(250) NOT NULL,
	uploaded_at TIMESTAMP NOT NULL,
	size INT NOT NULL
);

DROP TABLE IF EXISTS media;
CREATE TABLE media(
	id SERIAL PRIMARY KEY,
	url VARCHAR(250) NOT NULL UNIQUE,
	owner_id INT NOT NULL,
	description VARCHAR(250) NOT NULL,
	uploaded_at TIMESTAMP NOT NULL,
	size INT NOT NULL
);

DROP TABLE IF EXISTS subscribes;
CREATE TABLE subscribes(
	id SERIAL PRIMARY KEY,
	user_id INT NOT NULL,
	sub_user_id INT,
	sub_community_id INT
);

