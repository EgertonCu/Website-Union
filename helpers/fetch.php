<!-- List books -->
<?php 
function listBooks() {
    include 'db.php';
    $sql = "SELECT id,book_title,book_category,document FROM books ORDER BY book_title";

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
                        <p class="book-title">'.$book['book_title'].'</p>
                        <p class="book-category">Category:'. $book['book_category'].'</p>
                    </div>
                </div>';
    }
    
}

;?>