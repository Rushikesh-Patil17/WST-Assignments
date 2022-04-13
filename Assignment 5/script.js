$(document).ready(function () {
    $("#upvote").click(function () {
        $.ajax({
            url: 'vote.php',
            type: "POST",
            data: { user: user, vote: 'up' },
            success: function (data) {
                let votes = parseInt($("#vote").html()) + 1;
                $("#vote").html(votes);
            }
        });
    });

    $("#downvote").click(function () {
        $.ajax({
            url: 'vote.php',
            type: "POST",
            data: { user: user, vote: 'down' },
            success: function (data) {
                let votes = parseInt($("#vote").html()) - 1;
                $("#vote").html(votes);
            }
        });
    });
});
