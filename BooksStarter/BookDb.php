<?php

//Parent Class
class BookDb
{

    //Methods

    /**
     * Function to get all the books
     * @param obj $conn Connection to database
     * @return returns all the books
     */
    public static function getAll($conn)
    {
        //Create the query to get all books
        $sql = "SELECT * FROM books";
        //Execute the query
        $stmt = $conn->query($sql);
        return $stmt->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Function to delete a book
     * @param obj $conn Connection to database
     * @param int $id is the id of the book
     * @return returns true if the book is deleted
     */
    public static function delete($conn, $id)
    {
        //Create the query to delete
        $sql = "DELETE FROM books WHERE book_id = ?";
        //Execute the query
        $stmt = $conn->prepare($sql);
        //Bind the param
        $stmt->bind_param('i', $id);
        if ($stmt->execute()) {
            return true;
        };
    }

    /**
     * Function to insert a new book
     * @param obj $conn Connection to database
     * @param string $title is the title of the book
     * @param string $description is the description of the book
     * @param double $price is the price of the book
     * @param int $user_id is the user for the book
     * @return returns the id of the new inserted book
     */
    public static function insert($conn, $title, $description, $price, $user_id)
    {
        $sql = "INSERT INTO books (title, description, price, user_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssdi', $title, $description, $price, $user_id);
        if ($stmt->execute()) {
            return $stmt->insert_id;
        }
    }

    /**
     * Function to update a book
     * @param obj $conn Connection to database
     * @param string $title is the title of the book
     * @param string $description is the description of the book
     * @param double $price is the price of the book
     * @param int $user_id is the user for the book
     * @param int $book_id is the id of the book
     * @return returns true is the update was successful
     */
    public static function update($conn, $title, $description, $price, $user_id, $book_id)
    {
        $sql = "UPDATE books SET title = ?, description = ?, price = ?, user_id = ? WHERE book_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssdii', $title, $description, $price, $user_id, $book_id);
        if ($stmt->execute()) {
            return true;
        }
    }
}
