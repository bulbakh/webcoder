INSERT INTO departments (name)
VALUES
    ('Marketing'),
    ('Development')
;

INSERT INTO workers (email, name, address, phone, comments, department_id)
VALUES
    ('user1@example.com', 'John Doe', '123 Main St', '555-1212', 'Lorem ipsum dolor sit amet', 1),
    ('jane.doe@example.com', 'Jane Doe', '456 Elm St', '555-3434', 'Consectetur adipiscing elit', 2)
;
