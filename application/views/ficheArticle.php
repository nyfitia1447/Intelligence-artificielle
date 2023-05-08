<div class="product_section layout_padding">
    <div class="container">
      <div class="product_text"><h1 style="color: #5ca0e9;">Articles sur <strong>l'intelligence artificielle</strong></h1></div>
      <div class="product_section_2">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="image_2"><img alt="<?php echo $article->image; ?>" src="<?php echo base_url("assets/images/")."/".$article->image; ?>"></div>
                <div class="price_text"><?php echo $article->categorie; ?></div>
                <h1 class="game_text"><?php echo $article->titre; ?></h1>
                <p class="long_text"><?php echo $article->texte; ?></p>
            </div>
            <div class="col-md-3"></div>
        </div>
      </div>
    </div>
</div>