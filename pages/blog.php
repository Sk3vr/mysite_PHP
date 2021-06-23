<div class="main__center">
    <div class="main__center-heading">
        <h1 class="align-center">Блог</h1>
    </div>
</div>
<a href="#section" class="mouse_btn font-green">
    <span class="ion ion-mouse"></span>
</a>
<section id="section" class="section">
    <h2 class="section__title">Последние посты</h2>
		<?php foreach($blogs as $blog ): ?>
		<article>
        <div class="section__about">
            <h3><?= $blog['heading'] ?></h3>
            <p><?= $blog['body'] ?></p>
        </div>
		</article> 
		<?php endforeach; ?>
</section>