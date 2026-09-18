-- Pit Wall database schema
-- Import this file (e.g. via phpMyAdmin, or `mysql -u root -p < schema.sql`)
-- before using the site. It creates the database and the two tables
-- the PHP code relies on: `users` (signup/login) and `inquiries`
-- (Contact Us submissions).

CREATE DATABASE IF NOT EXISTS pitwall_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE pitwall_db;

CREATE TABLE IF NOT EXISTS users (
    id            INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username      VARCHAR(50)  NOT NULL UNIQUE,
    email         VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at    DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS inquiries (
    id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(100) NOT NULL,
    email      VARCHAR(150) NOT NULL,
    topic      VARCHAR(50)  NOT NULL,
    message    TEXT         NOT NULL,
    created_at DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
