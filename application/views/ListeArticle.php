<?php

?>

<div class="product_section layout_padding">
    <div class="container">
      <div class="product_text"><h1 style="color: #5ca0e9;">Articles sur l'intelligence artificielle</h1></div>
      <h2 class="long_text">Vous etes amateur ou passione de l'intelligence artificielle, ces articles pourront vous interesses:</h2>
      <div class="product_section_2">
        <div class="row">
        <?php if($articles!=null) { ?>
            <?php foreach($articles as $art) { ?>
            <div class="col-md-6">
                <div class="image_2"><img alt="<?php echo $art['image']; ?>" src="<?php echo base_url("assets/images/").'/'.$art['image']; ?>"></div>
                <div class="price_text"><?php echo $art['categorie']; ?></div>
                <h1 class="game_text"><?php echo $art['titre']; ?></h1>
                <div class="text-center"><a href="<?php echo "article-".md5($art['id']).".html"; ?>"><button type="button" class="btn btn-primary">Voir l'article</button></a></div>
            </div>
            <?php } ?>
        <?php } ?>      
        </div>
      </div>
    </div>
</div>