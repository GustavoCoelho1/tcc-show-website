//#region Menu mobile da NavBar
class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link, index) => {
            link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = `navLinkFade 0.5s ease forwards ${
                index / 7 + 0.3
            }s`);
        });
    }

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.mobileMenu)
        {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(".nav_menu", ".nav_linksLyt", ".nav_linksLyt li");

mobileNavbar.init();
//#endregion

/*
//#region Recursos
var item1 = document.querySelector("#item1");
var item2 = document.querySelector("#item2");
var item3 = document.querySelector("#item3");
var item4 = document.querySelector("#item4");

var txtItem1 = document.querySelector("#txtItem1");
var txtItem2 = document.querySelector("#txtItem2");
var txtItem3 = document.querySelector("#txtItem3");
var txtItem4 = document.querySelector("#txtItem4");

item1.addEventListener("mouseover", function() {
    txtItem1.style.display = "block";
});

item1.addEventListener("mouseleave", function() {
    txtItem1.style.display = "none";
});


item2.addEventListener("mouseover", function() {
    txtItem2.style.display = "block";
});

item2.addEventListener("mouseleave", function() {
    txtItem2.style.display = "none";
});


item3.addEventListener("mouseover", function() {
    txtItem3.style.display = "block";
});

item3.addEventListener("mouseleave", function() {
    txtItem3.style.display = "none";
});


item4.addEventListener("mouseover", function() {
    txtItem4.style.display = "block";
});

item4.addEventListener("mouseleave", function() {
    txtItem4.style.display = "none";
})
//#endregion*/