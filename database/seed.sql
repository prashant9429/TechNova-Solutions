USE technova_db;

INSERT INTO admins (name,email,password) VALUES
('Super Admin','admin@technova.com','$2y$10$ExampleHashedPassword');

INSERT INTO services (service_name,description) VALUES
('Web Development','Enterprise website and web application development'),
('Mobile App Development','Flutter and native mobile solutions'),
('Cloud Solutions','Scalable cloud infrastructure services');

INSERT INTO settings(setting_key,setting_value) VALUES
('site_name','TechNova Solutions'),
('email','info@technova.com');
