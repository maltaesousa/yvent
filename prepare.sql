CREATE ROLE "www-data" NOSUPERUSER LOGIN password 'www-data';
CREATE SCHEMA main AUTHORIZATION "www-data";
CREATE SCHEMA main_static AUTHORIZATION "www-data";
CREATE TABLE main.role (id integer, name text, description text, CONSTRAINT id PRIMARY KEY(id));
INSERT INTO main.role (id, name) VALUES (0, 'role_admin');
ALTER TABLE main.role OWNER to "www-data";
CREATE TABLE main_static.user (id integer, "type" text, username text, password text, email text, is_password_changed boolean, role_name text, temp_password text, CONSTRAINT id PRIMARY KEY(id));
INSERT INTO main_static.user VALUES (0, 'user', 'masrad', '8ce6b3485cbaea4b718636344268c174f979dc9b', 'test@gmail.com', TRUE,'role_admin');
ALTER TABLE main_static.user OWNER to "www-data";