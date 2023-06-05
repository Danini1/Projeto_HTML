-- Creating supplers table
CREATE TABLE suppliers(
    code INT NOT NULL PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone INT NOT NULL,
    cnpj INT NOT NULL,
    address VARCHAR(255) NOT NULL
)

-- Creating products table
CREATE TABLE products(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	code INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    initial_amount INT NOT NULL,
    currenty_amount INT NOT NULL,
    supplier_code INT NOT NULL,
    buy_price DECIMAL(6, 2),
    sell_price DECIMAL(6, 2),
    
    FOREIGN KEY(supplier_code) REFERENCES suppliers(code)
)