
# Title: PHP Price Calculator challenge

- Repository: `php-pricecalculator-challenge`
- Type of Challenge: `Learning challenge`
- Duration: `4 days`
- Deployment strategy : `NA`
- Team challenge : `pairs`

## Learning objectives
- Apply basic OOP principles :heavy_check_mark:
- Import data with a database :heavy_check_mark:
- Learn to use an MVC :heavy_check_mark:

#### Make a price calculator with the following entities:
- Customer (Firstname, Lastname) :heavy_check_mark:
- A customer group (Name) :heavy_check_mark:
- A product (product name, price in cents) :heavy_check_mark:
- Both a customer and a group can have a discount, which can be a percentage or a fixed amount. :heavy_check_mark:

#### To calculate the price: :heavy_check_mark:
- For the customer group: In case of variable discounts look for highest discount of all the groups the user has.
- If some groups have fixed discounts, count them all up.
- Look which discount (fixed or variable) will give the customer the most value.
- Now look at the discount of the customer.
- In case both customer and customer group have a percentage, take the largest percentage.
- First subtract fixed amounts, then percentages!
- A price can never be negative.

### Importing the data :heavy_check_mark:
With this exercise you can find an [SQL file](resources/import.sql) you can import into a database, the previous exercise has shown you the command to do this.
If done successfully, will create 3 different tables (Customer, Group, Product) with some data inside it.

## Must-have features 
- A dropdown where you can select a Product and a Customer and you get the basic information of the product + the price. :heavy_check_mark:

## Nice to have features
- An actual login page for a customer :heavy_check_mark:
- A table where you can see in detail how the price is calculated :heavy_check_mark:
- The possibility to have different prices for different quantities (look, 1 EUR per item for 1, 0.9 EUR per item for 100, ...) :x:
- A category page for the different products:x:
