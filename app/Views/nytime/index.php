<!--
 Name: Andres Contreras Alvarez
 Final Project
 Purpose: create a full-featured MVC website by extending Assignments 8/9,
 adding a contact page, adding MVC + AJAX, and adding a 3rd party API.
-->
<section id="news">
    <h2>Top New York Times Technology News</h2>
    
    <?php if (!empty($results)): ?>
        <?php foreach ($results as $article): ?>
            <div class='ind-article'>
                <h3 class="new-title-0"><?= esc($article['title']) ?></h3>
                <div class="article-text">
                    <?php if (!empty($article['urlToImage'])): ?>
                        <img src="<?= esc($article['urlToImage']) ?>" alt="Article Image">
                    <?php endif; ?>
                    <p><?= esc($article['abstract']) ?></p>
                    <p class='published-date'><strong>Published At:</strong> <?= esc($article['publishedAt']) ?></p>
                </div>
                <p><a href="<?= esc($article['url']) ?>" target="_blank">Read More</a></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No news articles available at the moment.</p>
    <?php endif; ?>
</section>
<script src="assets/js/main.js"></script>


