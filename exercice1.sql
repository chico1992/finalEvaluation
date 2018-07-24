Select articles.id , users.*
FROM articles
JOIN users WHERE articles.id_user = users.id ;

// The WHERE clause can be used with cartesian products, for JOIN it's ON
// The article ID was expected to be 10
