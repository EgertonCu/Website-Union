<!-- List books -->
<?php 
function listBooks() {
    include 'db.php';
    $sql = "SELECT books.id AS id ,books.book_title AS title,book_categories.category AS category,books.document AS bookpath FROM books
    INNER JOIN book_categories ON book_categories.id = books.book_category
     ORDER BY books.id DESC";

    //Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Execute the prepared statement
    $stmt->execute();

    // Fetch all rows as an associative array
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the results
    foreach ($books as $book) {

       echo '<div class="book">
                    <div class="book-icon">📗</div>
                    <div class="book-details">
                        <a href="'.$book['bookpath'].'" class="book-title">'.$book['title'].'</a>
                        <p class="book-category">Category: '. $book['category'].'</p>
                    </div>
                </div>';
    }
    
}

;?>