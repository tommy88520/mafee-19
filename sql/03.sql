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

