$(document).ready(function() {
    // Function to check if articles are in the viewport
    const checkViewport = () => {
        $(".article").each(function() {
            // Get the position of the article relative to the viewport
            const rect = this.getBoundingClientRect();

            // Check if the article is within the viewport
            // rect.top < window.innerHeight is true only when the top of the article 
            // has entered the viewport (screen)
            if (rect.top < $(window).height()) {
                // Add the "visible" class to trigger the CSS animation
                $(this).addClass("visible");
            }
        });

        $(".ind-article").each(function() {
            // Get the position of the article relative to the viewport
            const rect = this.getBoundingClientRect();

            // Check if the article is within the viewport
            // rect.top < window.innerHeight is true only when the top of the article 
            // has entered the viewport (screen)
            if (rect.top < $(window).height()) {
                // Add the "visible" class to trigger the CSS animation
                $(this).addClass("visible");
            }
        });
    };

    // Run the check on page load
    checkViewport();

    // Run the check on scroll
    $(window).on("scroll", checkViewport);
});
