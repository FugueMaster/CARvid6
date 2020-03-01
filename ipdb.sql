CREATE TABLE person (
    pid int,
    PRIMARY KEY(pid)
);

CREATE TABLE enter_issue(
    iid int NOT NULL AUTO_INCREMENT ,
    timestamp time,
    comments varchar(100),
    type set("accident", 
    "heavy traffic", 
    "breakdown", 
    "road closure", 
    "roadworks"),
    lon double,
    lat double,
    location varchar(100),
    pid int NOT NULL,
    PRIMARY KEY(iid),
    FOREIGN KEY(pid)
        REFERENCES person(pid)
        ON DELETE NO ACTION
);

CREATE TABLE heavy_traffic(
    iid int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE breakdown(
    iid int NOT NULL AUTO_INCREMENT,
    carplate VARCHAR(10),
    lane_no int(1),
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE accidents(
    iid int NOT NULL AUTO_INCREMENT,
    lane_no int(1),
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE closure(
    iid int NOT NULL AUTO_INCREMENT,
    s_date date,
    e_date date,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE roadworks(
    iid int NOT NULL AUTO_INCREMENT,
    lane_no int(1),
    date date,
    est_duration int(1),
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);