SELECT `name` FROM distrib
WHERE (id_distrib in(42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89, 90))
OR (char_length(`name`) - char_length(REPLACE(`name`, 'y', ''))) = 2
OR (char_length(`name`) - char_length(REPLACE(`name`, 'Y', ''))) = 2
LIMIT 2, 5;
