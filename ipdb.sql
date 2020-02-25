CREATE TABLE person (
    pid int,
    PRIMARY KEY(pid)
);

CREATE TABLE enter_issue(
    iid int NOT NULL UNIQUE,
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
    iid int NOT NULL UNIQUE,
    location VARCHAR(100),
    lon double,
    lat double,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE breakdown(
    iid int NOT NULL UNIQUE,
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
    iid int NOT NULL UNIQUE,
    lane_no int(1),
    location varchar(100),
    lon double,
    lat double,
    PRIMARY KEY(iid),
    FOREIGN KEY(iid)
        REFERENCES enter_issue(iid)
);

CREATE TABLE closure(
    iid int NOT NULL UNIQUE,
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
    iid int NOT NULL UNIQUE,
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