const header =  document.querySelector("header");
window.addEventListener("scroll",function(){
    header.classList.toggle("sticky",this.window.scrollY >0);
}    

)
const searchbutton= document.getElementById('search-button'),
searchclose=document.getElementById('search-close'),
searchcontent=document.getElementById('search-content')
    if(searchbutton){
        searchbutton.addEventListener('click',()=>{
            searchcontent.classList.add('show-search')
    })
}
if(searchclose){
    searchclose.addEventListener('click',()=>{
        searchcontent.classList.remove('show-search')
})
}
const loginbutton= document.getElementById('login-button'),
loginclose=document.getElementById('login-close'),
logincontent=document.getElementById('login-content')
    if(loginbutton){
        loginbutton.addEventListener('click',()=>{
            logincontent.classList.add('show-login')
    })
}
    if(loginclose){
    loginclose.addEventListener('click',()=>{
        logincontent.classList.remove('show-login')
})
}
const womanbutton= document.getElementById('woman-button'),
womanclose=document.getElementById('woman-close'),
womancontent=document.getElementById('woman-content')
    if(womanbutton){
        womanbutton.addEventListener('click',()=>{
            womancontent.classList.add('show-woman')
    })
}
    if(womanclose){
    womanclose.addEventListener('click',()=>{
       womancontent.classList.remove('show-woman')
})
}
const shopbutton= document.getElementById('woman-button'),
shopclose=document.getElementById('woman-close'),
shopcontent=document.getElementById('woman-content')
    if(shopbutton){
        shopbutton.addEventListener('click',()=>{
            shopcontent.classList.add('show-woman')
    })
}
    if(shopclose){
    shopclose.addEventListener('click',()=>{
       content.classList.remove('show-woman')
})
}
const manbutton= document.getElementById('man-button'),
manclose=document.getElementById('woman-close'),
mancontent=document.getElementById('woman-content')
    if(manbutton){
        manbutton.addEventListener('click',()=>{
            mancontent.classList.add('show-woman')
    })
}
    if(manclose){
 manclose.addEventListener('click',()=>{
       mancontent.classList.remove('show-woman')
})
}
const kidsbutton= document.getElementById('kids-button'),
kidsclose=document.getElementById('woman-close'),
kidscontent=document.getElementById('woman-content')
    if(kidsbutton){
        kidsbutton.addEventListener('click',()=>{
            kidscontent.classList.add('show-woman')
    })
}
    if(kidsclose){
 kidsclose.addEventListener('click',()=>{
       kidscontent.classList.remove('show-woman')
})
}

class CartItem{
    constructor(name, desc, img, price){
        this.name = name
        this.desc = desc
        this.img=img
        this.price = price
        this.quantity = 1
   }
}

class LocalCart{
    static key = "cartItems"

    static getLocalCartItems(){
        let cartMap = new Map()
     const cart = localStorage.getItem(LocalCart.key)   
     if(cart===null || cart.length===0)  return cartMap
        return new Map(Object.entries(JSON.parse(cart)))
    }

    static addItemToLocalCart(id, item){
        let cart = LocalCart.getLocalCartItems()
        if(cart.has(id)){
            let mapItem = cart.get(id)
            mapItem.quantity +=1
            cart.set(id, mapItem)
        }
        else
        cart.set(id, item)
       localStorage.setItem(LocalCart.key,  JSON.stringify(Object.fromEntries(cart)))
       updateCartUI()
        
    }

    static removeItemFromCart(id){
    let cart = LocalCart.getLocalCartItems()
    if(cart.has(id)){
        let mapItem = cart.get(id)
        if(mapItem.quantity>1)
       {
        mapItem.quantity -=1
        cart.set(id, mapItem)
       }
       else
       cart.delete(id)
    } 
    if (cart.length===0)
    localStorage.clear()
    else
    localStorage.setItem(LocalCart.key,  JSON.stringify(Object.fromEntries(cart)))
       updateCartUI()
    }
}


const cartIcon = document.querySelector('.fa-cart-arrow-down')
const wholeCartWindow = document.querySelector('.whole-cart-window')
wholeCartWindow.inWindow = 0
const addToCartBtns = document.querySelectorAll('.add-to-cart-btn')
addToCartBtns.forEach( (btn)=>{
    btn.addEventListener('click', addItemFunction)
}  )

function addItemFunction(e){
    const id = e.target.parentElement.parentElement.parentElement.getAttribute("data-id")
    const img = e.target.parentElement.parentElement.previousElementSibling.src
    const name = e.target.parentElement.previousElementSibling.textContent
    const desc = e.target.parentElement.children[0].textContent
    let price = e.target.parentElement.children[1].textContent
    price = price.replace("Price: $", '')
    const item = new CartItem(name, desc, img, price)
    LocalCart.addItemToLocalCart(id, item)
 console.log(price)
}


cartIcon.addEventListener('mouseover', ()=>{
if(wholeCartWindow.classList.contains('hide'))
wholeCartWindow.classList.remove('hide')
})

cartIcon.addEventListener('mouseleave', ()=>{
    // if(wholeCartWindow.classList.contains('hide'))
    setTimeout( () =>{
        if(wholeCartWindow.inWindow===0){
            wholeCartWindow.classList.add('hide')
        }
    } ,500 )
    
    })

 wholeCartWindow.addEventListener('mouseover', ()=>{
     wholeCartWindow.inWindow=1
 })  
 
 wholeCartWindow.addEventListener('mouseleave', ()=>{
    wholeCartWindow.inWindow=0
    wholeCartWindow.classList.add('hide')
})  
 

function updateCartUI(){
    const cartWrapper = document.querySelector('.cart-wrapper')
    cartWrapper.innerHTML=""
    const items = LocalCart.getLocalCartItems()
    if(items === null) return
    let count = 0
    let total = 0
    for(const [key, value] of items.entries()){
        const cartItem = document.createElement('div')
        cartItem.classList.add('cart-item')
        let price = value.price*value.quantity
        price = Math.round(price*100)/100
        count+=1
        total += price
        total = Math.round(total*100)/100
        cartItem.innerHTML =
        `
                 
        <img src="${value.img}"> 
        <div class="details">
            <h3>${value.name}</h3>
            <p>
            ${value.desc}
            <br>
             <span class="quantity" >Quantity: ${value.quantity}</span>
             <br>
                <span class="price">Price: $ ${price}</span>
            </p>
        </div>
        <div class="cancel"><i class="fas fa-window-close"></i></div>
                      
                     
        `
           
       cartItem.lastElementChild.addEventListener('click', ()=>{
           LocalCart.removeItemFromCart(key)
       })
        cartWrapper.append(cartItem)
    }

    if(count > 0){
        cartIcon.classList.add('non-empty')
        let root = document.querySelector(':root')
        root.style.setProperty('--after-content', `"${count}"`)
        const subtotal = document.querySelector('.subtotal')
        subtotal.innerHTML = `SubTotal: $${total}`
    }
    else
    cartIcon.classList.remove('non-empty')
}
document.addEventListener('DOMContentLoaded', ()=>{updateCartUI()})
  

const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('header_menu')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})


// let menu = document.querySelector('#menu-icon');
// let navmenu = document.querySelector('.header_menu');

// menu.onclick = () => {
// 	menu.classList.toggle('bx-x');
// 	navmenu.classList.toggle('open');
// }

