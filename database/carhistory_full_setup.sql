-- ============================================================
-- Car History Remove - Complete Database Setup SQL
-- Site: carhistoryremove.online
-- Database: u309239977_carhistory
-- Generated: 2026-02-28
-- ============================================================
-- Import this file in Hostinger hPanel -> phpMyAdmin
-- ============================================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ============================================================
-- TABLE: users  (Admin login)
-- ============================================================
CREATE TABLE IF NOT EXISTS `users` (
  `id`                BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`              VARCHAR(255)    NOT NULL,
  `email`             VARCHAR(255)    NOT NULL,
  `email_verified_at` TIMESTAMP       NULL DEFAULT NULL,
  `password`          VARCHAR(255)    NOT NULL,
  `remember_token`    VARCHAR(100)    NULL DEFAULT NULL,
  `created_at`        TIMESTAMP       NULL DEFAULT NULL,
  `updated_at`        TIMESTAMP       NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: password_reset_tokens
-- ============================================================
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email`      VARCHAR(255) NOT NULL,
  `token`      VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP    NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: sessions
-- ============================================================
CREATE TABLE IF NOT EXISTS `sessions` (
  `id`            VARCHAR(255) NOT NULL,
  `user_id`       BIGINT UNSIGNED NULL DEFAULT NULL,
  `ip_address`    VARCHAR(45)  NULL DEFAULT NULL,
  `user_agent`    TEXT         NULL DEFAULT NULL,
  `payload`       LONGTEXT     NOT NULL,
  `last_activity` INT          NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: cache
-- ============================================================
CREATE TABLE IF NOT EXISTS `cache` (
  `key`        VARCHAR(255) NOT NULL,
  `value`      MEDIUMTEXT   NOT NULL,
  `expiration` INT          NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: cache_locks
-- ============================================================
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key`        VARCHAR(255) NOT NULL,
  `owner`      VARCHAR(255) NOT NULL,
  `expiration` INT          NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: jobs (Laravel queue)
-- ============================================================
CREATE TABLE IF NOT EXISTS `jobs` (
  `id`           BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue`        VARCHAR(255)    NOT NULL,
  `payload`      LONGTEXT        NOT NULL,
  `attempts`     TINYINT UNSIGNED NOT NULL,
  `reserved_at`  INT UNSIGNED    NULL DEFAULT NULL,
  `available_at` INT UNSIGNED    NOT NULL,
  `created_at`   INT UNSIGNED    NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `job_batches` (
  `id`             VARCHAR(255) NOT NULL,
  `name`           VARCHAR(255) NOT NULL,
  `total_jobs`     INT          NOT NULL,
  `pending_jobs`   INT          NOT NULL,
  `failed_jobs`    INT          NOT NULL,
  `failed_job_ids` LONGTEXT     NOT NULL,
  `options`        MEDIUMTEXT   NULL DEFAULT NULL,
  `cancelled_at`   INT          NULL DEFAULT NULL,
  `created_at`     INT          NOT NULL,
  `finished_at`    INT          NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id`         BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid`       VARCHAR(255)    NOT NULL,
  `connection` TEXT            NOT NULL,
  `queue`      TEXT            NOT NULL,
  `payload`    LONGTEXT        NOT NULL,
  `exception`  LONGTEXT        NOT NULL,
  `failed_at`  TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: cars  (Main cars listing)
-- Columns: id, car_name, vin, description, car_image_url,
--          mileage, location, damage, slug, timestamps
-- ============================================================
CREATE TABLE IF NOT EXISTS `cars` (
  `id`            BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `car_name`      VARCHAR(255)    NOT NULL,
  `vin`           VARCHAR(255)    NOT NULL,
  `description`   TEXT            NULL DEFAULT NULL,
  `car_image_url` TEXT            NULL DEFAULT NULL,
  `mileage`       VARCHAR(255)    NULL DEFAULT NULL,
  `location`      VARCHAR(255)    NULL DEFAULT NULL,
  `damage`        VARCHAR(255)    NULL DEFAULT NULL,
  `slug`          VARCHAR(255)    NOT NULL,
  `created_at`    TIMESTAMP       NULL DEFAULT NULL,
  `updated_at`    TIMESTAMP       NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cars_vin_unique`  (`vin`),
  UNIQUE KEY `cars_slug_unique` (`slug`),
  KEY `cars_created_at_index`   (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: inquiries  (Contact / inquiry form submissions)
-- ============================================================
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id`         BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `car_id`     VARCHAR(255)    NULL DEFAULT NULL,
  `name`       VARCHAR(255)    NOT NULL,
  `email`      VARCHAR(255)    NOT NULL,
  `phone`      VARCHAR(255)    NULL DEFAULT NULL,
  `message`    TEXT            NULL DEFAULT NULL,
  `status`     VARCHAR(255)    NOT NULL DEFAULT 'new',
  `created_at` TIMESTAMP       NULL DEFAULT NULL,
  `updated_at` TIMESTAMP       NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inquiries_status_index`     (`status`),
  KEY `inquiries_car_id_index`     (`car_id`),
  KEY `inquiries_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: blogs
-- ============================================================
CREATE TABLE IF NOT EXISTS `blogs` (
  `id`               BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title`            VARCHAR(255)    NOT NULL,
  `slug`             VARCHAR(255)    NOT NULL,
  `content`          TEXT            NOT NULL,
  `excerpt`          TEXT            NULL DEFAULT NULL,
  `image`            VARCHAR(255)    NULL DEFAULT NULL,
  `meta_title`       VARCHAR(255)    NULL DEFAULT NULL,
  `meta_description` TEXT            NULL DEFAULT NULL,
  `meta_keywords`    VARCHAR(255)    NULL DEFAULT NULL,
  `meta_author`      VARCHAR(255)    NULL DEFAULT NULL,
  `is_published`     TINYINT(1)      NOT NULL DEFAULT 0,
  `order`            INT             NOT NULL DEFAULT 0,
  `created_at`       TIMESTAMP       NULL DEFAULT NULL,
  `updated_at`       TIMESTAMP       NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: settings  (Site settings key-value store)
-- ============================================================
CREATE TABLE IF NOT EXISTS `settings` (
  `id`         BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `key`        VARCHAR(255)    NOT NULL,
  `value`      TEXT            NULL DEFAULT NULL,
  `created_at` TIMESTAMP       NULL DEFAULT NULL,
  `updated_at` TIMESTAMP       NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: migrations  (Laravel migration tracker)
-- ============================================================
CREATE TABLE IF NOT EXISTS `migrations` (
  `id`        INT UNSIGNED    NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255)    NOT NULL,
  `batch`     INT             NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- DATA: Admin User
-- Email:    mateenali1122@gmail.com
-- Password: Admin@@@786  (bcrypt hashed)
-- ============================================================
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES (
  1,
  'Admin',
  'mateenali1122@gmail.com',
  NOW(),
  '$2y$12$h4utqoGxwGgKUiQNLQ/9u.huwT6.f82asll2vWp8JJeJD70Vq156Ou',
  NULL,
  NOW(),
  NOW()
);

-- ============================================================
-- DATA: Migration records (so Laravel knows tables are created)
-- ============================================================
INSERT IGNORE INTO `migrations` (`migration`, `batch`) VALUES
  ('0001_01_01_000000_create_users_table', 1),
  ('0001_01_01_000001_create_cache_table', 1),
  ('0001_01_01_000002_create_jobs_table', 1),
  ('2026_02_18_093437_create_cars_table', 1),
  ('2026_02_18_093456_create_inquiries_table', 1),
  ('2026_02_18_101105_add_details_to_cars_table', 1),
  ('2026_02_22_000001_create_blogs_table', 1),
  ('2026_02_23_070440_create_settings_table', 1);

SET FOREIGN_KEY_CHECKS = 1;

-- ============================================================
-- DONE! All tables created successfully.
-- After import, login at: https://carhistoryremove.online/login
-- Email:    mateenali1122@gmail.com
-- Password: Admin@@@786
-- ============================================================
