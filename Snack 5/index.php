<?php
/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti
paragrafi. Ogni punto un nuovo paragrafo.
 */
$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae tenetur tempora qui officiis, eveniet laboriosam ipsam minima suscipit ipsum corrupti minus explicabo dolores architecto porro praesentium, officia vero repellendus eum!
Qui atque possimus quae doloremque soluta voluptate hic illo saepe ipsam laudantium sed veniam aperiam tempora neque architecto et alias asperiores, praesentium error modi. A vero quia ab illo consectetur!
Porro reprehenderit quibusdam nisi illo, architecto ipsum non quidem incidunt dolor sed perferendis magni dicta, expedita saepe corrupti quia dolorem neque quod optio a vel officia nemo vero. Laborum, explicabo?
Fugiat dignissimos distinctio totam ratione ut eaque deserunt esse quisquam rem, laboriosam aut voluptatem in! Optio, sequi. Adipisci numquam aperiam at odit, iusto accusamus dolores praesentium nihil expedita nostrum temporibus!
Quibusdam porro harum rem iusto nesciunt dolores, ab sit? Blanditiis ut, deleniti corporis perspiciatis reprehenderit quas labore mollitia ullam vero! Voluptate illum quasi soluta sed ipsam ad reprehenderit id et.
Possimus quo ad eaque magnam est autem dolorem, libero sapiente atque deleniti numquam vitae, minima excepturi, corporis maxime! Sequi unde tempora quae in rem possimus voluptas earum iure corporis optio?
Quod ipsum accusamus amet placeat sunt! Autem ipsum repellendus iusto assumenda, itaque voluptates laboriosam, esse ab vitae placeat architecto quae incidunt sint hic quisquam voluptatum similique ratione? Fugit, debitis doloremque?
Soluta error aperiam nisi fuga explicabo voluptatum veritatis, deleniti voluptas eius placeat similique incidunt dolor autem illo atque. Voluptatibus neque reprehenderit, ea dolore assumenda corrupti dolorem mollitia beatae ab facilis?
Labore sint unde magnam numquam maiores autem iure laudantium. Fuga veritatis ut eveniet id dicta quas distinctio, quod maiores aliquam at aspernatur ad magni ullam atque non, optio cum dolore!
Distinctio nesciunt dolor eius harum libero eos, odio quo quasi? Repellendus molestiae magnam sunt quidem dolorem velit quod perferendis, nihil explicabo quam ipsa, culpa, nobis aliquid veritatis! Omnis, harum adipisci.
Molestias autem sunt molestiae facilis voluptatum minima pariatur qui non itaque, eaque omnis delectus consectetur illo necessitatibus architecto amet, corrupti dolores iusto voluptatibus rem quae! Illum ut voluptatum culpa dolorum?
Repellat recusandae accusantium quisquam aliquid, nisi optio obcaecati nostrum culpa expedita corrupti veritatis iusto magnam quam vitae doloribus consequuntur soluta facilis fugiat reiciendis ipsum quo necessitatibus maiores, omnis atque. Provident!
Voluptatum consequuntur ad odit laborum iusto nostrum nulla? Nulla voluptatem cum non aspernatur ipsa delectus veniam laborum, earum rerum architecto animi! Quae recusandae ex dolores perspiciatis ad officiis sunt eius.
Officiis neque, quam nostrum quod, quae culpa incidunt, obcaecati tenetur atque ducimus distinctio sed molestiae recusandae. Expedita quasi amet molestias dolorem doloremque at! Soluta totam amet natus a cumque labore.
Atque placeat voluptatum repellat tempore expedita. Reiciendis eum voluptatibus quia ipsum praesentium non quas obcaecati nulla hic voluptas, minima quis qui suscipit accusantium laboriosam cupiditate nobis! Aliquid illo dolores cumque.
Necessitatibus, dignissimos, non maiores nobis odit culpa nesciunt fugit voluptatibus totam mollitia ipsum rem? Totam veritatis illum atque quas tempore suscipit nisi praesentium, corrupti possimus, quidem minima repudiandae doloremque exercitationem!
Quidem necessitatibus omnis repellendus incidunt quas amet cupiditate. Quas sapiente vel, perferendis asperiores rem magni dicta! Assumenda incidunt, quia ipsum minus voluptate accusamus. Voluptas dolore cupiditate a dolores. Dignissimos, quod?
Culpa accusamus libero, minima deleniti reiciendis quibusdam tempore quis, iste exercitationem blanditiis ad id eveniet maxime modi ut ipsa voluptatum beatae facere minus vero suscipit nobis tenetur. Quo, aut. A.
Aperiam, dolores. Perferendis, at ipsam! Harum ipsam, iste officia illum blanditiis magni quibusdam neque in debitis culpa eveniet dolores, temporibus ipsum alias pariatur! Officiis culpa in alias quia! Illo, vero.
Dolorem reiciendis, fugit tempora nemo iste consectetur explicabo, cupiditate excepturi vel nobis ratione, magnam fugiat quisquam impedit iusto voluptatibus repellendus enim tenetur aspernatur dicta autem inventore incidunt sit! Deleniti, excepturi.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach (explode('.', $paragrafo) as $value) : ?>
        <p><?= $value; ?></p>
    <?php endforeach; ?>
</body>
</html>