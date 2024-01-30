drop database if exists 72dctm22;
create database 72dctm22;
use 72dctm22;

drop table if exists users;
create table users(
	user_id		int primary key auto_increment,
    unique_id	int not null unique,
    fname		nvarchar(200) not null,
    lname		nvarchar(250) not null,
    email		nvarchar(250) not null,
    `password`	nvarchar(250) not null,
    img			nvarchar(400),
    `status`	nvarchar(250) not null,
    permission	enum('admin','client')
);
insert into users (unique_id,fname,lname,email,password,img,status,permission)
values (970165573,'jack','5cu','admin@gmail.com','2','IMG_0029.JPG','Active now','admin');

drop table if exists messages;
create table messages(
	msg_id			int auto_increment primary Key,
    incoming_msg_id		int,
    outgoing_msg_id		int,
    msg				nvarchar(1000) not null
);

insert into messages(incoming_msg_id,outgoing_msg_id,msg)
values(2213213,1123213,'hello');


drop table if exists producer;
create table producer(
	producer_id		int primary key,
    producer_name	nvarchar(100) not null
);

insert into producer
values(1,'AKA');


drop table if exists product;
create table product(
	product_id 		int primary key,
    producer_id		int not null,
	product_name	nvarchar(100) not null,
    `describe`		nvarchar(100) not null,
	img				nvarchar(400) not null,
	quantity		int not null,
    price			int not null,
    FOREIGN KEY (producer_id) REFERENCES producer(producer_id)
);

insert into product
values	(123,1,'Chuột Bluetooth Không Dây Gaming','Chuột Bluetooth Không Dây Gaming Siêu Nhẹ Chống Mỏi X5RGB Kết Nối 3 Chế Độ Pin Sạc Bấm Click Cực Đã','chuotBlu.jpg',10,10000),
		(113,1,'Chuột Bluetooth Không Dây Gaming','Chuột Bluetooth Không Dây Gaming Siêu Nhẹ Chống Mỏi X5RGB Kết Nối 3 Chế Độ Pin Sạc Bấm Click Cực Đã','chuotBlu.jpg',10,100000);




drop table if exists nhapkho; 
create table nhapkho(
	producer_id		int,
	product_id 		int,
	product_name	nvarchar(100) not null,
    img				nvarchar(400) not null,
    quantity		int not null,
    price			int not null,
    `date`			nvarchar(100) not null
);

drop table if exists `order`;
create table `order`(
	order_id		int primary key,
	unique_id		int not null,
    product_id 		int not null,
	product_name	nvarchar(100) not null,
    classify		nvarchar(100) not null,
	quantity		int not null,
    price			int not null,
    FOREIGN KEY (product_id) REFERENCES product(product_id)
);

drop table if exists warehouse;
create table warehouse(
	unique_id		int not null,
	product_id		int,
	order_id		int not null primary key,
	product_name	nvarchar(100) not null,
	classify		nvarchar(100) not null,
	quantity		int not null,
    price			int not null,
    address			nvarchar(250),
    phone			nvarchar(250),
	`status`		enum('transport','success','cancel') not null,
    `date`			nvarchar(250)
);

drop table if exists Notification;
create table Notification(
	unique_id		int not null,
    order_id		int not null unique,
    img				nvarchar(400) not null,
    date			nvarchar(100) not null,
    `status`		enum('cancel','success') not null,
    FOREIGN KEY (order_id) REFERENCES warehouse(order_id)
);



drop table if exists statistical;
create table statistical(
	product_id		int,
    price			int not null,
    quantity		int not null,
    `date`			nvarchar(100),
    FOREIGN KEY (product_id) REFERENCES product(product_id)
);
insert into statistical 
values(123,1000000,10,'03/10/2023');

















