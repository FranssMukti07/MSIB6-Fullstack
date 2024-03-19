const IDRupiah = new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
});

let frm = document.getElementById("formPegawai");

let pilihanJabatan = ["Manager", "Asisten Manager", "Staff"];
let pilihJabatan = `<option value="" disabled selected>---Choose One---</option>`;
for (let i = 0; i < pilihanJabatan.length; i++) {
    pilihJabatan += `<option value="${pilihanJabatan[i]}">${pilihanJabatan[i]}</option>`;
}
frm.jabatan.innerHTML = pilihJabatan;

const result = () => {
    let nama = frm.nama.value;
    let jabatan = frm.jabatan.value;
    let status = frm.status.value;
    let gapok, tunjanganJabatan, bpjs, tunjanganKeluarga, totalGaji;

    if (jabatan == "Manager") {
        gapok = 15000000;
    } else if (jabatan == "Asisten Manager") {
        gapok = 10000000;
    } else {
        gapok = 5000000;
    }
    frm.gajiPokok.value = gapok;

    tunjanganJabatan = 0.15 * gapok;
    bpjs = 0.1 * gapok;
    tunjanganKeluarga = status == "Sudah Menikah" ? 0.2 * gapok : 0;

    totalGaji = gapok + tunjanganJabatan + bpjs + tunjanganKeluarga;

    let tableResult = `
                    <thead bgcolor="orange">
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Status Pegawai</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan Jabatan</th>
                        <th>BPJS</th>
                        <th>Tunjangan Keluarga</th>
                    </thead>
                    <tbody align=center>
                        <td>${nama}</td>
                        <td>${jabatan}</td>
                        <td>${status}</td>
                        <td>${IDRupiah.format(gapok)}</td>
                        <td>${IDRupiah.format(tunjanganJabatan)}</td>
                        <td>${IDRupiah.format(bpjs)}</td>
                        <td>${IDRupiah.format(tunjanganKeluarga)}</td>
                    </tbody>
                    <tfoot align="center">
                        <th colspan=7 bgcolor="aqua">Total Gaji</th>
                        <td bgcolor="grey"><font color="white">${IDRupiah.format(
                            totalGaji
                        )}</font></td>
                    </tfoot>`;

    document.getElementById("hasil").innerHTML = tableResult;
};
