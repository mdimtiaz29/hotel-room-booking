CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    gmail VARCHAR(100) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO admins (name, role, password, gmail, created_at, updated_at)
VALUES ('Imtiaz', 'admin', 'imtiaz@123', 'imtiaz@gmail.com', NOW(), NOW());

INSERT INTO admins (name, role, password, gmail, created_at, updated_at)
VALUES ('Anil', 'super_admin', 'anil@123', 'anil@gmail.com', NOW(), NOW());

select * from settings;

CREATE TABLE settings (
    sl INT AUTO_INCREMENT PRIMARY KEY,
    site_title VARCHAR(255) NOT NULL,
    site_about TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
delete from settings where sl=2;

CREATE TABLE user_queries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    seen TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
select * from user_queries;
delete from user_queries;

CREATE TABLE features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE facilities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
select * from facilities;

CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    area VARCHAR(50),
    price DECIMAL(10,2),
    quantity INT,
    adult INT,
    children INT,
    description TEXT,
    status TINYINT DEFAULT 0,
    features TEXT,
    facilities TEXT
);
ALTER TABLE rooms
ADD created_at TIMESTAMP NULL,
ADD updated_at TIMESTAMP NULL;

select * from rooms;

CREATE TABLE roomphotos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    room_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL

);
ALTER TABLE roomphotos 
CHANGE name photoname VARCHAR(255) NOT NULL;
select * from roomphotos;
delete from roomphotos;


CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    phn VARCHAR(20),
    image VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    
    address TEXT,
    postalcode VARCHAR(20),
    dob DATE,
    active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

select * from users;
delete from users;


CREATE TABLE room_bookings (
id BIGINT AUTO_INCREMENT PRIMARY KEY,
user_id BIGINT,
room_id BIGINT,
checkin DATE,
checkout DATE,
adult INT,
children INT,
created_at TIMESTAMP NULL,
updated_at TIMESTAMP NULL
);
ALTER TABLE room_bookings
ADD confirm TINYINT(1) DEFAULT 0;

select checkin, checkout, datediff(checkout,checkin) as days from room_bookings;
-- ALTER TABLE room_bookings
-- MODIFY created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;

delete from room_bookings where user_id=12;
select * from room_bookings;
-- ALTER TABLE room_bookings
-- MODIFY updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
-- SET GLOBAL time_zone = '+00:00';
-- SELECT NOW(), UTC_TIMESTAMP();

select * from room_bookings;

delete from room_bookings;

UPDATE room_bookings
SET confirm=0
WHERE id=17;


CREATE TABLE reviews (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    user_id BIGINT UNSIGNED NOT NULL,
    room_id BIGINT UNSIGNED NOT NULL,
    booking_id BIGINT UNSIGNED NOT NULL,

    rating TINYINT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    review_text TEXT NOT NULL,

    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    UNIQUE (booking_id)
);

select * from reviews;

