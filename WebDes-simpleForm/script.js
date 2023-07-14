function Submit(){
    const nama = document.querySelector('#nama').value;
    const tgl = document.querySelector('#lahir').value;
    var jkel = document.getElementsByName('inlineRadioOptions');
    var jenis = "";
    for (var i=0, length=jkel.length; i<length; i++) {
        if (jkel[i].checked) {
            jenis = jkel[i].value;
            break;
        }
    }
    const hobi = document.getElementsByName('hobi');
    var arrhob = [];
    for (var i=0, length=hobi.length; i<length; i++) {
        if (hobi[i].checked) {
            arrhob.push(hobi[i].value);
        }
    }
    const agama = document.querySelector('#agama').value;
    const pesan = document.querySelector('#pesan').value;

    const isinama = document.querySelector('#table #tnama');
    isinama.innerHTML = nama;
    const isitgl = document.querySelector('#table #ttgl');
    isitgl.innerHTML = tgl;
    const isijkel = document.querySelector('#table #tjkel');
    isijkel.innerHTML = jenis;
    const isihobi = document.querySelector('#table #thobi');
    isihobi.innerHTML = arrhob.join(', ');
    const isiagama = document.querySelector('#table #tagama');
    isiagama.innerHTML = agama;
    const isipesan = document.querySelector('#table #tpesan');
    isipesan.innerHTML = pesan;

    table.classList.remove('d-none');
}