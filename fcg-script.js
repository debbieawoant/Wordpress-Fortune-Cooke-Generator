jQuery(document).ready(function($) {
    var fortunes = [
        "You will have a great day!",
        "Adventure is on the horizon.",
        "Happiness will find you soon.",
        "An old friend will reappear in your life.",
        "Success is coming your way.",
        "Expect good news this week.",
        "You will achieve your goals.",
        "Love surrounds you everywhere you go.",
        "New opportunities are ahead.",
        "Your kindness will return to you."
    ];

    $('#fortune-btn').on('click', function() {
        var randomIndex = Math.floor(Math.random() * fortunes.length);
        var fortune = fortunes[randomIndex];

        $('#fortune-cookie').attr('src', fcg_images.cookie_broken).addClass('opened');
        $('#fortune-text').hide().text(fortune).fadeIn(600);
    });
});
