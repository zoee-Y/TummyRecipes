var recipeDetails = document.getElementsByClassName("recipeInfo");
var HideShow = document.getElementsByClassName("recipeTog");

$(document).ready(function()
{
    $(recipeDetails).click(function()
    {
        $(HideShow).toggle();
    });
});