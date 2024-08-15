CREATE TABLE workers
(
    id            INT AUTO_INCREMENT PRIMARY KEY,
    email         VARCHAR(255) UNIQUE NOT NULL,
    name          VARCHAR(255),
    address       TEXT,
    phone         VARCHAR(255),
    comments      TEXT,
    department_id INT
);

CREATE TABLE departments
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL
);

ALTER TABLE workers
    ADD CONSTRAINT fk_workers_departments
        FOREIGN KEY (department_id)
            REFERENCES departments (id);