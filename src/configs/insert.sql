create table sheettable(sheet_name char(32) not null, sheet_id varchar(35) not null,sheet_data text,primary key(sheet_name))

create table sheetcodestable(sheet_id char(32) not null,hash_code int(35),code_type char(1))

