CREATE table products (
	id int AUTO_INCREMENT,
	picture varchar(200) null,
	name varchar(30),
	description varchar(100),
	price double not null,
	primary key(id),
	unique(price)
);

create table orders (
	id int AUTO_INCREMENT,
	order_date datetime,
	total_price double,
	PRIMARY key(id)
);

create table orders_products (
	order_id int,
	product_id int,
	product_number int,
	foreign key (order_id) references orders(id),
	foreign key (product_id) references products(id)
);



insert into products (picture, name, description, price)
values ('http://photos.gograph.com/thumbs/CSP/CSP364/k3649492.jpg',  'Cheese', 'Yellow delicious cheese', 1.23),
('https://i.pinimg.com/736x/66/f2/41/66f2412e0c81c81defbf27438d53278c.jpg',
'Bread', 'just some sliced bread', 9.99),
('http://www.towntopic.com/blog/wp-content/uploads/2013/05/coke-150x150.jpg', 'Coca cola', 'Everyone nows what this is', 10.11);	

