CREATE DATABASE IF NOT EXISTS `coalitiontest` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `coalitiontest`;

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://coalitiontest.local', 'yes'),
(2, 'home', 'http://coalitiontest.local', 'yes'),
(3, 'blogname', 'Coalition Test', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes');

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_status`, `display_name`) VALUES
(1, 'coalitiontest', MD5('wordpresstest'), 'coalitiontest', 'admin@example.com', '', NOW(), 0, 'Admin');

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_content`, `post_title`, `post_status`, `post_name`, `post_type`) VALUES
(1, 1, NOW(), 'Welcome to the Homepage!', 'Homepage', 'publish', 'homepage', 'page');

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 1, '_wp_page_template', 'homepage.php');

