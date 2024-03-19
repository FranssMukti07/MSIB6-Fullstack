const tambah = () => {
    let frm = document.getElementById("kal");
    let a1 = parseFloat(frm.angka1.value);
    let a2 = parseFloat(frm.angka2.value);

    let total = a1 + a2;
    frm.hasil.value = total;
};
const kurang = () => {
    let frm = document.getElementById("kal");
    let a1 = parseFloat(frm.angka1.value);
    let a2 = parseFloat(frm.angka2.value);

    let total = a1 - a2;
    frm.hasil.value = total;
};
const kali = () => {
    let frm = document.getElementById("kal");
    let a1 = parseFloat(frm.angka1.value);
    let a2 = parseFloat(frm.angka2.value);

    let total = a1 * a2;
    frm.hasil.value = total;
};
const bagi = () => {
    let frm = document.getElementById("kal");
    let a1 = parseFloat(frm.angka1.value);
    let a2 = parseFloat(frm.angka2.value);

    let total = a1 / a2;
    frm.hasil.value = total;
};
const pangkat = () => {
    let frm = document.getElementById("kal");
    let a1 = parseFloat(frm.angka1.value);
    let a2 = parseFloat(frm.angka2.value);

    let total = a1 ** a2;
    frm.hasil.value = total;
};
const reset = () => {
    let frm = document.getElementById("kal");
    result = "";
    frm.angka1.value = result;
    frm.angka2.value = result;
    frm.hasil.value = result;
};
