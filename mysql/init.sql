CREATE TABLE test_db.users (
    id          INT             NOT NULL,
    firstnamr   VARCHAR(14)     NOT NULL,
    age         INT ,
    PRIMARY KEY (id)
);

INSERT INTO `users` VALUES (1, 'SAKAI', 30)