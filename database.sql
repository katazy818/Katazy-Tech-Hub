-- Katazy portfolio database. Import this whole file in phpMyAdmin (Import tab).

CREATE DATABASE IF NOT EXISTS katazy_portfolio CHARACTER SET utf8mb4;
USE katazy_portfolio;

-- Remove old copies of the tables so the import always starts clean
DROP TABLE IF EXISTS projects;
DROP TABLE IF EXISTS skills;
DROP TABLE IF EXISTS messages;

-- Table for the projects (link = the address of the live website)
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    tools VARCHAR(150) NOT NULL,
    image VARCHAR(100) DEFAULT NULL,
    link VARCHAR(255) DEFAULT NULL
);

-- Table for the skills
CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL
);

-- Table for contact form messages
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert the projects (replace the NULL at the end of each line with the real website address in quotes)
INSERT INTO projects (title, description, tools, image, link) VALUES ('Lyenifoods', 'A food distribution and e-commerce project for local ordering, product cataloguing and smoother food retail operations.', 'PHP, MySQL, HTML, CSS', 'lyeni.jpg', NULL);
INSERT INTO projects (title, description, tools, image, link) VALUES ('Kickstore', 'An online footwear store with product pages, a shopping cart and order management. The front end is kept separate from the PHP database code.', 'PHP, MySQLi, HTML, CSS, JavaScript', 'kickstore.jpg', NULL);

-- Insert the skills
INSERT INTO skills (category, name) VALUES ('Front-End', 'HTML');
INSERT INTO skills (category, name) VALUES ('Front-End', 'CSS');
INSERT INTO skills (category, name) VALUES ('Front-End', 'JavaScript');
INSERT INTO skills (category, name) VALUES ('Front-End', 'Responsive layouts');
INSERT INTO skills (category, name) VALUES ('Back-End', 'PHP');
INSERT INTO skills (category, name) VALUES ('Back-End', 'MySQL');
INSERT INTO skills (category, name) VALUES ('Back-End', 'User login systems');
INSERT INTO skills (category, name) VALUES ('Learning', 'Python');
INSERT INTO skills (category, name) VALUES ('Learning', 'Full-stack architecture');
INSERT INTO skills (category, name) VALUES ('Learning', 'Problem solving');

-- To add a website link later, run a line like this (change the address):
-- UPDATE projects SET link = 'https://example.com' WHERE title = 'Kickstore';
