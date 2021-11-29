var modalparent = document.getElementsByClassName("modal1");
var btnmodal = document.getElementsByClassName("button1");
var closespan = document.getElementsByClassName("close1");
var delmodalp = document.getElementsByClassName("delmodal1");
var deldanger = document.getElementsByClassName("btn-danger");
var delclose = document.getElementsByClassName("delclose1");

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

function setDangerIndex() {

    for (i = 0; i < deldanger.length; i++)
    {
        deldanger[i].setAttribute('data-del', i);
        delmodalp[i].setAttribute('data-del', i);
        delclose[i].setAttribute('data-del', i);
    }
}

for (i = 0; i < deldanger.length; i++)
{
    deldanger[i].onclick = function() {
        var ElemIndex = this.getAttribute('data-del');
        delmodalp[ElemIndex].style.display = "block";
    };

    delclose[i].onclick = function() {
        var ElemIndex = this.getAttribute('data-del');
        delmodalp[ElemIndex].style.display = "none";
    };

}

window.onload = function() {

    setDataIndex();
    setDangerIndex();
};

window.onclick = function(event) {
    if (event.target === modalparent[event.target.getAttribute('data-index')]) {
        modalparent[event.target.getAttribute('data-index')].style.display = "none";
    }

    if (event.target === modal) {
        modal.style.display = "none";
    }
    
    if (event.target === delmodalp[event.target.getAttribute('data-del')]) {
        delmodalp[event.target.getAttribute('data-del')].style.display = "none";
    }
};