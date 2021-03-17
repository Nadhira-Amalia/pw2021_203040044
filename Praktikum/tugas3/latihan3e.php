<?php
/*
Nadhira Amalia
203040044
Shift Jumat 10.00 - 11.00
*/
?>
<?php 
$bakery = [
    [
        "name" => "Truffle Chocolate Cake",
        "product" => "1.png",
        "topping" => "Cheese, Strawberry Jam, Whipped Cream",
        "description" => "This is a rich and moist chocolate cake.  This super smooth and rich chocolate cake is full of layers of chocolate ganache and soft, chocolate sponge.",
        "price" => 80000,
        "category" => "Cake"
    ],
    [
        "name" => "Oreo Cake",
        "product" => "2.png",
        "topping" => "Oreo Cookies, Cheese, Whipped Cream",
        "description" => "Due to its smooth yet crunchy texture, this cake is a favourite among all age groups. Oreo cookies have already made their way into a lot of delicious desserts already, and this cake tastes even better due to the crumbled Oreo cookies that are incorporated into the cream filling.",
        "price" => 65000,
        "category" => "Cake"
    ],
    [
        "name" => "Red Velvet Cake",
        "product" => "3.png",
        "topping" => "Cheese, Whipped Cream",
        "description" => "This popular cake keeps spreading in popularity. Its layers of soft sponge & cream are courteous. Classic red velvet cake inside cream cheese frosting covered with our homemade red velvet crumbs.",
        "price" => 85000,
        "category" => "Cake"
    ],
    [
        "name" => "Cheesecake",
        "product" => "4.png",
        "topping" => "Strawberry Jam, Chocolate",
        "description" => "A sweet desert consisting of one or more layers. The main, and thickest, layer consists of a mixture of a soft, fresh cheese, eggs, and sugar. There is a bottom layer, it most often consists of a crust or base made from crushed cookies, graham crackers, pastry, or sponge cake, depending on what you order.",
        "price" => 30000,
        "category" => "Cake"
    ],
    [
        "name" => "Cupcake",
        "product" => "5.png",
        "topping" => "Whipped Cream, Meises",
        "description" => "This popular cake keeps spreading in popularity. Its layers of soft sponge & cream are courteous. Classic red velvet cake inside cream cheese frosting covered with our homemade red velvet crumbs.",
        "price" => 15000,
        "category" => "Cake"
    ],
    [
        "name" => "Muffin",
        "product" => "6.png",
        "topping" => "Raisins, Chococips",
        "description" => "A small baked good made from butter. This Muffins are single-serving quick breads, which rise with the help of baking soda or baking powder and eggs instead of yeast. They tend to be sweet and somewhat moist, but heavier than a cake or cupcake. Muffins are baked in a pan with cup-sized indentations.",
        "price" => 20000,
        "category" => "Pastry"
    ],
    [
        "name" => "Croissant",
        "product" => "7.png",
        "topping" => "Strawberry Jam, Blueberry Jam, Chocolate",
        "description" => "This Croissant is made from butter, flour, sugar, salt, yeast, and milk. Unlike most yeasted doughs that require warm liquid to activate the yeast, we use cold milk instead.",
        "price" => 18000,
        "category" => "Pastry"
    ],
    [
        "name" => "Sweet Bread",
        "product" => "8.png",
        "topping" => "Raisins, Sesame Seed, Nuts, Banana, Sugar",
        "description" => "Our bread is made with milk, sugar, eggs, yeast, flour and sometimes lemon peel to produce a subtly sweet lightly textured loaf or rolls.",
        "price" => 25000,
        "category" => "Bread"
    ],
    [
        "name" => "Baguette",
        "product" => "9.png",
        "topping" => "Sesame Seed",
        "description" => "Baguette is a long, thin loaf of French bread that is characterized by a crisp crust and chewy center.",
        "price" => 20000,
        "category" => "Bread"
    ],
    [
        "name" => "Cookies",
        "product" => "10.png",
        "topping" => "Raisins, Chococips",
        "description" => "Our cookie is a baked or cooked food that is typically small, flat and sweet. It may include other ingredients such as raisins, oats, chocolate chips, nuts, etc.",
        "price" => 5000,
        "category" => "Cookies"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Delicia Bakery</title>
  </head>
  <body>
  <div class="container mt-5 mb-5 text-center">
     <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Product</th>
            <th scope="col">Topping</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            </tr>
        </thead>
    <tbody  class="table-info">
        <?php foreach($bakery as $number => $cake) : ?>
        <tr>
            <td><?= $number+1; ?></td>
            <td><?= $cake["name"]; ?></td>
            <td>
                <img src="img/<?= $cake["product"]; ?>">
            </td>
            <td><?= $cake["topping"]; ?></td>
            <td><?= $cake["description"]; ?></td>
            <td><?= $cake["price"]; ?></td>
            <td><?= $cake["category"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </div>

 </body>
</table>
</html>