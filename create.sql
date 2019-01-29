CREATE DATABASE feedback;

use feedback;

CREATE TABLE responses(
  s_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  response1 INT NOT NULL,
  response2 INT NOT NULL,
  response3 INT NOT NULL,
  response4 INT NOT NULL,
  feedback_text VARCHAR(500)
);
