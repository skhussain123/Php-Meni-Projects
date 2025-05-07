#  PHP Simple CRUD App
A simple PHP CRUD (Create, Read, Update, Delete) application using MySQL and Bootstrap 5. This app allows you to add, view, edit, and delete student records.


## What is mysqli_query?
mysqli_query is a function in PHP used to execute SQL queries on a MySQL database. It is part of the MySQLi extension (MySQL Improved), which provides a more secure and feature-rich interface for working with MySQL databases.

```bash
mysqli_query($connection, $query);
```


## What is mysqli_fetch_row?
mysqli_fetch_row is used to fetch a result row as a numerically indexed array (index starts from 0), meaning the values are accessed by the column index rather than the column name.
```bash
mysqli_fetch_row($result);
```


## What is mysqli_fetch_all?
mysqli_fetch_all is used to fetch all result rows from a query as an array. It returns an array of rows, where each row is either an associative array or a numerically indexed array, depending on the optional parameter.

```bash
mysqli_fetch_all($result, $resulttype = MYSQLI_ASSOC);
```


## mysqli_fetch_object()
mysqli_fetch_object fetches a result row as an object. Each column in the row is accessed as a property of the object.
```bash
mysqli_fetch_object($result);
```


## mysqli_num_rows()
mysqli_num_rows returns the number of rows in the result set. It is useful when you need to check if a query returned any results.
```bash
mysqli_num_rows($result);

```

## mysqli_fetch_lengths()
mysqli_fetch_lengths returns the lengths of the columns in the current row.
```bash
mysqli_fetch_lengths($result);
```


## mysqli_fetch_field()
mysqli_fetch_field returns the metadata for the next field (column) in the result set.
```bash
mysqli_fetch_field($result);
```


## mysqli_insert_id()
mysqli_insert_id returns the last auto-incremented ID that was inserted into the database. This is commonly used after an INSERT query when you want to know the ID of the newly inserted record.

```bash
mysqli_insert_id($conn);
```