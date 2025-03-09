DROP TABLE IF EXISTS Users;
CREATE TABLE Users
(
    user_id SERIAL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT NOW()
);

DROP TABLE IF EXISTS Project;
CREATE TABLE Project
(
    project_id SERIAL PRIMARY KEY,
    title VARCHAR(100) NOT NULL UNIQUE,
    content TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP,
    user_id INTEGER REFERENCES Users(user_id)
);

DROP TABLE IF EXISTS Users_Project;
CREATE TABLE Users_Project
(
    user_project_id SERIAL PRIMARY KEY,
    user_id INTEGER REFERENCES Users(user_id),
    project_id INTEGER REFERENCES Project(project_id)
);

DROP TABLE IF EXISTS Task;
CREATE TABLE Task
(
    task_id SERIAL PRIMARY KEY,
    title VARCHAR(100) NOT NULL UNIQUE,
    content TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP,
    project_id INTEGER REFERENCES Project(project_id),
    user_id INTEGER REFERENCES Users(user_id)
)