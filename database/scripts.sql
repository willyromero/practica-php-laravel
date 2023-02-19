-- create database users_crud_laravel;
INSERT INTO `users_crud_laravel`.`users`
(
`name`,
`email`,
`email_verified_at`,
`password`,
`remember_token`,
`created_at`,
`updated_at`)
VALUES
(
'willy romero',
'willy.romero@espoch.edu-ec',
now(),
'mysupersecret',
null,
now(),
now());
