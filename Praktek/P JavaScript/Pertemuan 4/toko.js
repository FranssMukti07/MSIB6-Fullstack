let frm = document.getElementById("online");
let produkPilihan = ["TV", "AC", "Kulkas"];
let pilihProduk = `<option value="" disabled selected>----Pilihan Produk-----</option>`;

for (let i = 0; i < produkPilihan.length; i++) {
    pilihProduk += `<option value="${produkPilihan[i]}">${produkPilihan[i]}</option>`;
}

frm.produk.innerHTML = pilihProduk;

const transaksi = () => {
    let nama = frm.nama.value;
    let produk = frm.produk.value;
    let jumlah = frm.jumlah.value;

    let hargaProduk;

    switch (produk) {
        case "TV":
            hargaProduk = 2000000;
            break;
        case "AC":
            hargaProduk = 3000000;
            break;
        case "Kulkas":
            hargaProduk = 5000000;
            break;

        default:
            hargaProduk = 0;
            break;
    }
    let hargaKotor = hargaProduk * jumlah;

    let diskon;
    if (produk == "Kulkas" && jumlah >= 3) {
        diskon = 0.3 * hargaKotor;
    } else if (produk == "AC" && jumlah >= 3) {
        diskon = 0.2 * hargaKotor;
    } else {
        diskon = 0.1 * hargaKotor;
    }

    let totalHarga = hargaKotor - diskon;

    swal(`
    Nama Pelangga : ${nama}
    Produk yang dibeli : ${produk}
    Harga Produk : ${hargaProduk}
    Jumlah Produk yang dibeli : ${jumlah}
    Diskon : ${diskon}
    Total Harga : ${totalHarga}
    `);
};
