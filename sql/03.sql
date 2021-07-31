-- 計算總筆數
SELECT COUNT(*) FROM `products`;
SELECT COUNT(sid) FROM `products`;

SELECT COUNT(1) FROM `products`;

-- SUM() 總合
SELECT * FROM `products` WHERE sid IN (1,2);
SELECT SUM(`price`) FROM `products` WHERE sid IN (1,2);

-- GROUP BY: 群組
SELECT `category_sid`, COUNT(1) num FROM `products` GROUP BY `category_sid`;
SELECT *, COUNT(1) num FROM `products` GROUP BY `category_sid`;

SELECT p.`category_sid`, c.`name` , COUNT(1) num 
    FROM `products` p
    JOIN `categories` c
    ON p.`category_sid` = c.`sid`
    GROUP BY `category_sid`; --byself


-- GROUP BY: 群組
SELECT `category_sid`, COUNT(1) num FROM `products` GROUP BY `category_sid`;
SELECT *, COUNT(1) num FROM `products` GROUP BY `category_sid`; -- MySQL 8 無法執行
-- MySQL 8 的錯誤訊息: #1055 - Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'mfee19.products.sid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by

SELECT p.`category_sid`, c.`name`, COUNT(1) num
    FROM `products` p
    JOIN `categories` c
    ON p.`category_sid`=c.`sid`
    GROUP BY p.`category_sid`;

SELECT p.`category_sid`, c.`name`, COUNT(1) num
FROM `products` p
         LEFT JOIN `categories` c
              ON p.`category_sid`=c.`sid`
GROUP BY p.`category_sid`; --老師有把p其中一改20
-- 訂單編號10的名稱
SELECT o.member_sid, o.order_date, d.*, p.bookname
FROM `orders` o
    JOIN `order_details` d
        ON o.sid=d.order_sid
    JOIN `products` p
        ON p.sid=d.product_sid
WHERE o.sid=10

-- 日期的格式 'YYY-MM-DD'
SELECT * FROM `orders` WHERE `order_date` > '2017-01-01';

-- '2017' > '2016-06-01 11:15:53'
-- '2017' > '2018-06-01 11:15:53'

-- 累加
UPDATE `products` SET `price`=`price`+1 WHERE sid=1

-- Datetime 不要用 + 運算
SELECT NOW(), NOW()+100000;

-- 子查詢
SELECT product_sid sid FROM `order_details` WHERE `order_sid`=10;

SELECT * FROM `products` WHERE sid IN (
    SELECT product_sid FROM `order_details` WHERE `order_sid`=10
    );

SELECT * FROM `products`
    JOIN (SELECT product_sid, price od_price FROM `order_details` WHERE `order_sid`=10) od
        ON  `products`.sid = od.product_sid;

-- 款式，型號，顏色

-- 購物車：多種型態的商品、多個購物車
