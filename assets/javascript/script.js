document.getElementById("registerButton").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Ambil nilai dari input
    var nama = document.querySelector('input[type="text"][placeholder="Masukkan Nama"]').value;
    var email = document.querySelector('input[type="text"][placeholder="Masukkan Email"]').value;
    var noHP = document.querySelector('input[type="number"][placeholder="Masukkan No HP"]').value;
    var alamat = document.querySelector('textarea[placeholder="Masukkan Alamat"]').value;

    // Periksa apakah ada data yang kosong
    if (nama === "" || email === "" || noHP === "" || alamat === "") {
        alert("Data tidak boleh kosong");
        return false; // Berhenti eksekusi script jika ada data yang kosong
    }

    // Jika semua data diisi, tampilkan pesan "Registrasi berhasil"
    alert("Registrasi berhasil");

    // Redirect ke halaman indeks
    window.location.href = "index.html";
});
