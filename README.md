# Hungarian
An implementation of the Hungarian algorithm in PHP. The Hungarian algorithm can be used to find the optimal (minimal cost) assignment between two types of entities given a cost matrix. The Hungarian algorithm is also known as the Kuhn–Munkres algorithm or Munkres assignment algorithm.

# Installation using Composer
Execute the following command in bash/zsh:

```
composer require arthurkushman/hungarian
```

# Example usage
Define a square matrix with scores as input for the Hungarian class. A square matrix must be an array consisting of n arrays (rows), with each array consisting of n scores.
The key of each element in the row array must be equal to the key of the column.
```php
<?php
use Hungarian\Hungarian;
// Define the score matrix as n arrays consisting of n numerical values
$matrix = [
    [1, 2, 3, 0, 1],
    [0, 3, 12, 1, 1],
    [3, 0, 1, 13, 1],
    [3, 1, 1, 12, 0],
    [3, 1, 1, 12, 0],
];

// Create a new Hungarian problem using the score matrix as input
$hungarian  = new Hungarian($matrix);

// Solve the problem using the Hungarian algorithm and get the solution as an array with the row and column as key and value, respectively
$allocation = $hungarian->solveMin();
```
