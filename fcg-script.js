jQuery(document).ready(function($) {
    const fortunes = [
        "You will find joy in simple things.",
        "A new opportunity will soon present itself.",
        "Your kindness will lead you to success.",
        "Adventure is on the horizon.",
        "Someone appreciates your smile.",
        "Your hard work will soon pay off.",
        "Good news is coming your way.",
        "Happiness begins with facing life with a smile.",
        "A dream you have will come true.",
        "Your talents will be recognized and rewarded.",
        "A surprise encounter will brighten your day.",
        "You will soon embark on a new journey.",
        "An old friend will reappear in your life.",
        "Your heart will guide you to the right path.",
        "Believe in yourself and others will too.",
        "The best is yet to come.",
        "A small gift will mean a lot.",
        "Your positivity will attract good things.",
        "Patience will be rewarded.",
        "Love is just around the corner."
    ];

    $('#fcg-btn').on('click', function() {
        const cookie = $('#fortune-cookie');
        const text = $('#fortune-text');
        const randomFortune = fortunes[Math.floor(Math.random() * fortunes.length)];
        cookie.addClass('broken');
        setTimeout(() => {
            text.text(randomFortune);
        }, 600);
    });
});
