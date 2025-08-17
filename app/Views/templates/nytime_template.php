    <section id="news">
        <h2>Top New York Times Technology News</h2>

        {results}
            <div class='ind-article'>
                <h3 class="new-title-0">{title}</h3>
                <div class="article-text">
                <img src="{urlToImage}" alt="Article Image">
                    <p>{abstract}</p>
                    <p class='published-date'><strong>Published At:</strong> {publishedAt}</p>
                </div>
                <p><a href="{url}" target="_blank">Read More</a></p>
            </div>
        {/results}
    </section>
