$(document).ready(function(){
    setTimeout(function(){
        $("div.alert").remove();
    }, 5000 );

    $('.btn-submit__vote').click(function(){
        event.preventDefault();
        $('.new_vote_added').attr('action','/api/poll/')
        const pollId = $(this).index('.btn-submit__vote') + 1;
        const prevForm = $('.new_vote_added').attr('action');
        const optionId = $('input[name="radio_option"]:checked').val();
        const newForm = prevForm + pollId + '/option/' + optionId;

        $('.new_vote_added').attr('action',newForm);
        if(optionId && pollId)
            $('.new_vote_added').submit();
    })

});
