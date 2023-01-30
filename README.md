## Entities

- Customer
- Order
- Product
- Category
- Payment
- Shipping
- Address
- Coupon
- Review
- Wishlist

## Relationships

- Customer has many Orders
- Order has many Products
- Product belongs to a Category
- Order has one Payment
- Order has one Shipping
- Customer has many Addresses (Shipping and Billing)
- Payment belongs to an Order
- Shipping belongs to an Order
- Address belongs to a Customer
- Customer has many Reviews
- Product has many Reviews
- Customer has many Wishlists
- Product belongs to many Wishlists
- Order can have one Coupon
- Coupon can be used by many Orders

## Attributes

- Customer: id, name, email, password, phone, date_of_birth, etc.
- Order: id, order_number, customer_id, payment_id, shipping_id, coupon_id, etc.
- Product: id, name, description, price, category_id, stock, etc.
- Category: id, name, description, etc.
- Payment: id, order_id, method, status, date, etc.
- Shipping: id, order_id, address_id, method, status, date, etc.
- Address: id, customer_id, type (shipping/billing), street, city, state, country, zip, etc.
- Coupon: id, code, discount, type (percentage/fixed), start_date, end_date, usage_limit, etc.
- Review: id, customer_id, product_id, rating, title, description, etc.
- Wishlist: id, customer_id, product_id, etc.

## Challenges

- User authentication and authorization API for logging in and registering users.
- Product management API for managing products, categories, and subcategories.
- Order management API for managing the creation and processing of orders.
- Cart management API for managing the contents of a user's cart.
- Payment API for processing payments.
- Shipping API for managing shipping information and calculating shipping costs.
- Review and rating API for managing product reviews and ratings.
- Wishlist API for managing a user's wishlist.
- Customer management API for managing customer information.
- Marketing API for managing promotions, coupons, and other marketing activities.

## Terminal Commands

- php artisan make:model Customer -mfc (makes a model, migration, factory and controller)

- sail artisan migrate:fresh --seed
