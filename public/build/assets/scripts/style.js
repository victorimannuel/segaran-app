let menuToggle = document.getElementById('menu-toggle')
let logout = document.getElementById('logout')
let aside = document.getElementsByTagName('aside')[0]
let main = document.getElementsByTagName('main')[0]

const navHide = document.querySelectorAll("[navHide]")

menuToggle.addEventListener("click",() =>{
    state = aside.getAttribute("state")
    if(state == "open")
        closeNav()
    else if (state == "closed")
        openNav()
})



function closeNav() {
    aside.style.width= "3%"
    aside.setAttribute("state", "closed")

    main.style.marginLeft= "0"
    menuToggle.style.transform= "rotate(180deg)"
    logout.style.transform= "rotate(180deg)"
    logout.removeAttribute("hidden")

    hide()

}

function openNav() {
    aside.style.width= "auto"
    aside.setAttribute("state", "open")
    

    main.style.marginLeft= "20vw"
    menuToggle.style.transform= "rotate(360deg)"
    logout.style.transform= "rotate(360deg)"
    logout.setAttribute("hidden", "")

    unhide()
}

function hide(){
    for(var i=0; i<navHide.length; i++){
        
    navHide[i].setAttribute("hidden", "")

        
    }
}

function unhide(){
    for(var i=0; i<navHide.length; i++){
        navHide[i].removeAttribute("hidden")
    }
}

