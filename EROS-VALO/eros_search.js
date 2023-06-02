function change_game_details(){
    var scrollValue = window.scrollY;
    var game_details = document.getElementById('game_details');
    console.log(scrollValue);
    if(scrollValue < 44){
        game_details.classList.remove('game_details_scrolled');
    } else{
        game_details.classList.add('game_details_scrolled')
    }
}

window.addEventListener('scroll', change_game_details);