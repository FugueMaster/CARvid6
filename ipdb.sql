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
    pid int NOT NULL,
    PRIMARY KEY(iid),
    FOREIGN KEY(pid)
        REFERENCES person(pid)
        ON DELETE NO ACTION
);

CREATE TABLE heavy_traffic(
    iid int NOT NULL AUTO_INCREMENT,
    location VARCHAR(100),
    lon double,
    lat double,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE breakdown(
    iid int NOT NULL AUTO_INCREMENT,
    carplate VARCHAR(10),
    lane_no int(1),
    location VARCHAR(100),
    lon double,
    lat double,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE accidents(
    iid int NOT NULL AUTO_INCREMENT,
    lane_no int(1),
    location varchar(100),
    lon double,
    lat double,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE closure(
    iid int NOT NULL AUTO_INCREMENT,
    s_date date,
    e_date date,
    location varchar(100),
    lon double,
    lat double,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE roadworks(
    iid int NOT NULL AUTO_INCREMENT,
    lane_no int(1),
    date date,
    est_duration int(1),
    location varchar(100),
    lon double,
    lat double,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);