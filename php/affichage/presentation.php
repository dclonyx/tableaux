<?php
ob_start();
$title = 'Présentation';
$encours = 2;
?>
<main>
    <div class="contenair_presentation">
        <div class="superieur">
            <div class="img_presentation">
                <img src="../../img/presentation.jpg"alt="">
            </div>
            <h2>Lorem Ipsum</h2>
        </div>
        <div class="texte_presentation">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga perferendis obcaecati pariatur porro repellat autem ab laboriosam, voluptates nihil mollitia eius cumque, eaque deleniti cum amet ut modi animi vel!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi illo iusto distinctio cupiditate quo. Dignissimos a, ab consectetur officiis reprehenderit ullam hic explicabo modi porro tempora, nemo alias, suscipit earum!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolor saepe temporibus ratione eos facere doloribus, consequuntur dolorum labore maxime sint laboriosam reprehenderit! Perferendis, iste atque minus repellendus pariatur obcaecati!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci vel ipsam enim cum ad laboriosam repudiandae laudantium. Exercitationem, suscipit perspiciatis incidunt itaque necessitatibus tempore vel a libero ratione reprehenderit ad!</p>
        </div>
    </div>
</main>
<?php
$content = ob_get_clean();
require './template.php';
?>