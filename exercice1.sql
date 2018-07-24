Select articles.id , users.*
FROM articles
JOIN users WHERE articles.id_user = users.id ;