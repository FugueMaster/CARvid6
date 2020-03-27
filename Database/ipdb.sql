CREATE TABLE admin (
    aid varchar(15),
    passw varchar(15)
);

CREATE TABLE person (
    pid int,
    pass varchar(50),
    PRIMARY KEY(pid)
);

CREATE TABLE enter_issue(
    iid int NOT NULL AUTO_INCREMENT ,
    timestamp time,
    r_date date,
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
    icon varchar(100),
    PRIMARY KEY(iid),
    FOREIGN KEY(pid) REFERENCES person(pid) ON DELETE NO ACTION
);

CREATE TABLE heavy_traffic(
    iid int NOT NULL,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid) REFERENCES enter_issue(iid)
);

CREATE TABLE breakdown(
    iid int NOT NULL,
    carplate VARCHAR(10),
    lane_no int(1),
    PRIMARY KEY(iid),
    FOREIGN KEY(iid) REFERENCES enter_issue(iid)
);

CREATE TABLE accidents(
    iid int NOT NULL,
    lane_no int(1),
    PRIMARY KEY(iid),
    FOREIGN KEY(iid) REFERENCES enter_issue(iid)
);

CREATE TABLE closure(
    iid int NOT NULL ,
    s_date date,
    e_date date,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid) REFERENCES enter_issue(iid)
);

CREATE TABLE roadworks(
    iid int NOT NULL,
    lane_no int(1),
    S_Date date,
    E_Date date,
    est_duration int(4),
    PRIMARY KEY(iid),
    FOREIGN KEY(iid) REFERENCES enter_issue(iid)
);