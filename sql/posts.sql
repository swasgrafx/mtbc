CREATE TABLE posts (
    id CHAR(36) PRIMARY KEY COMMENT 'Primary Key UUID',
    title VARCHAR(255) COMMENT 'Title of blog post',
    slug VARCHAR(255) COMMENT 'An SEO and human friendly lookup key',
    meta_keywords VARCHAR(255) COMMENT 'Metadata for SEO',
    meta_description VARCHAR(255) COMMENT 'Metadata for SEO',
    body TEXT COMMENT 'The content of the blog post',
    user_id VARCHAR(36) COMMENT 'The creator of the blog post',
    created DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp of user creation',
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Timestamp of last user modification'
) ENGINE=INNODB;