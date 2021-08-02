SELECT `products`.*, `categories`.`name`
    FROM `products`
    JOIN `categories`
        ON `products`.`category_sid` = `categories`.`sid`;


-- 資料表別名
SELECT p.*, c.`name`
FROM `products` AS p
         JOIN `categories` AS c
              ON p.`category_sid` = c.`sid`;

-- 資料集欄位別名
SELECT p.*, c.`name` AS 分類名稱
FROM `products` AS p
         JOIN `categories` AS c
              ON p.`category_sid` = c.`sid`;

SELECT p.*, c.`name` 分類名稱
FROM `products` p
         JOIN `categories` c
              ON p.`category_sid` = c.`sid`;

pratice 

SELECT c.*, p.`bookname` 書名
FROM `categories` c
         JOIN `products` p
              ON c.`sid` = p.`category_sid`,
                 ;

 -- LEFT OUTER JOIN
SELECT p.*, c.`name` cate_name
FROM `products` p
         LEFT JOIN `categories` c
              ON p.`category_sid` = c.`sid`;

-- WHERE

-- 取出某欄為空值
SELECT p.*, c.`name` cate_name
FROM `products` p
     LEFT JOIN `categories` c
           ON p.`category_sid` = c.`sid`
WHERE c.`sid` IS NULL;

-- 取出某欄不為空值
SELECT p.*, c.`name` cate_name
FROM `products` p
         LEFT JOIN `categories` c
                   ON p.`category_sid` = c.`sid`
WHERE c.`sid` IS NOT NULL;

--
SELECT * FROM `products` WHERE `author`='吳睿紘';
SELECT * FROM `products` WHERE `author` LIKE '吳睿紘';
SELECT * FROM `products` WHERE `author` LIKE '%陳%';
SELECT * FROM `products` WHERE `author` LIKE '陳%'; --陳一定要在最前面

--
SELECT * FROM `products` WHERE sid=6 OR sid=2 OR sid=3;

SELECT * FROM `products` WHERE sid IN (6, 2, 3);

SELECT * FROM `products` WHERE sid IN (6, 2, 3) ORDER BY sid DESC;

SELECT * FROM `products` WHERE sid IN (6, 2, 3, 10, 15) ORDER BY RAND();

              

