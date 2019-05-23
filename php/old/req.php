while ($row = $req->fetch()){
            $img=$row['lien_image'];
            $ref=$row['reference'];
            $prix=$row['prix'];
            $taille=$row['dimension'];
            ?>
            <div class="cadre_tableau">
                <form action="contact.php" method="post">
                    <img src="<?php echo $img;?>" alt="tableau" >
                    <p>Référence : <?php echo $ref;?></p>
                    <p>Dimension : <?php echo $taille;?> mètre(s)</p>
                    <p>Prix : <?php echo $prix;?> euros</p>
                    <input type="hidden" name="ref" value="<?php echo $ref;?>">
                    <input type="hidden" name="taille" value="<?php echo $taille;?>">
                    <input type="hidden" name="prix" value="<?php echo $prix;?>">
                    <input type="hidden" name="img" value="<?php echo $img;?>">
                    <button class="bouton" type="submit">Commander</button>
                </form>
            </div>
        <?php  