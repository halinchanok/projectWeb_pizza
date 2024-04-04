create table menu(
	menu_id varchar(3) primary key,
    menu_name varchar(20),
    menu_price int,
    menu_stock int
);
insert into menu(menu_id, menu_name, menu_price, menu_stock) value('M01', 'Double Pepperoni', 299, 100);
insert into menu(menu_id, menu_name, menu_price, menu_stock) value('M02', 'Double Cheese', 299, 100);
insert into menu(menu_id, menu_name, menu_price, menu_stock) value('M03', 'HAM&CRAB STICKS', 369, 100);
insert into menu(menu_id, menu_name, menu_price, menu_stock) value('M04', 'TOM YUM KUNG', 369, 100);
insert into menu(menu_id, menu_name, menu_price, menu_stock) value('M05', 'MEAT DELUXE', 399, 100);
insert into menu(menu_id, menu_name, menu_price, menu_stock) value('M06', 'SEAFOOD DELUXE', 399, 100);

create table size(
	size varchar(1) primary key,
    size_price int,
    size_stock int
);
insert into size(size, size_price, size_stock) value('S', 0, 60);
insert into size(size, size_price, size_stock) value('M', 100, 60);
insert into size(size, size_price, size_stock) value('L', 200, 60);


create table crust(
	crust_id varchar(3) primary key,
    crust_name varchar(20)
);
insert into crust(crust_id, crust_name) value('C01', 'PAN CRUST');
insert into crust(crust_id, crust_name) value('C02', 'CRISPY THIN');
insert into crust(crust_id, crust_name) value('C03', 'CHEESE CRUST');
insert into crust(crust_id, crust_name) value('C04', 'SAUSAGE&CHEESE CRUST');

create table topping(
	topping_id varchar(4) primary key,
    topping_name varchar(20),
    topping_price int,
    topping_stock int
);
insert into topping(topping_id, topping_name, topping_price, topping_stock) value('T01', 'cheese', 40, 50);
insert into topping(topping_id, topping_name, topping_price, topping_stock) value('T02', 'ham', 40, 50);
insert into topping(topping_id, topping_name, topping_price, topping_stock) value('T03', 'pepperoni', 40, 50);
insert into topping(topping_id, topping_name, topping_price, topping_stock) value('null', 'null', 0, 0);



create table orderPizza(
	order_id int(100) not null primary key,
    menu_id varchar(3) not null,
    size varchar(1) not null,
    amount int not null,
    crust_id varchar(3) not null,
    topping_id varchar(3) not null,
    foreign key (menu_id) references menu(menu_id),
    foreign key (size) references size(size),
    foreign key (crust_id) references crust(crust_id),
    foreign key (topping_id) references topping(topping_id)
);


