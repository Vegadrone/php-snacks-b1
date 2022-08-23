<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <?php 
   
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae laborum dolores amet molestias repellendus minus, nesciunt, esse possimus aliquid veniam quaerat, deleniti nisi similique? Facere sunt similique magnam nulla tenetur!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum labore explicabo amet assumenda quae maiores nam ut vel modi esse cupiditate eum, voluptas dolore nobis sapiente enim sint. Enim, est.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, explicabo soluta delectus harum beatae doloremque sit dolores earum totam vel tempora reprehenderit rerum cum fuga. reiciendis quaerat sequi illum. Quasi.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum dolorum porro fuga voluptatum voluptates perspiciatis, aspernatur officiis, in laudantium dolores quidem mollitia magni illo voluptate officia eos impedit. Facilis, repudiandae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae laborum dolores amet molestias repellendus minus, nesciunt, esse possimus aliquid veniam quaerat, deleniti nisi similique? Facere sunt similique magnam nulla tenetur!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum labore explicabo. amet assumenda quae maiores nam ut vel modi esse cupiditate eum, voluptas dolore. nobis sapiente enim sint. Enim, est.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, explicabo soluta delectus harum beatae doloremque sit dolores earum totam vel tempora reprehenderit rerum cum fuga reiciendis quaerat sequi illum. Quasi.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum dolorum porro fuga voluptatum voluptates perspiciatis, aspernatur officiis, in laudantium. dolores quidem mollitia magni illo voluptate officia eos impedit. Facilis, repudiandae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae laborum dolores amet molestias repellendus minus, nesciunt, esse possimus aliquid veniam. quaerat, deleniti nisi similique? Facere sunt similique magnam nulla tenetur!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum labore explicabo amet assumenda. quae maiores nam ut vel modi esse. cupiditate eum, voluptas dolore nobis sapiente enim sint. Enim, est.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, explicabo soluta delectus harum beatae doloremque sit dolores earum totam vel tempora reprehenderit .rerum cum fuga reiciendis quaerat sequi illum. Quasi.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum dolorum porro fuga voluptatum voluptates perspiciatis, aspernatur officiis, in laudantium dolores quidem mollitia. magni illo voluptate officia eos impedit. Facilis, repudiandae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae laborum dolores amet molestias repellendus minus, nesciunt, esse possimus aliquid veniam quaerat, deleniti nisi similique? Facere sunt similique magnam nulla tenetur!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum labore explicabo amet assumenda quae maiores nam ut vel modi esse cupiditate eum, voluptas dolore nobis sapiente enim sint. Enim, est.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, explicabo soluta delectus harum beatae doloremque. sit dolores earum totam vel tempora reprehenderit rerum cum fuga reiciendis quaerat sequi illum. Quasi.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum dolorum porro fuga voluptatum voluptates perspiciatis, aspernatur officiis, in laudantium dolores. quidem mollitia magni illo voluptate officia eos impedit. Facilis, repudiandae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae laborum dolores amet molestias repellendus minus, nesciunt, esse possimus aliquid veniam quaerat, deleniti nisi similique? Facere sunt similique magnam nulla tenetur!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum labore explicabo amet assumenda quae maiores nam ut vel modi esse cupiditate eum, voluptas dolore nobis sapiente enim sint. Enim, est.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, explicabo soluta delectus harum beatae doloremque sit dolores earum totam vel tempora reprehenderit. rerum cum fuga reiciendis quaerat sequi illum. Quasi.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum dolorum porro fuga voluptatum voluptates perspiciatis, aspernatur officiis, in laudantium dolores quidem mollitia magni illo voluptate officia eos impedit. Facilis, repudiandae.';

        echo $text;

        $splittedtext = explode('.', $text);
        var_dump($splittedtext);
   
   ?>
    <?php for ($i = 0; $i < count($splittedtext); $i++){ ?>
        <p>
            <?php echo $splittedtext[$i]; ?>
        </p>
    <?php } ?>
</body>

</html>