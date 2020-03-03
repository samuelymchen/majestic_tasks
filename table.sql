drop table if exists students cascade;

CREATE TABLE students(
  id                INTEGER NOT NULL auto_increment,
  first_name        VARCHAR(255)NOT NULL,
  last_name         VARCHAR(255),
  enrol_date        DATETIME,
  dob               DATETIME,
  school_year       INT,
  cust_phone        VARCHAR(255),
  mobile            VARCHAR(255),
  first_contact_name  VARCHAR(255),
  first_contact_phone VARCHAR(255),
  second_contact_name  VARCHAR(255),
  second_contact_phone VARCHAR(255),
  PRIMARY KEY(id)
);
