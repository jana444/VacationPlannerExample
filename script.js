//jQuery applied to "Bucket list" located in activities.php
$(async function () {
    //user enters a text into an input form which is then saved to the list on button click
    $("#addBtn").on("click", function () {
        var toDoText = $("#formInput").val();
        $("#formInput").val('');
        addItem(toDoText);
    })
    //user enters a text into an input form which is then saved to the list on pressing an Enter key
    $("#formInput").keypress(function (event) {
        if (event.keycode === 13) {
            var toDoText = $(this).val();
            $(this).val('');
            addItem(toDoText);
        }
    })
    //function manimulates HTML DOM, creates a list item in ul
    function addItem(toDoText) {
        $("#container ul").append(`<li>${toDoText}<span><i class="fa-solid fa-trash"></i></span></li>`);
    }
    //toggle crosses out a list item when it's finished 
    $("body").on('click', 'li', function () {
        $(this).toggleClass('done');
    })
    //user can remove a list item by clicking on a "trash can" icon
    //the item is removed from the HTML list and from the database
    $('body').on('click','.fa-trash',function(){
        $(this).parent().parent().fadeOut(500,function(){
            $(this).remove();
        })
    })

});