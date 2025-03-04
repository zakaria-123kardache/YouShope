const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

/* Bottom to Top button */

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})


// LocalStg ProduitDeai

const productId = "{{ $produit->id }}";
const productName = "{{ $produit->name }}";
const productPrice = "{{ $produit->prix }}";
const productPhoto = "{{ asset($produit->photo) }}";

function ajouterAuPanier(id, name, prix, photo, quantite) {
    let produit = {
        id: id,
        name: name,
        prix: prix,
        photo: photo,
        quantite: parseInt(quantite)
    };

    let panier = JSON.parse(localStorage.getItem("panier")) || [];;
    panier.push(produit);
    localStorage.setItem("panier", JSON.stringify(panier));
}


// localstrorig paier 
let grandTotal = 0;

function afficherPanier() {

    let panierTable = document.getElementById("panier-items");
    let panier = JSON.parse(localStorage.getItem("panier"));

    panierTable.innerHTML = "";

    panier.forEach((produit) => {
        let itemTotal = (parseFloat(produit.prix) * produit.quantite);
        grandTotal += itemTotal;
        let row = `
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="${produit.photo}" alt="${produit.name}" width="50">
                        <div>
                            <p>${produit.name}</p>
                            <small>prix: ${produit.prix}$</small>
                            <br/>
                             <a href="#" onclick="removeProduit('${produit.id}'); return false;">remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="${produit.quantite}" min="1"></td>
                <td>${itemTotal}$</td>
            </tr>
        `;
        panierTable.innerHTML += row;
        document.querySelector('.total-price td:last-child').innerHTML = `${grandTotal}$`;
    });

}

function removeProduit(produitId) {
    let panier = JSON.parse(localStorage.getItem("panier"));
    panier = panier.filter((produit) => produit.id !== produitId);
    localStorage.setItem("panier", JSON.stringify(panier));
    afficherPanier();
}
document.addEventListener("DOMContentLoaded", afficherPanier);


function validerCommande() {
    let panier = JSON.parse(localStorage.getItem("panier"));
    if (panier.length === 0) {
        alert("Panier vide");
        return;
    }

    fetch('/checkout', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content') 
        },
        body: JSON.stringify({ produits: panier })
    })
    .then(res => {
     res.headers.get('content-type');

        if (!res.ok) {
            return res.text().then(text => {
                console.error('Error response:', text);
                throw new Error(text || 'Erreur lors de la commande');
            });
        }
        return res.json();
    })
    .then(data => {
        alert(data.message);
        localStorage.removeItem("panier");
        window.location.href = "/checkout";
    })
    .catch(error => {
        console.error("Erreur détaillée:", error);
        alert("Une erreur s'est produite lors de la commande: " + error.message);
    });
}