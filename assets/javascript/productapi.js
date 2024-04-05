document.addEventListener('DOMContentLoaded', function() {
    const apiUrl = 'https://crudcrud.com/api/30e03c99e2e844cbac236b5a408e9162/products'; // Ganti dengan URL API CRUDcrud Anda

    // Fungsi untuk mengambil data produk dari API
    async function fetchProducts() {
        try {
            const response = await fetch(apiUrl);
            if (!response.ok) {
                throw new Error('Gagal mengambil data produk');
            }
            const products = await response.json();
            displayProducts(products);
        } catch (error) {
            console.error(error);
        }
    }

    // Fungsi untuk menampilkan daftar produk pada halaman HTML
    function displayProducts(products) {
        const productsContainer = document.getElementById('products');
        productsContainer.innerHTML = '';

        products.forEach(product => {
            const productElement = document.createElement('div');
            productElement.innerHTML = `
                <h2>${product.name}</h2>
                <p>Harga: ${product.price}</p>
                <p>Deskripsi: ${product.description}</p>
            `;
            productsContainer.appendChild(productElement);
        });
    }

    // Panggil fungsi fetchProducts untuk mengambil dan menampilkan data saat halaman dimuat
    fetchProducts();
});

// Contoh data produk
const exampleProducts = [
    {
        name: "Kemeja Polos",
        price: 150000,
        description: "Kemeja dengan desain polos yang nyaman dipakai sehari-hari."
    },
    {
        name: "Celana Jeans",
        price: 250000,
        description: "Celana jeans dengan bahan denim berkualitas tinggi."
    },
    {
        name: "Sweater Rajut",
        price: 200000,
        description: "Sweater rajut yang hangat untuk cuaca dingin."
    }
];
