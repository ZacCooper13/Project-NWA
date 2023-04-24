CREATE TABLE Teachers(
    teacherID INT NOT NULL AUTO_INCREMENT,
    teacherFirst VARCHAR(25) UNIQUE,
    teacherLast VARCHAR(25) UNIQUE,
    teacherClass VARCHAR(25) UNIQUE,
    PRIMARY KEY(teacherID),
);
CREATE TABLE Classes(
    classID INT NOT NULL AUTO_INCREMENT,
    className VARCHAR(25) UNIQUE,
    classNumber INT,
);
CREATE TABLE Students(
    studentID INT NOT NULL AUTO_INCREMENT,
    studentFirst VARCHAR(25) UNIQUE,
    studentLast VARCHAR(25) UNIQUE,
    studentGrade VARCHAR(25) UNIQUE,
)