const dataForm = () => {
    let forms = document.getElementById("frm");
    let nama = forms.nama.value;
    let pekerjaan = forms.pekerjaan.value;
    let hobby = forms.hobby.value;
    console.log(nama, pekerjaan, hobby);

    if (nama || pekerjaan || hobby != "") {
        let hasilNama, hasilPekerjaan, hasilHobby;
        hasilNama = document.getElementById("hasilNama").innerHTML = nama;
        hasilPekerjaan = document.getElementById("hasilPekerjaan").innerHTML =
            pekerjaan;
        hasilHobby = document.getElementById("hasilHobby").innerHTML = hobby;
    } else {
        alert("Isi Semua Form Input!");
    }
};

const resetButton = () => {
    
};
