var modalparent = document.getElementsByClassName("modal1");
var btnmodal = document.getElementsByClassName("button");
var closespan = document.getElementsByClassName("close1");

function setDataIndex() {

    for (i = 0; i < btnmodal.length; i++)
    {
        btnmodal[i].setAttribute('data-index', i);
        modalparent[i].setAttribute('data-index', i);
        closespan[i].setAttribute('data-index', i);
    }
}

for (i = 0; i < btnmodal.length; i++)
{
    btnmodal[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalparent[ElementIndex].style.display = "block";
    };

    closespan[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalparent[ElementIndex].style.display = "none";
    };

}

window.onload = function() {

    setDataIndex();
};

window.onclick = function(event) {
    if (event.target === modalparent[event.target.getAttribute('data-index')]) {
        modalparent[event.target.getAttribute('data-index')].style.display = "none";
    }

    if (event.target === modal) {
        modal.style.display = "none";
    }
};